var swiper = new Swiper(".slide-content-car", {
    slidesPerView:1,
    spaceBetween: 5,
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
            slidesPerView: 1,
        },
        1200: {
            slidesPerView: 1,
        },
    }
});