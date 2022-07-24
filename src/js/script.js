
const accordion1 = document.querySelector('.faq__question-1');
const content1 = document.querySelector('.faq__content-1');
if (accordion1) {
    accordion1.addEventListener("click", function(e) {
        accordion1.classList.toggle('_focus');
        content1.classList.toggle('_focus');
    });
}

const accordion2 = document.querySelector('.faq__question-2');
const content2 = document.querySelector('.faq__content-2');
if (accordion2) {
    accordion2.addEventListener("click", function(e) {
        accordion2.classList.toggle('_focus');
        content2.classList.toggle('_focus');
    });
}

const accordion3 = document.querySelector('.faq__question-3');
const content3 = document.querySelector('.faq__content-3');
if (accordion3) {
    accordion3.addEventListener("click", function(e) {
        accordion3.classList.toggle('_focus');
        content3.classList.toggle('_focus');
    });
}

const accordion4 = document.querySelector('.faq__question-4');
const content4 = document.querySelector('.faq__content-4');
if (accordion4) {
    accordion4.addEventListener("click", function(e) {
        accordion4.classList.toggle('_focus');
        content4.classList.toggle('_focus');
    });
}

new Swiper ('.swiper', {
    slidesPerView: 6,
    loop: true,
    simulateTouch: true,
    slideToClickedSlide: true,
    keyboard: {
        enabled: true,
        onlyInViewport: true,
        pageUpDown: true,
    },
    mousewheel: {
        sensivity: 1,
    },
    breakpoints: {
        320: {
            slidesPerView: 1.2,
        },
        410: {
            slidesPerView: 1.95,
        },
        610: {  
            slidesPerView: 2.95,
        },
        790: {
            slidesPerView: 3.95,
        },
        992: {
            slidesPerView: 4.95,
        },
        1260: {
            slidesPerView: 5.95,
        },
    },
});

new Swiper ('.sponsors__swiper', {
    slidesPerView: 3.9,
    simulateTouch: true,
    breakpoints: {
        320: {
            slidesPerView: 1.3,
        },
        400: {
            slidesPerView: 2.1,
        },
        485: {
            slidesPerView: 2.5,
        },
        650: {
            slidesPerView: 3.1
        },
        700: {
            slidesPerView: 3.5,
        },
        800: {
            slidesPerView: 3.9,
        },
    },
});

const burger = document.querySelector('.burger');
const nav = document.querySelector('.nav');
if (burger) {
    burger.addEventListener('click', function () {
        burger.classList.toggle('_active');
        nav.classList.toggle('_active');
        document.body.classList.toggle('_lock');
    })
}

function scrollTo(element) {
    window.scroll({
        left: 0,
        top: element.offsetTop,
        behavior: 'smooth'
    })
}

const btnHome = document.querySelector('.goto-home');
const home = document.querySelector('#home');

btnHome.addEventListener('click', () => {
    scrollTo(home);
    burger.classList.remove('_active');
    nav.classList.remove('_active');
    document.body.classList.remove('_lock')
})

const btnAboutUs = document.querySelector('.goto-aboutus');
const aboutUs = document.querySelector('#aboutus');

btnAboutUs.addEventListener('click', () => {
    scrollTo(aboutUs);
    burger.classList.remove('_active');
    nav.classList.remove('_active');
    document.body.classList.remove('_lock')
})

const btnTimeline = document.querySelector('.goto-timeline');
const timeline = document.querySelector('#timeline');

btnTimeline.addEventListener('click', () => {
    scrollTo(timeline);
    burger.classList.remove('_active');
    nav.classList.remove('_active');
    document.body.classList.remove('_lock')
})

const btnLeaderboard = document.querySelector('.goto-leaderboard');
const leaderboard = document.querySelector('#leaderboard');

btnLeaderboard.addEventListener('click', () => {
    scrollTo(leaderboard);
    burger.classList.remove('_active');
    nav.classList.remove('_active');
    document.body.classList.remove('_lock')
})

const btnContact = document.querySelector('.goto-contact');
const contact = document.querySelector('#contact');

btnContact.addEventListener('click', () => {
    scrollTo(contact);
    burger.classList.remove('_active');
    nav.classList.remove('_active');
    document.body.classList.remove('_lock')
})