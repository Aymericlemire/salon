<?php
// Fichier de configuration pour la connexion à SQLite
$db_file = __DIR__ . '/db.sqlite';

try {
    $pdo = new PDO('sqlite:' . $db_file);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // Création de la table users si elle n'existe pas
    $pdo->exec('CREATE TABLE IF NOT EXISTS users (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        email TEXT NOT NULL UNIQUE,
        password TEXT NOT NULL,
        nom TEXT,
        prenom TEXT,
        date_inscription DATETIME DEFAULT CURRENT_TIMESTAMP
    )');
} catch (PDOException $e) {
    die('Erreur de connexion à la base de données : ' . $e->getMessage());
}
?> 