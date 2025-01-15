document.addEventListener('DOMContentLoaded', function () {
    console.log('Main.js loaded - script starts');
    const darkModeToggle = document.querySelector('#darkModeToggle');
    const darkModeIcon = document.querySelector('#darkModeIcon');

    // Enable dark mode if stored in localStorage
    if (localStorage.getItem('darkMode') === 'true') {
        enableDarkMode();
    }

    // Toggle dark mode
    darkModeToggle.addEventListener('click', function () {
        const isDark = document.body.classList.toggle('dark-mode');
        console.log('Dark mode toggled:', isDark);
        toggleDarkModeIcon(isDark);
        localStorage.setItem('darkMode', isDark);
    });

    // Enable dark mode for all elements
    function enableDarkMode() {
        document.body.classList.add('dark-mode');
        toggleDarkModeIcon(true);
    }

    // Toggle the icon between light_mode and dark_mode
    function toggleDarkModeIcon(isDark) {
        if (isDark) {
            darkModeIcon.textContent = 'dark_mode'; // Change to dark mode icon
        } else {
            darkModeIcon.textContent = 'light_mode'; // Change to light mode icon
        }
    }
});
