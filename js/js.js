searchForm = document.querySelector('.header-search');
btnSearch = document.querySelector('#search-btn');
loginForm = document.querySelector('.login-form');
registerForm = document.querySelector('.register-form');
register = document.querySelector('#register');
login = document.querySelector('#login');
btnClose =document.querySelectorAll('.close-btn')

btnSearch.onclick = () => {
    searchForm.classList.toggle('active');
}
window.onscroll = () => {
    if (window.scrollY > 80) {
        document.querySelector('.header-navbar').classList.add('active');
    } else {
        document.querySelector('.header-navbar').classList.remove('active');
    }
}
window.onload = () => {
    if (window.scrollY > 80) {
        document.querySelector('.header-navbar').classList.add('active');
    } else {
        document.querySelector('.header-navbar').classList.remove('active');
    }
}
document.querySelector('#login-btn').onclick = () => {
    loginForm.classList.toggle('active');
}
register.onclick = () => {
    loginForm.classList.remove('active');
    registerForm.classList.toggle('active');
}
login.onclick = () => {
    registerForm.classList.remove('active');
    loginForm.classList.toggle('active');
}
btnClose.forEach((btn) => {
    btn.addEventListener('click', () => {
        registerForm.classList.remove('active');
        loginForm.classList.remove('active');
      });
    });
var swiper = new Swiper(".book-slider", {
    slidesPerView: 1,
    spaceBetween: 30,
    loop: true,
    autoplay: {
        delay: 2000,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});

