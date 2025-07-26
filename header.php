<?php
if (session_status() === PHP_SESSION_NONE) session_start();
$is_logged = isset($_SESSION['user_id']);
?>
<header class="main-header">
  <div class="header-content">
    <div class="header-logo">
      <span class="logo-title">DANOHYS ARTISAN COIFFEUR</span>
      <span class="logo-subtitle">Maison de coiffure</span>
    </div>
    <nav class="header-menu">
      <a href="index.php">Accueil</a>
      <a href="reservation.php">Réservation</a>
      <a href="information-concernant-les-tarifs.php">Tarifs</a>
      <a href="#" class="phone-link">02 35 76 55 50</a>
      <a href="<?php echo $is_logged ? '/auth/logout.php' : '/auth/login.php'; ?>" class="login-link">
        <?php echo $is_logged ? 'Déconnexion' : 'Connexion'; ?>
      </a>
      <a href="reservation.php" class="rdv-btn">Prendre RDV</a>
    </nav>
  </div>
</header>
<style>
.main-header {
  width: 100%;
  background: rgba(0,0,0,0.85);
  box-shadow: 0 2px 16px #000a;
  position: sticky;
  top: 0;
  z-index: 1000;
}
.header-content {
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 24px;
  display: flex;
  flex-direction: column;
  align-items: center;
}
.header-logo {
  text-align: center;
  margin: 16px 0 8px 0;
}
.logo-title {
  font-family: 'Montserrat', Arial, sans-serif;
  font-size: 2.1rem;
  letter-spacing: 0.15em;
  color: #fff;
  text-shadow: 0 0 8px #fff, 0 0 24px #fff;
  font-weight: 700;
  display: block;
}
.logo-subtitle {
  display: block;
  font-size: 1.1rem;
  color: #fff8;
  letter-spacing: 0.2em;
  margin-top: 2px;
}
.header-menu {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 24px;
  margin-bottom: 12px;
}
.header-menu a {
  color: #fff;
  text-transform: uppercase;
  font-family: 'Montserrat', Arial, sans-serif;
  font-size: 1rem;
  letter-spacing: 0.08em;
  text-decoration: none;
  padding: 8px 12px;
  border-radius: 6px;
  transition: background 0.2s, color 0.2s, box-shadow 0.2s;
}
.header-menu a.login-link {
  background: #fff1;
  color: #fff;
  font-weight: 600;
  border: 1px solid #fff2;
  box-shadow: 0 0 8px #fff2;
}
.header-menu a.login-link:hover {
  background: #fff;
  color: #181818;
  box-shadow: 0 0 16px #fff;
}
.header-menu a.rdv-btn {
  background: #fff;
  color: #181818;
  font-weight: bold;
  border-radius: 8px;
  box-shadow: 0 0 12px #fff5;
  margin-left: 8px;
}
.header-menu a.rdv-btn:hover {
  background: #ffb300;
  color: #181818;
  box-shadow: 0 0 24px #ffb30099;
}
.header-menu .phone-link {
  color: #fff8;
  pointer-events: none;
  cursor: default;
  font-size: 1.05rem;
  letter-spacing: 0.12em;
}
@media (max-width: 700px) {
  .header-content { padding: 0 6px; }
  .header-menu { gap: 10px; font-size: 0.95rem; }
  .logo-title { font-size: 1.2rem; }
  .logo-subtitle { font-size: 0.9rem; }
}
</style> 