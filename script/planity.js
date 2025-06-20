// Affiche la section Planity au clic sur le bouton Prendre RDV
window.addEventListener('DOMContentLoaded', function() {
  function showPlanitySection(e) {
    e.preventDefault();
    const planity = document.getElementById('rdv');
    if (planity && !planity.classList.contains('visible')) {
      planity.classList.add('visible');
      setTimeout(() => {
        planity.scrollIntoView({ behavior: 'smooth' });
      }, 100); // Laisse le temps à l'affichage
    } else if (planity) {
      planity.scrollIntoView({ behavior: 'smooth' });
    }
  }
  document.querySelectorAll('a[href="#rdv"]').forEach(btn => {
    btn.addEventListener('click', showPlanitySection);
  });
}); 