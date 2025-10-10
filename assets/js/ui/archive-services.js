/**
 * Archive Services Page JavaScript
 * Handles search functionality and interactive elements
 */

document.addEventListener('DOMContentLoaded', function() {
    
    // Service Search Functionality
    const serviceSearch = document.getElementById('service-search');
    const servicesGrid = document.getElementById('services-grid');
    const serviceCards = servicesGrid ? servicesGrid.querySelectorAll('article') : [];

    if (serviceSearch && serviceCards.length > 0) {
        
        serviceSearch.addEventListener('input', function() {
            const searchTerm = this.value.toLowerCase().trim();
            
            serviceCards.forEach(card => {
                const title = card.querySelector('h2 a')?.textContent.toLowerCase() || '';
                const description = card.querySelector('.text-gray-600')?.textContent.toLowerCase() || '';
                
                const matches = title.includes(searchTerm) || description.includes(searchTerm);
                
                if (matches || searchTerm === '') {
                    card.style.display = 'block';
                    card.style.animation = 'fadeInUp 0.5s ease forwards';
                } else {
                    card.style.display = 'none';
                }
            });
            
            // Show "no results" message if needed
            const visibleCards = Array.from(serviceCards).filter(card => 
                card.style.display !== 'none'
            );
            
            let noResultsMsg = document.getElementById('no-results-message');
            
            if (visibleCards.length === 0 && searchTerm !== '') {
                if (!noResultsMsg) {
                    noResultsMsg = document.createElement('div');
                    noResultsMsg.id = 'no-results-message';
                    noResultsMsg.className = 'col-span-full text-center py-12';
                    noResultsMsg.innerHTML = `
                        <div class="max-w-md mx-auto">
                            <i class="fas fa-search text-gray-400 text-6xl mb-4"></i>
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">Aucun service trouvé</h3>
                            <p class="text-gray-600">Aucun service ne correspond à votre recherche "${searchTerm}".</p>
                        </div>
                    `;
                    servicesGrid.appendChild(noResultsMsg);
                }
            } else if (noResultsMsg) {
                noResultsMsg.remove();
            }
        });
    }

    // Smooth scroll for anchor links
    const anchorLinks = document.querySelectorAll('a[href^="#"]');
    anchorLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const targetId = this.getAttribute('href').substring(1);
            const targetElement = document.getElementById(targetId);
            
            if (targetElement) {
                targetElement.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    // Card hover effects enhancement
    serviceCards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-8px) scale(1.02)';
        });
        
        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0) scale(1)';
        });
    });

    // Filter button functionality (placeholder for future implementation)
    const filterButton = document.querySelector('button[class*="bg-[#17476a]"]');
    if (filterButton) {
        filterButton.addEventListener('click', function() {
            // Future: Add filter modal or dropdown
            alert('Fonctionnalité de filtrage à venir prochainement!');
        });
    }

    // Initialize AOS (Animate On Scroll) if available
    if (typeof AOS !== 'undefined') {
        AOS.init({
            duration: 1000,
            easing: 'ease-in-out',
            once: true,
            offset: 100
        });
    }

    // Add loading animation for images
    const serviceImages = document.querySelectorAll('.services-grid img');
    serviceImages.forEach(img => {
        img.addEventListener('load', function() {
            this.style.opacity = '1';
        });
        
        // Set initial opacity
        img.style.opacity = '0';
        img.style.transition = 'opacity 0.5s ease';
    });

    // Add intersection observer for lazy loading animations
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.animation = 'fadeInUp 0.6s ease forwards';
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    // Observe service cards for animation
    serviceCards.forEach((card, index) => {
        card.style.animationDelay = `${index * 0.1}s`;
        observer.observe(card);
    });
});

// CSS Animation for fade in up effect
const style = document.createElement('style');
style.textContent = `
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    .service-card {
        animation: fadeInUp 0.6s ease forwards;
    }
`;
document.head.appendChild(style);
