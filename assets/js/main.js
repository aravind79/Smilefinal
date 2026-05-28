document.addEventListener('DOMContentLoaded', () => {
    const toggleBtn = document.querySelector('.site-header__toggle');
    const headerRight = document.querySelector('.site-header__right');

    if (toggleBtn && headerRight) {
        toggleBtn.addEventListener('click', () => {
            const isExpanded = toggleBtn.getAttribute('aria-expanded') === 'true';
            
            toggleBtn.setAttribute('aria-expanded', !isExpanded);
            headerRight.classList.toggle('is-active');
            
            // Prevent body scroll when menu is open
            if (!isExpanded) {
                document.body.style.overflow = 'hidden';
            } else {
                document.body.style.overflow = '';
            }
        });

        // Reset state if screen is resized past breakpoint
        window.addEventListener('resize', () => {
            if (window.innerWidth > 1024 && headerRight.classList.contains('is-active')) {
                toggleBtn.setAttribute('aria-expanded', 'false');
                headerRight.classList.remove('is-active');
                document.body.style.overflow = '';
            }
        });
    }

    // Suitability Step Cards Interaction
    const stepCards = document.querySelectorAll('.check-step-card');
    if (stepCards.length > 0) {
        stepCards.forEach(card => {
            card.addEventListener('click', () => {
                // Remove active class from all cards
                stepCards.forEach(c => c.classList.remove('active'));
                // Add active class to clicked card
                card.classList.add('active');
            });
        });
    }
});
