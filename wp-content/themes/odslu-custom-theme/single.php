<?php
    get_header();
?>
<?php
while(have_posts()) {
        the_post(); ?>
<div id="content">
    <div class="center">
        <?php the_post_thumbnail('medium'); ?>
        <h2 class="blog-title-font"><?php the_title(); ?></h2>
        <h3>Posted by: <?php the_author_posts_link(); ?>
            on <?php the_time('F j, Y') ?>

        </h3>
        <?php the_content(); ?>
    </div>

</div>
<?php } 
?>
<?php
    get_footer();
?>