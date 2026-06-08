<?php
declare(strict_types=1);

require_once 'database/db_connect.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    exit('Accès interdit');
}

try {

    $pdo->beginTransaction();

    /*
    |--------------------------------------------------------------------------
    | CODE FAMILLE AUTO
    |--------------------------------------------------------------------------
    */

    $year = date('Y');

    $stmt = $pdo->query("SELECT COUNT(*) as total FROM responsables");
    $count = (int)$stmt->fetch()['total'];

    $code_famille = 'FAM' . $year . str_pad((string)($count + 1), 4, '0', STR_PAD_LEFT);

    /*
    |--------------------------------------------------------------------------
    | RESPONSABLE
    |--------------------------------------------------------------------------
    */

    $sql = "INSERT INTO responsables
    (
        code_famille,
        nom_complet,
        telephone1,
        telephone2,
        email,
        profession,
        adresse,
        created_at
    )
    VALUES
    (
        :code,
        :nom,
        :tel1,
        :tel2,
        :email,
        :profession,
        :adresse,
        NOW()
    )";

    $stmt = $pdo->prepare($sql);

    $stmt->execute([
        ':code' => $code_famille,
        ':nom' => $_POST['responsable_nom'] ?? '',
        ':tel1' => $_POST['telephone1'] ?? '',
        ':tel2' => $_POST['telephone2'] ?? '',
        ':email' => $_POST['email'] ?? '',
        ':profession' => $_POST['profession'] ?? '',
        ':adresse' => $_POST['adresse'] ?? ''
    ]);

    $responsable_id = (int)$pdo->lastInsertId();

    /*
    |--------------------------------------------------------------------------
    | ÉLÈVES (ARRAYS)
    |--------------------------------------------------------------------------
    */

    if (!empty($_POST['nom'])) {

        $sqlEleve = "INSERT INTO inscriptions
        (
            responsable_id,
            code_famille,
            nom,
            postnom,
            prenom,
            lieu_naissance,
            date_naissance,
            genre,
            classe,
            option,
            ecole_provenance,
            annee_scolaire,
            created_at
        )
        VALUES
        (
            :rid,
            :code,
            :nom,
            :postnom,
            :prenom,
            :lieu,
            :date,
            :genre,
            :classe,
            :option,
            :ecole,
            :annee,
            NOW()
        )";

        $stmtEleve = $pdo->prepare($sqlEleve);

        foreach ($_POST['nom'] as $i => $nom) {

            $stmtEleve->execute([
                ':rid' => $responsable_id,
                ':code' => $code_famille,
                ':nom' => $nom,
                ':postnom' => $_POST['postnom'][$i] ?? '',
                ':prenom' => $_POST['prenom'][$i] ?? '',
                ':lieu' => $_POST['lieu'][$i] ?? '',
                ':date' => $_POST['date'][$i] ?? null,
                ':genre' => $_POST['genre'][$i] ?? '',
                ':classe' => $_POST['classe'][$i] ?? '',
                ':option' => $_POST['option'][$i] ?? '',
                ':ecole' => $_POST['ecole'][$i] ?? '',
                ':annee' => '2026-2027'
            ]);
        }
    }

    $pdo->commit();

    echo '
<div style="max-width:650px; margin:60px auto; padding:35px; background:#ffffff; border-radius:12px; box-shadow:0 4px 15px rgba(0,0,0,0.1); text-align:center; font-family:Arial, sans-serif;">

    <h2 style="color:#28a745; margin-bottom:20px;">
        Merci pour votre intérêt !
    </h2>

    <p style="font-size:16px; color:#555; line-height:1.8;">
        Nous vous remercions sincèrement pour l\'intérêt que vous portez à notre établissement.
        Votre demande de préinscription a bien été enregistrée.
    </p>

    <p style="font-size:16px; color:#555; line-height:1.8;">
        Afin de finaliser le dossier de votre enfant, nous vous invitons à vous présenter
        à l\'école pour compléter les informations nécessaires, effectuer la confirmation
        des paiements et déposer les documents requis.
    </p>

    <p style="font-size:16px; color:#555; line-height:1.8;">
        Notre équipe administrative reste à votre disposition pour tout accompagnement
        durant cette étape.
    </p>

    <div style="margin-top:30px;">
        <a href="index.php"
           style="display:inline-block;
                  padding:12px 30px;
                  background:linear-gradient(135deg,#007bff,#0056b3);
                  color:#fff;
                  text-decoration:none;
                  font-weight:bold;
                  border-radius:8px;">
            Retour à l\'accueil
        </a>
    </div>

</div>
';

} catch (Exception $e) {

    $pdo->rollBack();
    die("Erreur : " . $e->getMessage());
}