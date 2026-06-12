import './bootstrap';

import AOS from 'aos';
import Typed from 'typed.js';
import Swiper from 'swiper';
import { Navigation, Pagination, Autoplay } from 'swiper/modules';

// Initialize AOS
AOS.init({
    duration: 1000,
    once: true,
});

// Ensure initialization happens after all scripts are loaded
window.addEventListener('load', () => {
    initLetterAnimation();
});

// Letter Animation for Hero
function initLetterAnimation() {
    const heroTitle = document.querySelector('.hero-title');
    if (!heroTitle) return;

    const text = heroTitle.textContent.trim();
    heroTitle.innerHTML = '';
    
    // Split into words first to maintain spaces
    const words = text.split(' ');
    
    words.forEach((word, wordIdx) => {
        const wordSpan = document.createElement('span');
        wordSpan.className = 'word';
        wordSpan.style.display = 'inline-block';
        wordSpan.style.whiteSpace = 'nowrap';

        [...word].forEach((char, charIdx) => {
            const charSpan = document.createElement('span');
            charSpan.textContent = char;
            charSpan.className = 'char';
            charSpan.style.display = 'inline-block';
            charSpan.style.animationDelay = `${(wordIdx * 5 + charIdx) * 0.05}s`;
            wordSpan.appendChild(charSpan);
        });

        heroTitle.appendChild(wordSpan);
        if (wordIdx < words.length - 1) {
            heroTitle.appendChild(document.createTextNode(' '));
        }
    });
}

// Initialize Typed.js (only if element exists)
const typedElement = document.querySelector('.typed-text');
if (typedElement) {
    new Typed('.typed-text', {
        strings: ['UN MUNDO DE CONOCIMIENTOS', 'FORMACIÓN TÉCNICA SUPERIOR', 'TU FUTURO EMPIEZA AQUÍ'],
        typeSpeed: 60,
        backSpeed: 40,
        loop: true,
        cursorChar: '|',
        autoInsertCss: true
    });
}

// Initialize Swiper
const swiper = new Swiper('.mySwiper', {
    modules: [Navigation, Pagination, Autoplay],
    slidesPerView: 1,
    spaceBetween: 30,
    loop: false, // Disabled to avoid warnings when slides <= slidesPerView
    autoplay: {
        delay: 3000,
        disableOnInteraction: false,
    },
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    breakpoints: {
        768: {
            slidesPerView: 2,
        },
        1024: {
            slidesPerView: 3,
        },
    },
});

// Simulate Form Submission
window.simulateSubmit = function() {
    const form = document.getElementById('registrationForm');
    const successMessage = document.getElementById('successMessage');
    
    // Simple visual validation check
    const inputs = form.querySelectorAll('input[required]');
    let isValid = true;
    
    inputs.forEach(input => {
        if (!input.value) {
            input.classList.add('is-invalid');
            isValid = false;
        } else {
            input.classList.remove('is-invalid');
        }
    });

    if (isValid) {
        form.classList.add('d-none');
        successMessage.classList.remove('d-none');
        successMessage.classList.add('animate__animated', 'animate__fadeIn');
    }
};

window.resetForm = function() {
    const form = document.getElementById('registrationForm');
    const successMessage = document.getElementById('successMessage');
    
    form.reset();
    form.classList.remove('d-none');
    successMessage.classList.add('d-none');
};
