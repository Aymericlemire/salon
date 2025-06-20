// Animation d'apparition au scroll
window.addEventListener('DOMContentLoaded', function() {
  const elements = document.querySelectorAll('[data-animate]');
  function check() {
    const trigger = window.innerHeight * 0.9;
    elements.forEach(el => {
      const rect = el.getBoundingClientRect();
      if (rect.top < trigger) {
        el.classList.add('visible');
      }
    });
  }
  window.addEventListener('scroll', check);
  check();
}); 