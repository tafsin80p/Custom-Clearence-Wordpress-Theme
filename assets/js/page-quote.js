// Form submission handling
document.getElementById('quoteForm').addEventListener('submit', function (e) {
    e.preventDefault();

    // Get form data
    const formData = new FormData(this);
    const data = {};

    for (let [key, value] of formData.entries()) {
        if (key === 'attachment') {
            data[key] = value.name || 'No file selected';
        } else {
            data[key] = value;
        }
    }

    // Show success message
    alert('Votre demande a été envoyée avec succès! Nous vous contacterons dans les 24h.');

    // Reset form
    this.reset();
});

// File input change handler
document.querySelector('input[type="file"]').addEventListener('change', function (e) {
    const file = e.target.files[0];
    if (file) {
        // Check file size (10MB limit)
        if (file.size > 10 * 1024 * 1024) {
            alert('Le fichier est trop volumineux. Taille maximale: 10MB');
            this.value = '';
            return;
        }

        // Check file type
        const allowedTypes = ['application/pdf', 'image/jpeg', 'image/jpg', 'image/png'];
        if (!allowedTypes.includes(file.type)) {
            alert('Type de fichier non autorisé. Formats acceptés: PDF, JPG, PNG');
            this.value = '';
            return;
        }
    }
});

// WhatsApp button functionality
function openWhatsApp() {
    const phoneNumber = '212675828200';
    const message = encodeURIComponent('Bonjour, j\'aimerais obtenir des informations sur vos services de dédouanement.');
    const whatsappUrl = `https://wa.me/${phoneNumber}?text=${message}`;
    window.open(whatsappUrl, '_blank');
}

// Input validation
const inputs = document.querySelectorAll('input[required], textarea[required]');
inputs.forEach(input => {
    input.addEventListener('blur', function () {
        if (!this.value.trim()) {
            this.style.borderColor = '#EF4444';
        } else {
            this.style.borderColor = '#E5E7EB';
        }
    });

    input.addEventListener('input', function () {
        if (this.value.trim()) {
            this.style.borderColor = '#E5E7EB';
        }
    });
});

// Email validation
document.querySelector('input[type="email"]').addEventListener('blur', function () {
    const emailRegex = /^[^S@]+@[^S@]+\.[^S@]+$/;
    if (this.value && !emailRegex.test(this.value)) {
        this.style.borderColor = '#EF4444';
        alert('Veuillez entrer une adresse email valide');
    } else if (this.value) {
        this.style.borderColor = '#E5E7EB';
    }
});
