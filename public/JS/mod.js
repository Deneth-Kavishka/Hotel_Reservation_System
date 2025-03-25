const themeToggle = document.getElementById('themeToggle');
const elementsToToggle = document.querySelectorAll('body, nav, .loading-screen, .loading-bar-container');

// Function to switch themes
themeToggle.addEventListener('click', () => {
  elementsToToggle.forEach(element => {
    element.classList.toggle('light-mode');
  });
  
  // Update button icon
  if (document.body.classList.contains('light-mode')) {
    themeToggle.textContent = '🌞'; // Sun icon for light mode
  } else {
    themeToggle.textContent = '🌙'; // Moon icon for dark mode
  }
});

