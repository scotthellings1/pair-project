const menuButton = document.querySelector('.menu-btn')
const mobileMenu = document.querySelector('.mobile-menu')
const hamburger = document.querySelector('.hamburger')

menuButton.addEventListener('click', function (e) {
    if (window.innerWidth >= 753) {
        mobileMenu.classList.remove('active')
    }
    mobileMenu.classList.toggle('active')
    hamburger.classList.toggle('is-active')

})