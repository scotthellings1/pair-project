menuButton = document.querySelector('.menu-btn')
mobileMenu = document.querySelector('.mobile-menu')

menuButton.addEventListener('click', (e) => {
    mobileMenu.classList.add('active')
})
