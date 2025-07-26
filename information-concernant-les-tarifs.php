<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: /auth/login.php');
    exit;
}
include 'header.php';
?>
<main style="padding: 2rem; text-align: center;">
  <h1>Nos Tarifs et Services</h1>
  <p>
      Les informations détaillées sur nos tarifs et services seront bientôt disponibles ici.
  </p>
</main>
<script src="script/burger.js"></script> 