document.addEventListener("DOMContentLoaded", function (e) { 
    let mobileMenu = document.querySelector("#mobile-menu");

    document.querySelector("#open-mobile-menu").addEventListener('click', () => {
        mobileMenu.classList.add('mobile-menu-active');
    });

    document.querySelector("#close-mobile-menu").addEventListener('click', () => {
        mobileMenu.classList.remove('mobile-menu-active');
    });
});