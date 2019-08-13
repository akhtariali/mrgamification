$(document).ready(function () {
    "use strict";
    /* Demo purposes only */
    $("figure").mouseleave(
        function () {
            $(this).removeClass("hover");
        }
    );

    var window_width = $(window).width(),
        window_height = window.innerHeight,
        header_height = $(".default-header").height(),
        header_height_static = $(".site-header.static").outerHeight(),
        fitscreen = window_height - header_height;


    $(".fullscreen").css("height", window_height)
    $(".fitscreen").css("height", fitscreen);





    // Header scroll class
    function pickNavbarClass(win) {
        if (win.scrollTop() == 0) {
            $('#header').removeClass('header-scrolled');
        } else {
            $('#header').addClass('header-scrolled');
        }
    }
    var $win = $(window);
    // Picks navbar's class on page load
    pickNavbarClass($win);
    // Picks navbar's class on scroll 
    $win.scroll(function () {
        pickNavbarClass($win);
    });
});
