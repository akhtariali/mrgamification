$(document).ready(function () {
    // Navbar scroll class
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
