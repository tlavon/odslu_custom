<?php
    get_header();
    while(have_posts()) {
        the_post(); ?>
        <div id="content">
        <h2 class="blog-title-font blog-title"><?php the_title(); ?></h2>
        <div class="content-style">
        <p><?php the_content(); ?></p>
        </div>
        </div>

    <?php }

    get_footer();
?>