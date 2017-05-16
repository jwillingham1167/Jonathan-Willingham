$(document).ready(function() {

    /* ------------ Mobile menu toggle ------------ */
    $('#header .mobile-toggle').on("click", function() {
        // Switch between close and menu icon
        $(this).toggleClass("fa-times fa-bars");
        $('#mobile-nav').toggleClass("show");
        $('.body-wrapper').toggleClass("slide");
    });
    /* ------------ End Mobile menu toggle ------------ */

    /* ------------ Scroll Functions ------------ */
     $(window).scroll(function() { //scroll function

        $('.homepage-landing .landing-title').css({
            'bottom' : -($(this).scrollTop()/1.75)+"px"
        });

    });
     /* ------------ End Scroll Functions ------------ */


    $('.about-me-wrapper').waypoint({
        handler: function() {
        $('.about-me-container').addClass("show");
    },
        offset: '60%'
    });

    $('.tools-container').waypoint({
        handler: function() {
            $('.tools-container').addClass("show");
        },
        offset: '60%'
    });

 });