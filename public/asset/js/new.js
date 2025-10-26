var swiper = new Swiper(".slide-content-car", {
    slidesPerView:4,
    spaceBetween: 20,
    slidesPergroup: 3,
    loop: true,
    centerSlide: 'true',
    fade: 'true',
    grabCursor: 'true',
    loopFillGroupWithBlank: true,
    pagination:{
        el: ".swiper-pagination",
        clickable:true,
    },
    navigation:{
        nextEl: ".swiper-button-next-car",
        prevEl: ".swiper-button-prev-car",
    },
    breakpoints:{
        0: {
            slidesPerView: 1,
        },
        600: {
            slidesPerView: 2,
        },
        1200: {
            slidesPerView: 3,
        },
    }
});

var swiper = new Swiper(".slide-content-news", {
    slidesPerView:4,
    spaceBetween: 50,
    slidesPergroup: 3,
    loop: true,
    centerSlide: 'true',
    fade: 'true',
    grabCursor: 'true',
    loopFillGroupWithBlank: true,
    pagination:{
        el: ".swiper-pagination",
        clickable:true,
    },
    navigation:{
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    breakpoints:{
        0: {
            slidesPerView: 1,
        },
        600: {
            slidesPerView: 2,
        },
        1200: {
            slidesPerView: 3,
        },
    }
});