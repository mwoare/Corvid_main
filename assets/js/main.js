/**
 * Corvid Tax LLC - Main JavaScript
 */

(function() {
    'use strict';

    // Initialize when DOM is ready
    document.addEventListener('DOMContentLoaded', function() {
        // Contact form validation enhancement
        const contactForm = document.querySelector('form[method="POST"]');
        if (contactForm) {
            contactForm.addEventListener('submit', function(e) {
                const name = document.getElementById('name');
                const email = document.getElementById('email');
                const message = document.getElementById('message');
                
                let isValid = true;
                
                // Remove previous error styling
                [name, email, message].forEach(field => {
                    if (field) {
                        field.classList.remove('is-invalid');
                    }
                });
                
                // Validate name
                if (name && name.value.trim() === '') {
                    name.classList.add('is-invalid');
                    isValid = false;
                }
                
                // Validate email
                if (email && (!email.value.trim() || !isValidEmail(email.value))) {
                    email.classList.add('is-invalid');
                    isValid = false;
                }
                
                // Validate message
                if (message && message.value.trim() === '') {
                    message.classList.add('is-invalid');
                    isValid = false;
                }
                
                if (!isValid) {
                    e.preventDefault();
                    showFormError('Please fill in all required fields correctly.');
                }
            });
        }
        
        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                const href = this.getAttribute('href');
                if (href !== '#' && href.length > 1) {
                    const target = document.querySelector(href);
                    if (target) {
                        e.preventDefault();
                        target.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                }
            });
        });
        
        // Navbar scroll effect (optional enhancement)
        let lastScroll = 0;
        const navbar = document.querySelector('.navbar');
        
        if (navbar) {
            window.addEventListener('scroll', function() {
                const currentScroll = window.pageYOffset;
                
                if (currentScroll > 100) {
                    navbar.classList.add('navbar-scrolled');
                } else {
                    navbar.classList.remove('navbar-scrolled');
                }
                
                lastScroll = currentScroll;
            });
        }
    });
    
    /**
     * Validate email format
     */
    function isValidEmail(email) {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email);
    }
    
    /**
     * Show form error message
     */
    function showFormError(message) {
        // Check if alert already exists
        let alertDiv = document.querySelector('.alert-danger');
        
        if (!alertDiv) {
            alertDiv = document.createElement('div');
            alertDiv.className = 'alert alert-danger';
            alertDiv.setAttribute('role', 'alert');
            
            const form = document.querySelector('form[method="POST"]');
            if (form) {
                form.insertBefore(alertDiv, form.firstChild);
            }
        }
        
        alertDiv.textContent = message;
        alertDiv.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
    }
})();

