<?php
declare(strict_types=1);

require_once __DIR__ . '/../env.php';

$host     = $_ENV['DB_HOST'];
$dbname   = $_ENV['DB_NAME'];
$username = $_ENV['DB_USER'];
$password = $_ENV['DB_PASS'];
$charset  = $_ENV['DB_CHARSET'];

try {

    $pdo = new PDO(
        "mysql:host={$host};dbname={$dbname};charset={$charset}",
        $username,
        $password,
        [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ]
    );

} catch (PDOException $e) {

    if (($_ENV['APP_DEBUG'] ?? 'false') === 'true') {
        die('Erreur DB : ' . $e->getMessage());
    }

    die('Erreur de connexion à la base de données.');
}