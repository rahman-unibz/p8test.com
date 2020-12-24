$(function () {
    const swiper = new Swiper('.swiper-container', {
        autoplay: {
            delay: 1000000,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        scrollbar: {
            el: '.swiper-scrollbar',
            hide: false,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        mousewheel: true,
        keyboard: true,
    });
});


