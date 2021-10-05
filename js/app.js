const menuButton = document.querySelector('.menu-btn')
const mobileMenu = document.querySelector('.mobile-menu')
const hamburger = document.querySelector('.hamburger')
const faqs = document.querySelectorAll('.faq-item')

menuButton.addEventListener('click', function (e) {
    if (window.innerWidth >= 753) {
        mobileMenu.classList.remove('active')
    }
    mobileMenu.classList.toggle('active')
    hamburger.classList.toggle('is-active')

})

faqs.forEach(faq => {
    faq.addEventListener('click', () => {
        faq.classList.toggle('open')
    })
})
