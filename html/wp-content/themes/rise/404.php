<?php
/*
* Rise - 404
*/
?>

<?php get_header(); ?>

<div id="body-content" class="no-route content-area">

    <div class="no-route-container">
        <div class="text">
            <h2 class="large">404</h2>
            <h2>Aw Man :(</h2>
            <h2>You will be redirected in <span class="timer">5</span> seconds</h2>
        </div>
    </div>
</div>

<script>
(function(){
    var timer = 5;
    setInterval(function() {
        $('.no-route .timer').text(timer);
        timer--;
        if (timer < 0) {
            window.location = "<?php echo home_url(); ?>";
        }
    }, 1000);
})();
</script>

<?php get_footer(); ?>