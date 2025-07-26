<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: /auth/login.php');
    exit;
}
include 'header.php';
?>
<main>
  <section id="reservation">
    <h1>Réserver en ligne</h1>
    <div id="planity-container"></div>
  </section>
</main>
<footer>
  <div class="footer-socials">
    <a href="http://www.facebook.com/danohys" target="_blank"><img src="./img/facebook.png" alt="Facebook Danohys" /></a>
    <a href="https://instagram.com/danohys" target="_blank"><img src="./img/instagram.png" alt="Instagram Danohys" /></a>
  </div>
  <p>&copy; 2024 Danohys. Tous droits réservés.</p>
  <p>Retour à l'<a href="index.php">accueil</a>.</p>
</footer>
<script src="./script/burger.js"></script>
<!-- Planity Widget Config -->
<script>
  const container = document.getElementById('planity-container');
  window.planity = {
    key: '2107--MjDz0M6MZKt7XnATvNT',
    primaryColor: '#222',
    container: container,
    appointmentContainer: container
  };
</script>
<script src="https://d2skjte8udjqxw.cloudfront.net/widget/production/2/polyfills.latest.js"></script>
<script src="https://d2skjte8udjqxw.cloudfront.net/widget/production/2/app.latest.js"></script> 