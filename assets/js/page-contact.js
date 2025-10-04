// Form submission handling
document.getElementById('contactFormElement').addEventListener('submit', function (e) {
    e.preventDefault();

    const submitBtn = document.querySelector('.submit-btn');
    const originalText = submitBtn.textContent;

    // Show loading state
    submitBtn.classList.add('loading');
    submitBtn.textContent = 'Envoi en cours...';

    // Get form data
    const formData = new FormData(this);
    const data = {};

    for (let [key, value] of formData.entries()) {
        data[key] = value;
    }

    // Simulate form submission (replace with actual API call)
    setTimeout(() => {
        // Reset button
        submitBtn.classList.remove('loading');
        submitBtn.textContent = originalText;

        // Show success message
        alert('Votre message a été envoyé avec succès! Nous vous contacterons dans les 24h.');

        // Reset form
        this.reset();
    }, 2000);
});

// WhatsApp button functionality
function openWhatsApp() {
    const phoneNumber = '212675828200';
    const message = encodeURIComponent('Bonjour, j\'aimerais discuter de mon dossier de dédouanement.');
    const whatsappUrl = `https://wa.me/${phoneNumber}?text=${message}`;
    window.open(whatsappUrl, '_blank');
}

// Scroll to form function
function scrollToForm() {
    document.getElementById('contactForm').scrollIntoView({
        behavior: 'smooth',
        block: 'center'
    });

    // Focus on first input after scroll
    setTimeout(() => {
        document.querySelector('input[name="name"]').focus();
    }, 800);
}

// Input validation
const inputs = document.querySelectorAll('input[required], textarea[required]');
inputs.forEach(input => {
    input.addEventListener('blur', function () {
        validateInput(this);
    });

    input.addEventListener('input', function () {
        if (this.style.borderColor === 'rgb(239, 68, 68)') {
            validateInput(this);
        }
    });
});

function validateInput(input) {
    if (!input.value.trim()) {
        input.style.borderColor = '#EF4444';
        input.style.boxShadow = '0 0 0 3px rgba(239, 68, 68, 0.1)';
    } else {
        input.style.borderColor = '#E5E7EB';
        input.style.boxShadow = 'none';
    }
}

// Email validation
document.querySelector('input[type="email"]').addEventListener('blur', function () {
    const emailRegex = /^[^S@]+@[^S@]+\.[^S@]+$/;
    if (this.value && !emailRegex.test(this.value)) {
        this.style.borderColor = '#EF4444';
        this.style.boxShadow = '0 0 0 3px rgba(239, 68, 68, 0.1)';
        alert('Veuillez entrer une adresse email valide');
    } else if (this.value) {
        this.style.borderColor = '#E5E7EB';
        this.style.boxShadow = 'none';
    }
});

// Phone validation
document.querySelector('input[type="tel"]').addEventListener('input', function () {
    // Remove any non-digit characters
    this.value = this.value.replace(/\D/g, '');
});

// Add smooth focus effects
inputs.forEach(input => {
    input.addEventListener('focus', function () {
        this.style.borderColor = '#3B82F6';
        this.style.boxShadow = '0 0 0 3px rgba(59, 130, 246, 0.1)';
    });
});

// Add enter key navigation between inputs
inputs.forEach((input, index) => {
    input.addEventListener('keydown', function (e) {
        if (e.key === 'Enter') {
            e.preventDefault();
            if (index < inputs.length - 1) {
                inputs[index + 1].focus();
            } else {
                document.querySelector('.submit-btn').click();
            }
        }
    });
});
