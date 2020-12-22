$(function () {
    const swiper = new Swiper('.swiper-container', {
        autoplay: {
            delay: 1000000,
        },
        cssMode: true,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        scrollbar: {
            el: '.swiper-scrollbar',
            hide: false,
        },
        mousewheel: true,
        keyboard: true,
    });
});


