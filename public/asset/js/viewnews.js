var swiper = new Swiper(".slide-content-new", {
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
        nextEl: ".swiper-button-next-new",
        prevEl: ".swiper-button-prev-new",
    },
    breakpoints:{
        0: {
            slidesPerView: 1,
        },
        600: {
            slidesPerView: 3,
        },
        1200: {
            slidesPerView: 3,
        },
    }
});
