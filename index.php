<?php include 'header.php'; ?>
<main>
  <!-- Hero section -->
  <section class="hero" id="hero" data-animate>
    <div class="hero-content">
      <h1>Votre beauté, notre passion</h1>
      <p>Salon de coiffure mixte & barbier à Mont-Saint-Aignan</p>
      <a href="reservation.php" class="btn-hero">Prendre rendez-vous</a>
    </div>
    <div class="hero-img">
      <img src="./img/salon moderne .jpg" alt="Salon de coiffure moderne">
    </div>
  </section>
  <!-- Présentation du salon -->
  <section class="about" id="salon" data-animate>
    <div class="about-text">
      <h2>Un cocon de bien-être</h2>
      <p>Découvrez un espace chaleureux dédié à la beauté et à la détente, pour femmes et hommes. Notre équipe passionnée vous accueille dans une ambiance conviviale et professionnelle.</p>
    </div>
    <div class="about-img">
      <img src="./img/salon detente .webp" alt="Intérieur du salon">
    </div>
  </section>
  <!-- Services & Tarifs -->
  <section class="services" id="services" data-animate>
    <h2>Nos services & tarifs</h2>
    <div class="services-list">
      <div class="service-card" data-animate>
        <img src="./img/ciseaux.png" alt="Coupe">
        <h3>Coupe & Brushing</h3>
        <p>À partir de 35€</p>
        <a href="reservation.php" class="btn-main">Prendre RDV</a>
      </div>
      <div class="service-card" data-animate>
        <img src="./img/coloration.png" alt="Coloration">
        <h3>Coloration</h3>
        <p>À partir de 45€</p>
        <a href="reservation.php" class="btn-main">Prendre RDV</a>
      </div>
      <div class="service-card" data-animate>
        <img src="./img/barbier.png" alt="Barbier">
        <h3>Barbier</h3>
        <p>À partir de 25€</p>
        <a href="reservation.php" class="btn-main">Prendre RDV</a>
      </div>
    </div>
  </section>
  <!-- Galerie photos -->
  <section class="galerie" id="galerie" data-animate>
    <h2>Galerie</h2>
    <div class="galerie-grid">
      <img src="./img/galerie_1.jpg" alt="Coiffeuse réalisant une coupe sur cheveux courts" class="lightbox-img">
      <img src="./img/galerie_2.jpg" alt="Homme avec une coupe de cheveux stylisée vue de profil" class="lightbox-img">
      <img src="./img/galerie_3.jpg" alt="Gros plan sur un coup de ciseaux pendant une coupe" class="lightbox-img">
      <img src="./img/galerie_4.jpg" alt="Femme avec une coupe au carré (bob) moderne" class="lightbox-img">
    </div>
  </section>
  <!-- Équipe -->
  <section class="team-section" id="equipe" data-animate>
    <h2>L'équipe</h2>
    <div class="team">
      <div class="member anais" data-animate>
        <img src="./img/anais.avif" alt="Anaïs">
        <h3>Anaïs / Manager</h3>
        <p>Passionnée, créative, à l'écoute de vos envies.</p>
      </div>
      <div class="member celine" data-animate>
        <img src="./img/celine.avif" alt="Céline">
        <h3>Céline / Coiffeuse confirmée</h3>
        <p>23 ans d'expérience, polyvalente et souriante.</p>
      </div>
      <div class="member manon" data-animate>
        <img src="./img/manon.avif" alt="Manon">
        <h3>Manon / Coiffeuse junior</h3>
        <p>Dynamique, curieuse, passionnée par la coiffure.</p>
      </div>
    </div>
  </section>
  <!-- Avis clients -->
  <section class="avis-section" id="avis" data-animate>
    <h2 class="section-title">Ce que nos clients disent</h2>
    <div class="avis-carousel">
      <div class="avis-slide active">
        <p>"Ambiance chaleureuse, équipe au top, toujours de bonne humeur. La qualité des prestations est irréprochable. Je recommande vivement !"</p>
        <span>- Laura B.</span>
      </div>
      <div class="avis-slide">
        <p>"Le meilleur salon de la région ! Professionnalisme, écoute et conseils avisés. Je ne confierais mes cheveux à personne d'autre."</p>
        <span>- Julien M.</span>
      </div>
      <div class="avis-slide">
        <p>"Un grand merci à Manon pour son talent. J'ai enfin la couleur que je voulais. Le salon est magnifique et on s'y sent bien."</p>
        <span>- Chloé D.</span>
      </div>
    </div>
    <div class="carousel-dots"></div>
  </section>
  <!-- Contact & plan -->
  <section class="contact-section" id="contact" data-animate>
    <h2>Contact</h2>
    <form id="contact-form" novalidate>
      <div class="form-group">
        <input type="text" id="name" name="name" placeholder=" " required>
        <label for="name">Votre nom</label>
      </div>
      <div class="form-group">
        <input type="email" id="email" name="email" placeholder=" " required>
        <label for="email">Votre email</label>
      </div>
      <div class="form-group">
        <textarea id="message" name="message" placeholder=" " rows="5" required></textarea>
        <label for="message">Votre message</label>
      </div>
      <button type="submit" class="btn-main">Envoyer</button>
      <div class="form-message" id="form-message"></div>
    </form>
    <p>5 Pl. de l'Église, 76130 Mont-Saint-Aignan, France</p>
    <p>Tél : <a href="tel:0658888319">06 58 88 83 19</a></p>
    <p>Email : <a href="mailto:danohysartisancoiffeur@gmail.com">danohysartisancoiffeur@gmail.com</a></p>
    <iframe src="https://www.google.com/maps?q=5bis+place+de+l'église,+Mont-Saint-Aignan&output=embed" width="100%" height="200" style="border:0;border-radius:12px;margin-top:1rem;" allowfullscreen="" loading="lazy"></iframe>
  </section>
</main>
<footer>
  <div class="footer-socials">
    <a href="http://www.facebook.com/danohys" target="_blank"><img src="./img/facebook.png" alt="Facebook"></a>
    <a href="https://instagram.com/danohys" target="_blank"><img src="./img/instagram.png" alt="Instagram"></a>
  </div>
  <p>&copy; 2024 Danohys. Tous droits réservés.</p>
  <p class="mentions"><a href="#">Mentions légales</a> | <a href="#">Politique de confidentialité</a></p>
</footer>
<script src="./script/burger.js"></script>
<script src="./script/avis-carousel.js"></script>
<script src="./script/scroll-animate.js"></script>
<script src="./script/lightbox.js"></script>
<script src="./script/contact.js"></script> 