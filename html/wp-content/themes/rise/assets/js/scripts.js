$(document).ready(function() {

    // Mobile menu click
    $('#header .mobile-toggle').on("click", function() {
        // Switch between close and menu icon
        $('#header i').toggleClass("fa-times fa-bars");
        $('#mobile-nav').toggleClass("show");
        $('.body-wrapper').toggleClass("slide");
    });
});