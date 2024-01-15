
    const darkModeToggle = document.getElementById('darkModeToggle');
    const moonIcon = document.getElementById('moonIcon');
    const sunIcon = document.getElementById('sunIcon');
    const body = document.body;
    const savedDarkMode = localStorage.getItem('darkMode');

    if (savedDarkMode) {
        const isDarkMode = savedDarkMode === 'true';
        body.classList.toggle('dark', isDarkMode);
        toggleIcon(isDarkMode);
    }

    darkModeToggle.addEventListener('click', () => {
        const isDarkMode = body.classList.toggle('dark');
        localStorage.setItem('darkMode', isDarkMode);
        toggleIcon(isDarkMode);
    });

    function toggleIcon(isDarkMode) {
        moonIcon.classList.toggle('hidden', isDarkMode);
        sunIcon.classList.toggle('hidden', !isDarkMode);
    }
