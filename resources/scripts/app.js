/**
 * External Dependencies
 */
import 'jquery';

$(function () {
    new WOW().init();
    
    $('.drawer').drawer();

    $('.popup').magnificPopup({
        type: 'image'
    });
});

/**
    * Smooth scroll
    */
$(function () {
    $('a[href^="#"]').click(function () {
        var speed = 500;
        var href = $(this).attr("href");
        var target = $(href == "#" || href == "" ? 'html' : href);
        var position = target.offset().top;
        $("html, body").animate({
            scrollTop: position
        }, speed, "swing");
        return false;
    });
});

/**
    * Floating btn
    */
$(function () {
    var btn = $('.floating-btn__totop');
    $(window).on('scroll ready', function () {
        if ($(this).scrollTop() > 100) {
            btn.fadeIn();
        } else {
            btn.fadeOut();
        }
    });
});