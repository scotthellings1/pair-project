const menuButton = document.querySelector('.menu-btn')
const mobileMenu = document.querySelector('.mobile-menu')
const hamburger  = document.querySelector('.hamburger')
const faqs       = document.querySelectorAll('.faq-item')

menuButton.addEventListener('click', function (e) {
    if (window.innerWidth >= 753) {
        mobileMenu.classList.remove('active')
    }
    mobileMenu.classList.toggle('active')
    hamburger.classList.toggle('is-active')

})
//polyfill for forEach for IE
if (typeof window !== 'undefined' &&  window.NodeList && !NodeList.prototype.forEach) {
    NodeList.prototype.forEach = function (callback, thisArg) {
        thisArg = thisArg || window;
        for (var i = 0; i < this.length; i++) {
            callback.call(thisArg, this[i], i, this);
        }
    };
}
// end of polyfill

faqs.forEach(function (faq) {
    faq.addEventListener("click", function () {
        faq.classList.toggle("open");
    });
});
