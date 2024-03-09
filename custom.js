//  Initialize Swiper start
var swiper = new Swiper(".mySwiper", {
    // slidesPerView: 7,
    // spaceBetween: 30,
    slidesPerGroup: 1,
    loop: true,
    fade: true,
    grabCursor: true,
    loopFillGroupWithBlank: false,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },

    breakpoints: {
        300: {
            slidesPerView: 2,
            spaceBetween: 20,
        },
        500: {
            slidesPerView: 3,
            spaceBetween: 20,
        },
        868: {
            slidesPerView: 4,
            spaceBetween: 30,
        },
        1000: {
            slidesPerView: 6,
            spaceBetween: 30,
        },
        1250: {
            slidesPerView: 6,
            spaceBetween: 20,
        },
    },
});



  //  Initialize Swiper end

  var swiper = new Swiper(".mycontainer", {
    // slidesPerView: 7,
    // spaceBetween: 30,
    slidesPerGroup: 1,
    loop: true,
    fade: true,
    grabCursor: true,
    loopFillGroupWithBlank: false,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },

    breakpoints: {
        320: {
            slidesPerView: 1,
            spaceBetween: 20,
        },
        500: {
            slidesPerView: 2,
            spaceBetween: 20,
        },
        868: {
            slidesPerView: 2,
            spaceBetween: 30,
        },
        1000: {
            slidesPerView: 3,
            spaceBetween: 30,
        },
        1250: {
            slidesPerView: 4,
            spaceBetween: 20,
        },
    },
});




