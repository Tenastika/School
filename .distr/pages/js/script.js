'use strict';

const swiper = new Swiper('.swiper', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,

    slidesPerView: 3,
    slidesPerGroup: 1,
    spaceBetween: 32,
    
  
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },

    breakpoints: {

        1440: {
        slidesPerView: 3,
        spaceBetween: 30
        },
        1024: {
            slidesPerView: 2,
            spaceBetween: 30
        },
        768: {
            slidesPerView: 2,
            spaceBetween: 30
        },
        425: {
            slidesPerView: 1,
            spaceBetween: 30
        },
        320: {
            slidesPerView: 1,
            spaceBetween: 30
        }
}});

// const ourCourses = document.querySelectorAll('div.slide');
// for (let course of ourCourses) {
//     course.addEventListener('click', function() {
//         alert('!!!');
//     })
// }
 