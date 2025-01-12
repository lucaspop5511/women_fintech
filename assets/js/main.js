document.addEventListener('DOMContentLoaded', function () {

    // Toggle dark mode
    const darkModeToggle = document.querySelector('#darkModeToggle');
    const darkModeIcon = document.querySelector('#darkModeIcon');

    // Verificăm starea dark mode din localStorage
    const isDarkMode = localStorage.getItem('darkMode') === 'true';
    if (isDarkMode) {
        document.body.classList.add('dark-mode');
        document.querySelector('.navbar').classList.add('dark-mode');
    }

    // Funcționalitate pentru toggle
    darkModeToggle.addEventListener('click', function () {
        const isDark = document.body.classList.toggle('dark-mode');
        document.querySelector('.navbar').classList.toggle('dark-mode');
        localStorage.setItem('darkMode', isDark);
    });

    // Load dark mode state
    if (localStorage.getItem('darkMode') === 'true') {
        document.body.classList.add('dark-mode');
    }

    // Form validation
    const form = document.querySelector('form');
    if (form) {
        form.addEventListener('submit', function (e) {
            const email = document.querySelector('input[type="email"]');
            const linkedin = document.querySelector('input[name="linkedin_profile"]');

            if (email && !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email.value)) {
                e.preventDefault();
                alert('Please enter a valid email address.');
            }

            if (linkedin && !linkedin.value.includes('linkedin.com/')) {
                e.preventDefault();
                alert('Please enter a valid LinkedIn URL.');
            }
        });
    }
});
