'use strict';

const swiper = new Swiper('.swiper', {
    // Optional parameters
    direction: 'horizontal',
    
    
    slidesPerViev: 3,
    
  
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },

    // breakpoints: {
    //     1440: {
    //     slidesPerViev: 3,
    //     spaceBetween: 30
    // }}
  
   
  });

  console.log(swiper)