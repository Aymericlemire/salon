// Animation d'apparition au scroll plus performante avec Intersection Observer
document.addEventListener('DOMContentLoaded', () => {
  const animatedElements = document.querySelectorAll('[data-animate]');

  if ('IntersectionObserver' in window) {
    const observer = new IntersectionObserver((entries, observer) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('visible');
          observer.unobserve(entry.target); // On arrête d'observer l'élément une fois qu'il est visible
        }
      });
    }, {
      rootMargin: '0px',
      threshold: 0.1 // L'animation se déclenche quand 10% de l'élément est visible
    });

    animatedElements.forEach(el => {
      observer.observe(el);
    });
  } else {
    // Fallback pour les très vieux navigateurs qui ne supportent pas IntersectionObserver
    animatedElements.forEach(el => {
      el.classList.add('visible');
    });
  }
}); 