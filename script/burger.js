// Script menu burger responsive
const burger = document.getElementById('burger-menu');
const navUl = document.querySelector('nav ul');

burger.addEventListener('click', () => {
  navUl.classList.toggle('active');
  burger.classList.toggle('open');
});

// Optionnel : refermer le menu au clic sur un lien (expérience mobile)
document.querySelectorAll('nav ul li a').forEach(link => {
  link.addEventListener('click', () => {
    if (window.innerWidth <= 700) {
      navUl.classList.remove('active');
      burger.classList.remove('open');
    }
  });
}); 