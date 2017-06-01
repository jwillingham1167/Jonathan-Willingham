$(document).ready(function() {

    /* ------------ Toggles ------------ */
    $('#header .mobile-toggle').on("click", function() {
        // Switch between close and menu icon
        $(this).toggleClass("fa-times fa-bars");
        $('#mobile-nav').toggleClass("show");
        $('.body-wrapper').toggleClass("slide");
    });

    $('#sidebar .title.mobile').on("click", function() {
        $('.icon-container', this).toggleClass("open");
        $('#sidebar .categories-list').slideToggle();
    });
    /* ------------ End Toggles ------------ */

    /* ------------ Scroll Functions ------------ */
    var windowTop = $(window).scroll(() => { //scroll function

        if (windowTop.scrollTop() > 1) {
            $('#header .title').addClass("resized");
        }

        $('.homepage-landing .landing-title, .banner > .banner-title').css({
            'bottom' : -($(this).scrollTop()/1.75)+"px"
        });

        // $('.homepage-landing').css({"transform":"translateY(" + $(this).scrollTop()/3 + "px)"});

    });
    /* ------------ End Scroll Functions ------------ */

    /* ------------ Waypoints ------------ */
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
    /* ------------ End Waypoints ------------ */

});