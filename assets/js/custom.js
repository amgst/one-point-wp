/**
 * Footer Security Theme Custom JavaScript
 */
document.addEventListener('DOMContentLoaded', function() {
    console.log('Footer Security Theme JS loaded');
    
    // Mobile menu functionality
    const mobileMenuButton = document.querySelector('.mobile-menu-button');
    const mobileMenu = document.querySelector('.mobile-menu');
    const mobileMenuIcon = mobileMenuButton?.querySelector('i');
    
    if (mobileMenuButton && mobileMenu) {
        mobileMenuButton.addEventListener('click', function(e) {
            e.preventDefault();
            mobileMenu.classList.toggle('hidden');
            
            // Toggle hamburger/close icon
            if (mobileMenuIcon) {
                if (mobileMenu.classList.contains('hidden')) {
                    mobileMenuIcon.className = 'fas fa-bars';
                } else {
                    mobileMenuIcon.className = 'fas fa-times';
                }
            }
        });
    }
    
    // Mobile services dropdown
    const mobileServicesToggle = document.querySelector('.mobile-services-toggle');
    const mobileServicesMenu = document.querySelector('.mobile-services-menu');
    const chevronIcon = mobileServicesToggle?.querySelector('i');
    
    if (mobileServicesToggle && mobileServicesMenu) {
        mobileServicesToggle.addEventListener('click', function(e) {
            e.preventDefault();
            mobileServicesMenu.classList.toggle('hidden');
            mobileServicesToggle.classList.toggle('active');
            
            if (chevronIcon) {
                chevronIcon.classList.toggle('rotate-180');
            }
        });
    }
    
    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
    
    // Add fade-in animation to elements on scroll
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };
    
    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('fade-in');
            }
        });
    }, observerOptions);
    
    // Observe service cards and blog cards
    document.querySelectorAll('.service-card, .blog-card, .hover-lift').forEach(el => {
        observer.observe(el);
    });
    
    // Close mobile menu when clicking outside
    document.addEventListener('click', function(e) {
        if (mobileMenu && !mobileMenu.contains(e.target) && !mobileMenuButton.contains(e.target)) {
            if (!mobileMenu.classList.contains('hidden')) {
                mobileMenu.classList.add('hidden');
                if (mobileMenuIcon) {
                    mobileMenuIcon.className = 'fas fa-bars';
                }
            }
        }
    });
    
    // Form validation for contact forms
    const contactForms = document.querySelectorAll('.contact-form');
    contactForms.forEach(form => {
        form.addEventListener('submit', function(e) {
            const requiredFields = form.querySelectorAll('[required]');
            let isValid = true;
            
            requiredFields.forEach(field => {
                if (!field.value.trim()) {
                    field.classList.add('border-red-500');
                    isValid = false;
                } else {
                    field.classList.remove('border-red-500');
                }
            });
            
            if (!isValid) {
                e.preventDefault();
                alert('Please fill in all required fields.');
            }
        });
    });
});
