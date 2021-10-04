menuButton = document.querySelector('.menu-btn')
mobileMenu = document.querySelector('.mobile-menu')
hamburger = document.querySelector('.hamburger')

menuButton.addEventListener('click', (e) => {
    if (window.innerWidth >= 753) {
        mobileMenu.classList.remove('active')
    }
    mobileMenu.classList.toggle('active')
    hamburger.classList.toggle('is-active')

})
