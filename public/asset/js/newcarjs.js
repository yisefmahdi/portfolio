var swiper = new Swiper(".slide-content-car-adv", {
    slidesPerView:1,
    spaceBetween: 12,
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
        nextEl: ".swiper-button-next-adv",
        prevEl: ".swiper-button-prev-adv",
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
