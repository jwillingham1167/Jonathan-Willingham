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