$(document).ready(function() {

    /* ------------ Mobile menu toggle ------------ */
    $('#header .mobile-toggle').on("click", function() {
        // Switch between close and menu icon
        $(this).toggleClass("fa-times fa-bars");
        $('#mobile-nav').toggleClass("show");
        $('.body-wrapper').toggleClass("slide");
    });
    /* ------------ End Mobile menu toggle ------------ */

    /* ------------ Parallax Scrolling ------------ */
    $(window).scroll(function() {
        $('.homepage-landing .landing-title').css({
            'bottom' : -($(this).scrollTop()/1.75)+"px"
        });
    });
    /* ------------ End Parallax scrolling ------------ */

});