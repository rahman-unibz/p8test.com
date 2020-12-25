$(document).ready(function () {
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

    $('.hamburger', 'div.menu').click(() => {
     $('body').css('overflow', 'hidden');
     $('div.mobile-menu').addClass('show-menu')
     return false;
    });

    $('.close', 'div.mobile-menu').click(() => {
        $('body').css('overflow', 'auto');
        $('div.mobile-menu').removeClass('show-menu');
        return false;
    });

});


