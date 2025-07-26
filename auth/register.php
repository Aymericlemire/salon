<?php
require_once 'config.php';
$message = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';
    $nom = trim($_POST['nom'] ?? '');
    $prenom = trim($_POST['prenom'] ?? '');
    if ($email && $password) {
        $hash = password_hash($password, PASSWORD_DEFAULT);
        try {
            $stmt = $pdo->prepare('INSERT INTO users (email, password, nom, prenom) VALUES (?, ?, ?, ?)');
            $stmt->execute([$email, $hash, $nom, $prenom]);
            $message = 'Inscription réussie ! <a href="login.php">Se connecter</a>';
        } catch (PDOException $e) {
            $message = 'Erreur : ' . ($e->getCode() == 23000 ? 'Email déjà utilisé.' : $e->getMessage());
        }
    } else {
        $message = 'Veuillez remplir tous les champs obligatoires.';
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Inscription</title>
    <link rel="stylesheet" href="../design/style.css">
    <style>
        body { background: #181818; color: #fff; }
        .auth-container { max-width: 400px; margin: 60px auto; padding: 32px; background: rgba(0,0,0,0.7); border-radius: 16px; box-shadow: 0 4px 32px #000a; }
        .auth-container h2 { text-align: center; margin-bottom: 24px; }
        .auth-container input, .auth-container button { width: 100%; margin-bottom: 16px; padding: 12px; border-radius: 8px; border: none; }
        .auth-container button { background: #fff; color: #181818; font-weight: bold; cursor: pointer; transition: background 0.2s; }
        .auth-container button:hover { background: #e0e0e0; }
        .message { text-align: center; margin-bottom: 16px; color: #ffb300; }
        a { color: #fff; text-decoration: underline; }
    </style>
</head>
<body>
<div class="auth-container">
    <h2>Créer un compte</h2>
    <?php if ($message) echo '<div class="message">'.$message.'</div>'; ?>
    <form method="post">
        <input type="email" name="email" placeholder="Email *" required>
        <input type="password" name="password" placeholder="Mot de passe *" required>
        <input type="text" name="nom" placeholder="Nom">
        <input type="text" name="prenom" placeholder="Prénom">
        <button type="submit">S'inscrire</button>
    </form>
    <div style="text-align:center; margin-top:12px;">
        <a href="login.php">Déjà un compte ? Se connecter</a>
    </div>
</div>
</body>
</html> 