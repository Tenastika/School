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
        spaceBetween: 28
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
const navMenu = document.querySelector('.header__nav')
// Look for .hamburger
const hamburger = document.querySelector(".hamburger");
// On click
hamburger.addEventListener("click", function(e) {
  // Toggle class "is-active"
  hamburger.classList.toggle("is-active");
  // Do something else, like open/close menu
  navMenu.classList.toggle('active-menu'); 
  e.stopPropagation(); //Останавливаем всплытие для корректной работы функции закрытия меню по клику вне области меню
});

document.addEventListener ('click', function(e) {
    if (!(navMenu.contains(e.target)) && 
        (navMenu.classList.contains('active-menu'))) {

        hamburger.classList.toggle("is-active");
        navMenu.classList.toggle('active-menu');     
    }
})

// const mentorsCard = document.querySelectorAll('.mentors__card');
// for (let card of mentorsCard) {
//     card.addEventListener('click', function addClass() {
//         card.classList.toggle('card-active')
//     })
// }
// document.addEventListener ('click', function(e) {
//     if (!(e.target.classList.contains("card-active") )) {

//        console.log(e.target)    
//     }}
// )

// const ourCourses = document.querySelectorAll('div.slide');
// for (let course of ourCourses) {
//     course.addEventListener('click', function() {
//         alert('!!!');
//     })
// }


$('[data-fancybox="mentors"]').fancybox({     
     loop: true,
     toolbar  : false,
	 smallBtn : true,   
})
   
$('[data-fancybox="contacts"]').fancybox({     
    toolbar  : false,
    smallBtn : true,
      
})
$('[data-fancybox="courses"]').fancybox({     
   
    loop: true,
     toolbar  : false,
	 smallBtn : false, 
})
const inputPassLog = document.querySelector('.modals__form-login-pas');
const inputPassReg = document.querySelector('.modals__form-reg-pas');
const passViewLog = document.querySelector('.pass-view-log');
const passViewReg = document.querySelector('.pass-view-reg');


function getViewPass(btn, input) {
    btn.addEventListener('click', function addType() {
        if (input.type == 'password') {
            input.type = 'text';
        } else {
            input.type = 'password'
        }   
    })    
}
getViewPass(passViewLog, inputPassLog);
getViewPass(passViewReg, inputPassReg);

const btnLogin = document.querySelector('.modals__btn-login');
const btnReg = document.querySelector('.modals__btn-reg');
const formLog = document.querySelector('.modals__form-login');
const formReg = document.querySelector('.modals__form-reg');
console.log(formLog)

function addClass(btn1, form1, btn2, form2) {
    btn1.addEventListener('click', function changeClass() {
        btn1.classList.add('active');
        btn2.classList.remove('active');
        form1.classList.add('index1');
        form2.classList.remove('index1');
    });
    btn2.addEventListener('click', function changeClass() {
        btn1.classList.remove('active');
        btn2.classList.add('active');
        form1.classList.remove('index1');
        form2.classList.add('index1');
    })

}
addClass(btnLogin,formLog, btnReg, formReg);