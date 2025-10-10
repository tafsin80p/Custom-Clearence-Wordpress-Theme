// Main JavaScript functionality for Custom Clearance theme

document.addEventListener('DOMContentLoaded', function() {
    // Initialize any global functionality here
    
    // Mobile menu toggle (if needed)
    const mobileMenuToggle = document.querySelector('[aria-label="open sidebar"]');
    if (mobileMenuToggle) {
        mobileMenuToggle.addEventListener('click', function() {
            // Handle mobile menu toggle
            console.log('Mobile menu toggled');
        });
    }
    
    // Smooth scrolling for anchor links
    const anchorLinks = document.querySelectorAll('a[href^="#"]');
    anchorLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            const targetId = this.getAttribute('href').substring(1);
            const targetElement = document.getElementById(targetId);
            
            if (targetElement) {
                e.preventDefault();
                targetElement.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
    
    // Initialize AOS animations if available
    if (typeof AOS !== 'undefined') {
        AOS.init({
            duration: 1000,
            easing: 'ease-out',
            once: true,
            delay: 100,
        });
    }
});
