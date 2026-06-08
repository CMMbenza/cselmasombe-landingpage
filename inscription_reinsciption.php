<?php
session_start();

if(empty($_SESSION['csrf_token']))
{
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription / Réinscription Élèves</title>
    <link rel="shortcut icon" href="asset/img/airtel.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
    body {
        background: #f4f6f9;
    }

    .main-card {
        border: none;
        border-radius: 15px;
    }

    .main-card .card-header {
        border-radius: 15px 15px 0 0 !important;
    }

    .eleve-card {
        background: #fff;
        border: 1px solid #dee2e6;
        border-radius: 12px;
        padding: 20px;
        margin-bottom: 20px;
        position: relative;
    }

    .btn-remove {
        position: absolute;
        top: 15px;
        right: 15px;
    }

    .section-title {
        font-size: 1.1rem;
        font-weight: 600;
        color: #0d6efd;
        margin-bottom: 15px;
    }

    .hidden {
        display: none;
    }
    </style>
</head>

<body>

    <div class="container py-5">

        <div class="card shadow main-card">

            <div class="card-header bg-primary text-white">
                <h3 class="mb-0">
                    Formulaire d'Inscription / Réinscription
                </h3>
            </div>

            <div class="card-body">

                <!-- TYPE DEMANDE -->

                <div class="mb-4">

                    <!-- INSCRIPTION -->
                    <form method="POST" action="save_inscription.php">
                        <input type="hidden" name="form_token" value="<?= uniqid('',true) ?>">
                        <div>
                            <div class="col-12">
                                Bienvenue parmi nous. Veuillez vous inscrire si vous êtes nouveau. Si vous êtes déjà
                                inscrit, veuillez simplement mettre à jour vos informations en remplissant le
                                formulaire.<a href="http://">Cliquez ici
                                    pour consulter le billet de vacance</a>
                            </div>

                            <hr class="">
                            <div class="section-title">
                                Informations du responsable
                            </div>

                            <div class="row">

                                <div class="col-md-4 mb-3">
                                    <label class="form-label">
                                        Nom complet du responsable
                                    </label>
                                    <input type="text" class="form-control" name="responsable_nom">
                                </div>

                                <div class="col-md-4 mb-3">
                                    <label class="form-label">
                                        Téléphone principal
                                    </label>
                                    <input type="text" class="form-control" name="telephone1">
                                </div>

                                <div class="col-md-4 mb-3">
                                    <label class="form-label">
                                        Téléphone secondaire
                                    </label>
                                    <input type="text" class="form-control" name="telephone2">
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label class="form-label">
                                        Adresse e-mail
                                    </label>
                                    <input type="email" class="form-control" name="email">
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label class="form-label">
                                        Profession
                                    </label>
                                    <input type="text" class="form-control" name="profession">
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-12"><label for="">Adresse complète</label>
                                    <textarea name="adresse" id="adresse" class="form-control" cols="30" rows="3"
                                        placeholder="Entrez votre adresse complète" name="adresse"></textarea>
                                </div>
                            </div>

                            <hr>

                            <h5 class="mb-3">
                                Élèves
                            </h5>

                            <div id="elevesContainer"></div>

                            <!-- BOUTON EN BAS -->

                            <div class="mt-3 mb-4">

                                <button type="button" id="ajouterEleve" class="btn btn-success">

                                    + Ajouter un élève

                                </button>

                            </div>

                            <div class="form-check mb-4">

                                <input class="form-check-input" type="checkbox" required>

                                <label class="form-check-label">

                                    Je certifie que les informations fournies
                                    sont exactes et complètes.

                                </label>

                            </div>
                            <div class="text-start">

                                <button type="submit" class="btn btn-primary btn-lg">

                                    Validez maintenant

                                </button>

                            </div>

                        </div>
                    </form>
                </div>

            </div>

        </div>

        <script>
        const classes = [
            '1ère Maternelle',
            '2ème Maternelle',
            '3ème Maternelle',

            '1ère Primaire',
            '2ème Primaire',
            '3ème Primaire',
            '4ème Primaire',
            '5ème Primaire',
            '6ème Primaire',

            '7ème EB',
            '8ème EB',

            '1ère Humanité',
            '2ème Humanité',
            '3ème Humanité',
            '4ème Humanité'
        ];

        const optionsHumanites = [
            'Scientifique',
            'Littéraire',
            'Commerciale',
            'Électricité',
            'Mécanique',
            'Pédagogie',
            'Nutrition',
            'Coupe et Couture',
            'Autre'
        ];

        const blocInscription =
            document.getElementById('blocInscription');

        const blocReinscription =
            document.getElementById('blocReinscription');

        let compteur = 0;

        /* Choix inscription / réinscription */

        document
            .querySelectorAll('input[name="type_demande"]')
            .forEach(radio => {

                radio.addEventListener('change', function() {

                    blocInscription.style.display = 'none';
                    blocReinscription.style.display = 'none';

                    if (this.value === 'inscription') {
                        blocInscription.style.display = 'block';

                        if (document.getElementById('elevesContainer').children.length === 0) {
                            ajouterEleve();
                        }
                    }

                    if (this.value === 'reinscription') {
                        blocReinscription.style.display = 'block';
                    }

                });

            });

        /* Génération options */

        function genererOptionsClasse() {

            let html = '';

            classes.forEach(classe => {

                html += `
            <option value="${classe}">
                ${classe}
            </option>
        `;

            });

            return html;
        }

        function genererOptionsHumanite() {

            let html = '';

            optionsHumanites.forEach(option => {

                html += `
            <option value="${option}">
                ${option}
            </option>
        `;

            });

            return html;
        }

        /* Ajout élève */

        function ajouterEleve() {

            compteur++;

            const bloc = document.createElement('div');

            bloc.className = 'eleve-card';

            bloc.innerHTML = `

        <button
            type="button"
            class="btn btn-danger btn-sm btn-remove">

            Supprimer

        </button>

        <h5 class="mb-4">
            Élève ${compteur}
        </h5>

        <div class="row">

            <div class="col-md-4 mb-3">
                <label class="form-label">Nom</label>
                <input type="text" class="form-control" name="nom[]">
            </div>

            <div class="col-md-4 mb-3">
                <label class="form-label">Postnom</label>
                <input type="text" class="form-control" name="postnom[]">
            </div>

            <div class="col-md-4 mb-3">
                <label class="form-label">Prénom</label>
                <input type="text" class="form-control" name="prenom[]">
            </div>

            <div class="col-md-4 mb-3">
                <label class="form-label">Lieu de naissance</label>
                <input type="text" class="form-control" name="lieu[]">
            </div>

            <div class="col-md-4 mb-3">
                <label class="form-label">Date de naissance</label>
                <input type="date" class="form-control" name="date[]">
            </div>

            <div class="col-md-4 mb-3">

                <label class="form-label">
                    Genre
                </label>

                <select class="form-select" name="genre[]">

                    <option value="">
                        Choisir
                    </option>

                    <option value="M">
                        Masculin
                    </option>

                    <option value="F">
                        Féminin
                    </option>

                </select>

            </div>

            <div class="col-md-3 mb-3">

                <label class="form-label">
                    Classe sollicitée
                </label>

                <select class="form-select classe-select" name="classe[]">

                    <option value="">
                        Sélectionner
                    </option>

                    ${genererOptionsClasse()}

                </select>

            </div>

            <div
                class="col-md-3 mb-3 option-container"
                style="display:none;">

                <label class="form-label">
                    Option
                </label>

                <select class="form-select" name="option[]">

                    <option value="">
                        Sélectionner
                    </option>

                    ${genererOptionsHumanite()}

                </select>

            </div>

            <div class="col-md-3 mb-3">

                <label class="form-label">
                    École de provenance
                </label>

                <input
                    type="text"
                    class="form-control" name="ecole[]">

            </div>

        </div>

    `;

            document
                .getElementById('elevesContainer')
                .appendChild(bloc);

            bloc
                .querySelector('.btn-remove')
                .addEventListener('click', function() {

                    bloc.remove();

                });

            const classeSelect =
                bloc.querySelector('.classe-select');

            const optionContainer =
                bloc.querySelector('.option-container');

            classeSelect.addEventListener('change', function() {

                if (this.value.includes('Humanité')) {
                    optionContainer.style.display = 'block';
                } else {
                    optionContainer.style.display = 'none';
                }

            });

        }

        function genererOptionsClasse() {

            return `
        <optgroup label="MATERNELLE">
            <option value="1ère Maternelle">1ère Maternelle</option>
            <option value="2ème Maternelle">2ème Maternelle</option>
            <option value="3ème Maternelle">3ème Maternelle</option>
        </optgroup>

        <optgroup label="PRIMAIRE">
            <option value="1ère Primaire">1ère Primaire</option>
            <option value="2ème Primaire">2ème Primaire</option>
            <option value="3ème Primaire">3ème Primaire</option>
            <option value="4ème Primaire">4ème Primaire</option>
            <option value="5ème Primaire">5ème Primaire</option>
            <option value="6ème Primaire">6ème Primaire</option>
        </optgroup>

        <optgroup label="ÉDUCATION DE BASE">
            <option value="7ème EB">7ème EB</option>
            <option value="8ème EB">8ème EB</option>
        </optgroup>

        <optgroup label="HUMANITÉS">
            <option value="1ère Humanité">1ère Humanité</option>
            <option value="2ème Humanité">2ème Humanité</option>
            <option value="3ème Humanité">3ème Humanité</option>
            <option value="4ème Humanité">4ème Humanité</option>
        </optgroup>
    `;
        }

        /* Bouton ajouter */

        document
            .getElementById('ajouterEleve')
            .addEventListener('click', ajouterEleve);
        </script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>