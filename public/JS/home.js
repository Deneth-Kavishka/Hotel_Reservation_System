document.addEventListener("DOMContentLoaded", function() {
    // Select loading screen and WhatsApp button
    const loadingScreen = document.getElementById("loadingScreen");
    const whatsappButton = document.getElementById("whatsappButton");

    // Initially hide the WhatsApp button
    whatsappButton.style.display = "none";

    // Function to hide the loading screen after animation and show the WhatsApp button
    function hideLoadingScreen() {
        loadingScreen.style.display = "none"; // Hide loading screen
        whatsappButton.style.display = "block"; // Show WhatsApp button
    }

    // Simulate a loading delay
    setTimeout(hideLoadingScreen, 2000);
});

document.addEventListener("DOMContentLoaded", function() {
    const links = document.querySelectorAll('.nav-links a');
    let lastClickedLink = null; // Variable to store the last clicked link

    // Automatically select the Home link on page load
    const homeLink = document.querySelector('.nav-links a#home');
    if (homeLink) {
        homeLink.classList.add('selected');
        lastClickedLink = homeLink; // Set the last clicked link to Home
    }

    links.forEach(link => {
        link.addEventListener('mouseover', function() {
            // Remove 'selected' class from all links
            links.forEach(l => l.classList.remove('selected'));
        });

        link.addEventListener('click', function() {
            // Remove 'selected' class from all links
            links.forEach(l => l.classList.remove('selected'));

            // Add 'selected' class to the clicked link
            this.classList.add('selected');

            // Store the last clicked link
            lastClickedLink = this;
        });
    });

    // Add mouseout event to restore the last clicked link's selected state
    document.addEventListener('mouseout', function(event) {
        // Check if the mouse has left the nav links
        if (!event.relatedTarget || !event.relatedTarget.closest('.nav-links')) {
            // Restore the selected state of the last clicked link
            if (lastClickedLink) {
                links.forEach(l => l.classList.remove('selected')); // Remove selected from all
                lastClickedLink.classList.add('selected'); // Add selected to the last clicked
            }
        }
    });
});

const navLinks = document.querySelectorAll('nav a');
const sections = document.querySelectorAll('section');
let lastScrollTop = 0;

window.addEventListener('scroll', () => {
  let currentSection = '';

  // Check which section is currently in view
  sections.forEach(section => {
    const sectionTop = section.offsetTop;
    const sectionHeight = section.offsetHeight;
    if (window.PageTransitionEvent >= sectionTop - sectionHeight / 3) {
      currentSection = section.getAttribute('id');
    }
  });

  // Update active link in navbar
  navLinks.forEach(link => {
    link.classList.remove('active');
    if (link.getAttribute('href').slice(1) === currentSection) {
      link.classList.add('active');
    }
  });

  // Hide navbar on scroll down and show on scroll up
  const nav = document.querySelector('nav');
  if (window.scrollY > lastScrollTop && window.scrollY > 100) {
    nav.classList.add('hide');
  } else {
    nav.classList.remove('hide');
  }
  lastScrollTop = window.scrollY;
});

// Smooth scroll to section on nav link click
navLinks.forEach(link => {
  link.addEventListener('click', (e) => {
    e.preventDefault();
    const targetId = link.getAttribute('href').slice(1);
    const targetSection = document.getElementById(targetId);

    window.scrollTo({
      top: targetSection.offsetTop,
      behavior: 'smooth'
    });
  });
});

document.addEventListener("DOMContentLoaded", function() {
    const text = "Hello Travellers,";
    const typingTextElement = document.getElementById("typing-text");
    let index = 0;

    function type() {
        if (index < text.length) {
            typingTextElement.textContent += text.charAt(index);
            index++;
            setTimeout(type, 100); // Adjust the typing speed (100ms)
        } else {
            typingTextElement.classList.add('blink'); // Add blinking cursor after typing
        }
    }

    type(); // Start the typing effect
});

function initMap() {
    var nibm = { lat: 7.48195, lng: 80.35744 };
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 18,
        center: nibm
    });
    var marker = new google.maps.Marker({
        position: nibm,
        map: map
    });
    // Add a click listener to the marker
    marker.addListener('click', function() {
        window.open('https://www.google.com/maps/place/Colombo,+Sri+Lanka/@6.9271,79.8612,12z/data=!3m1!4b1!4m5!3m4!1s0x3aed54d0b006605d:0x9253d2e7274e891!8m2!3e3!4m1!1sColombo,+Sri+Lanka');
    });
}

document.addEventListener("DOMContentLoaded", function() {
    // Select the description element
    const aboutDescription = document.querySelector('.about__description');
    const aboutContentWrapper = document.querySelector('.about__content-wrapper');
    const sectionTitle = document.querySelector('.section__title');
    const aboutLine1 = document.querySelector('.about__line1');
    const aboutData = document.querySelector('.about__data');
    const locationSection = document.querySelector('#location1');

    // Intersection Observer to watch for element visibility
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                // Add the 'visible' class when the element is in view
                entry.target.classList.add('visible');
            } else {
                // Remove the 'visible' class when the element goes out of view
                entry.target.classList.remove('visible');
            }
        });
    }, {
        threshold: 0.5
    });

    // Observe the about__description element
    observer.observe(aboutDescription);
    observer.observe(aboutContentWrapper);
    observer.observe(sectionTitle);
    observer.observe(aboutLine1);
    observer.observe(aboutData);
    observer.observe(locationSection);  
});

// Select the content wrapper where you want the ripple effect to occur
const contentWrapper = document.querySelector('.about__content-wrapper');

contentWrapper.addEventListener('mouseover', (e) => {
    // Create a new ripple element
    const ripple = document.createElement('span');
    ripple.classList.add('ripple');
    
    // Position the ripple at the mouse location
    ripple.style.left = `${e.clientX - contentWrapper.offsetLeft}px`;
    ripple.style.top = `${e.clientY - contentWrapper.offsetTop}px`;
    
    // Append the ripple to the content wrapper
    contentWrapper.appendChild(ripple);
    
    // Remove the ripple after animation ends to keep DOM clean
    ripple.addEventListener('animationend', () => {
        ripple.remove();
    });
});

//hide whatsapp button
// JavaScript to control the visibility of the loading screen and WhatsApp button

