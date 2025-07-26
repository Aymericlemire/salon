document.addEventListener('DOMContentLoaded', () => {
    // --- Elements ---
    const chooseButtons = document.querySelectorAll('.btn-choose');
    const formWrapper = document.getElementById('booking-form-wrapper');
    const form = document.getElementById('booking-form');
    const steps = form.querySelectorAll('.form-step');
    const progressSteps = document.querySelectorAll('.progress-step');
    const nextButtons = form.querySelectorAll('.btn-next');
    const prevButtons = form.querySelectorAll('.btn-prev');
    const teamSelectionCards = form.querySelectorAll('.selection-card');
    const serviceDetailsToggles = document.querySelectorAll('.service-extra-details');

    let currentStep = 0;

    // --- Service Selection ---
    chooseButtons.forEach(button => {
        button.addEventListener('click', (e) => {
            e.preventDefault();
            
            const serviceItem = button.closest('.service-item');
            const serviceName = serviceItem.querySelector('h3').textContent;
            
            const chosenServiceInput = document.getElementById('chosen-service');
            chosenServiceInput.value = serviceName;
            
            formWrapper.style.display = 'block';
            setTimeout(() => {
                 formWrapper.scrollIntoView({ behavior: 'smooth', block: 'center' });
            }, 100);

            // Reset to the first form step
            goToStep(0); 
        });
    });

    // --- Multi-Step Form Logic ---
    function goToStep(stepIndex) {
        if (steps[currentStep]) {
            steps[currentStep].classList.remove('active');
        }
        
        if (steps[stepIndex]) {
            steps[stepIndex].classList.add('active');
        }
        
        currentStep = stepIndex;
        updateProgressBar();
    }

    function updateProgressBar() {
        progressSteps.forEach((step, index) => {
            if (index <= currentStep + 1) { // +1 because first progress is "service"
                step.classList.add('active');
            } else {
                step.classList.remove('active');
            }
        });
    }

    nextButtons.forEach(button => {
        button.addEventListener('click', () => {
            if (validateStep(currentStep)) {
                goToStep(currentStep + 1);
            }
        });
    });

    prevButtons.forEach(button => {
        button.addEventListener('click', () => {
            goToStep(currentStep - 1);
        });
    });

    // --- Visual Feedback for selections ---
    teamSelectionCards.forEach(card => {
        card.addEventListener('click', () => {
            teamSelectionCards.forEach(c => c.classList.remove('selected'));
            card.classList.add('selected');
        });
    });

    serviceDetailsToggles.forEach(details => {
      details.addEventListener('toggle', () => {
          const serviceItem = details.closest('.service-item');
          if (details.open) {
              serviceItem.classList.add('is-open');
          } else {
              serviceItem.classList.remove('is-open');
          }
      });
    });

    // --- Form Validation & Submission ---
    function validateStep(stepIndex) {
        const currentStepElement = steps[stepIndex];
        const inputs = currentStepElement.querySelectorAll('input[required], select[required]');
        let isValid = true;

        for (const input of inputs) {
            let stepIsValid = true;
            if (input.type === 'radio') {
                if (!form.querySelector(`input[name="${input.name}"]:checked`)) {
                    stepIsValid = false;
                }
            } else if (!input.value.trim()) {
                stepIsValid = false;
            }
            
            if (!stepIsValid) {
                isValid = false;
                break; 
            }
        }
        
        if (!isValid) {
            alert('Veuillez faire une sélection pour continuer.');
        }

        return isValid;
    }

    form.addEventListener('submit', (e) => {
        e.preventDefault();
        if (validateStep(currentStep)) {
            const formData = new FormData(form);
            const bookingData = Object.fromEntries(formData.entries());
            
            console.log('Final Booking Data:', bookingData);
            
            formWrapper.innerHTML = `
                <div class="booking-success">
                    <h2>Merci ! Votre demande de RDV a été envoyée.</h2>
                    <p>Nous vous contacterons très prochainement pour confirmer.</p>
                    <hr>
                    <p><strong>Récapitulatif :</strong></p>
                    <p><strong>Service :</strong> ${bookingData.service}</p>
                    <p><strong>Avec :</strong> ${bookingData.team}</p>
                    <p><strong>Date :</strong> ${bookingData.date} à ${bookingData.time}</p>
                </div>
            `;
        }
    });

    // Initialize form state
    steps.forEach(step => step.classList.remove('active'));
}); 