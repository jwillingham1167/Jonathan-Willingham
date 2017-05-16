$(document).ready(function() {
    $('#header .mobile-toggle').on("click", function() {
        $('#header i').toggleClass("fa-times fa-bars");
        $('#mobile-nav').toggleClass("show");
        $('.body-wrapper').toggleClass("slide");
    });
});