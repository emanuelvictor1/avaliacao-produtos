let btn = document.querySelector('.btn-menu')
let navMenu = document.querySelector('.nav--menu')

btn.addEventListener('onclick', () => {
    navMenu.classList.toggle('.open')
})
