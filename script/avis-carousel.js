document.addEventListener('DOMContentLoaded', () => {
  const slides = document.querySelectorAll('.avis-slide');
  const dotsContainer = document.querySelector('.carousel-dots');
  let currentSlide = 0;
  let slideInterval;

  // Si le carrousel n'existe pas sur la page, on arrête.
  if (!slides.length || !dotsContainer) {
    return;
  }

  // --- Création des points de navigation ---
  slides.forEach((_, index) => {
    const dot = document.createElement('button');
    dot.classList.add('dot');
    if (index === 0) {
      dot.classList.add('active');
    }
    dot.setAttribute('aria-label', `Voir l'avis ${index + 1}`);
    dot.addEventListener('click', () => {
      moveToSlide(index);
    });
    dotsContainer.appendChild(dot);
  });
  
  const dots = document.querySelectorAll('.dot');

  // --- Fonction pour afficher un slide ---
  function moveToSlide(n) {
    // Gérer la classe 'active' pour les slides
    slides[currentSlide].classList.remove('active');
    slides[n].classList.add('active');
    
    // Gérer la classe 'active' pour les points
    dots[currentSlide].classList.remove('active');
    dots[n].classList.add('active');

    currentSlide = n;
    resetInterval();
  }

  // --- Défilement automatique ---
  function startInterval() {
    slideInterval = setInterval(() => {
      const nextSlide = (currentSlide + 1) % slides.length;
      moveToSlide(nextSlide);
    }, 5000); // Change de slide toutes les 5 secondes
  }

  // --- Réinitialiser l'intervalle (si l'utilisateur interagit) ---
  function resetInterval() {
    clearInterval(slideInterval);
    startInterval();
  }

  // Lancement
  startInterval();
}); 