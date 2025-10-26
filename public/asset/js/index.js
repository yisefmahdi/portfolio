var swiper = new Swiper(".slide-content", {
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
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    breakpoints:{
        0: {
            slidesPerView: 1,
        },
        600: {
            slidesPerView: 3,
        },
        1200: {
            slidesPerView: 4,
        },
    }
});

var swiper = new Swiper(".slide-content-car", {
    slidesPerView:3,
    spaceBetween: 10,
    slidesPergroup: 3,
    loop: true,
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

var swiper = new Swiper(".slide-content-new", {
    slidesPerView:3,
    spaceBetween: 15,
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
            slidesPerView: 2,
        },
        1200: {
            slidesPerView: 3,
        },
    }
});


var swiper = new Swiper(".slide-content-main", {
    slidesPerView:4,
    spaceBetween: 15,
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
            slidesPerView: 3,
        },
        1200: {
            slidesPerView: 4,
        },
    }
});


// closeSidebar
closeSidebar();
function openSidebar() {
  document.getElementById("mySidebar").style.display = "block";
}

function closeSidebar() {
  document.getElementById("mySidebar").style.display = "none";
}

// dropdown footer
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
    dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
        dropdownContent.style.display = "none";
    } else {
        dropdownContent.style.display = "block";
    }
    });
}
