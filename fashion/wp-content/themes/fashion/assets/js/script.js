$(document).ready(function () {
    $('.slider').slick({
        arrows: false,
        dots: true,
        autoplay: true,
    });

    $('.burger').click(function (event) {
        $('.burger, .menu, .header').toggleClass('active');
    });

});