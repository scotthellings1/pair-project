menuButton = document.querySelector('.menu-btn')
mobileMenu = document.querySelector('.mobile-menu')

menuButton.addEventListener('click', (e) => {
    if (window.innerWidth >= 753) {
        mobileMenu.classList.remove('active')
    }
    mobileMenu.classList.toggle('active')


})
