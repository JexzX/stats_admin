document.addEventListener('DOMContentLoaded', function() {
    // Dark Mode Toggle
    const darkModeToggle = document.getElementById('darkModeToggle');
    const body = document.body;

    // Load saved preference
    if (localStorage.getItem('darkMode') === 'enabled') {
        body.classList.add('dark-mode');
        darkModeToggle.checked = true;
    }

    // Toggle handler
    darkModeToggle.addEventListener('change', () => {
        if (darkModeToggle.checked) {
            body.classList.add('dark-mode');
            localStorage.setItem('darkMode', 'enabled');
        } else {
            body.classList.remove('dark-mode');
            localStorage.setItem('darkMode', 'disabled');
        }
    });

    // Loading animation for page transitions
    const links = document.querySelectorAll('a[href^="/"]');
    const loadingOverlay = document.querySelector('.loading-overlay');
    
    links.forEach(link => {
        link.addEventListener('click', (e) => {
            if (!link.href.includes('#')) {
                loadingOverlay.style.display = 'flex';
            }
        });
    });

    // Hide loading when page fully loaded
    window.addEventListener('load', () => {
        loadingOverlay.style.display = 'none';
    });
});