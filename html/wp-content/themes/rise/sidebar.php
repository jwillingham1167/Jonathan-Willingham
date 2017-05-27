<aside id="sidebar">
    <div class="categories">
        <h3 class="title mobile">
            <span>Categories</span>
            <div class="icon-container"><i class="fa fa-chevron-down" aria-hidden="true"></i></div>
        </h3>
        <h3 class="title">Categories</h3>
        <ul class="categories-list">
            <?php $categories = get_categories(); ?>
            <?php foreach( $categories as $category ) : ?>
                <li class="category-item"><a href="<?php echo get_category_link( $category->term_id ); ?>"><?php echo $category->name; ?></a></li>
            <?php endforeach; ?>
        </ul>
    </div>
</aside>

<script type="text/javascript">
    var sidebarOffsetTop = $('#sidebar').offset().top - $('#header').height() - 32;
    var sidebarOffsetRight = ($(window).width() - ($('#sidebar').offset().left + $('#sidebar').outerWidth()));
    var headerOffset = $('#header').height();
    var sidebarWidth = $('#sidebar').width();

    var sideBarScroll = $(window).scroll(() => { //scroll function

        if ($(window).width() > 768) {
            if (sideBarScroll.scrollTop() >= sidebarOffsetTop) { // Sidebar sticky
                $('#sidebar').css({
                    "position" : 'fixed',
                    'right' : sidebarOffsetRight,
                    'top' : headerOffset,
                    'width' : sidebarWidth
                });
            } else {
                $('#sidebar').css({
                    'position' : 'static'
                })
            }
        }
    });
</script>