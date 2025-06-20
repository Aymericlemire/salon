const burger = document.getElementById('burger');
const nav = document.querySelector('nav ul');

burger.addEventListener('click', () => {
  nav.classList.toggle('show');
});

// Contact form validation
const form = document.getElementById('contact-form');
const feedback = document.getElementById('feedback');

form.addEventListener('submit', (e) => {
  e.preventDefault();
  feedback.textContent = 'Message envoyé avec succès !';
  feedback.style.color = 'green';
  form.reset();
});
