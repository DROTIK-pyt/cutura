new Swiper('.about__slider',{
        slidesPerView: 2,
        centeredSlides: true,
        loop: false,
        spaceBetween: 50,
        navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
        },
        breakpoints: {
                992: {
                        slidesPerView: 4,
                        centeredSlides: false,
                        loop: true,
                        spaceBetween: 0,
                },
                768: {
                        slidesPerView: 2,
                        centeredSlides: false,
                        loop: true,
                        spaceBetween: 0,
                },
                320: {
                        slidesPerView: 1,
                        centeredSlides: false,
                        loop: true,
                        spaceBetween: 0,
                },
        
        },
        
      });


      new Swiper('.home__slider ',{
        slidesPerView: 1,
        centeredSlides: true,
        loop: false,
        spaceBetween: 0,
        autoplay: {
                delay:  5000,
        },
        allowTouchMove: false,
        });


let btnMenuOpen = document.querySelectorAll('.btn-mobile-menu-open')
let header = document.querySelectorAll('.menu__outside')
let overlay1 = document.querySelector('#overlay1')
// let overlay2 = document.querySelector('#overlay2')

btnMenuOpen[0].addEventListener('click', () => {
        header[0].classList.add('menu-opened')
        document.body.style.overflow = 'hidden'
})

// btnMenuOpen[1].addEventListener('click', () => {
//         header[1].classList.add('menu-opened')
//         document.body.style.overflow = 'hidden'
// })

overlay1.addEventListener('click', () => {
        header[0].classList.remove('menu-opened')
        document.body.style.overflow = 'auto'
})

// overlay2.addEventListener('click', () => {
//         header[1].classList.remove('menu-opened')
//         document.body.style.overflow = 'auto'
// })