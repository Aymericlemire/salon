// Script menu burger responsive
const burger = document.getElementById('burger-menu');
const navUl = document.querySelector('nav ul');

burger.addEventListener('click', () => {
  navUl.classList.toggle('active');
  burger.classList.toggle('open');
  if(navUl.classList.contains('active')) {
    navUl.style.maxHeight = navUl.scrollHeight + 'px';
    navUl.style.opacity = '1';
  } else {
    navUl.style.maxHeight = '0';
    navUl.style.opacity = '0';
  }
});

// Optionnel : refermer le menu au clic sur un lien (expérience mobile)
document.querySelectorAll('nav ul li a').forEach(link => {
  link.addEventListener('click', () => {
    if (window.innerWidth <= 700) {
      navUl.classList.remove('active');
      burger.classList.remove('open');
      navUl.style.maxHeight = '0';
      navUl.style.opacity = '0';
    }
  });
}); 