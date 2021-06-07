<?php
get_header(); ?>

<div id="content">

<h1 class="blog-title-font blog-title">Blog</h1>

<?php
    while(have_posts()) {
        the_post(); ?>
        <div class="blog-container">
            <?php the_post_thumbnail('medium'); ?>
            <h2 class="blog-title-font"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <div>
                <p class="non-sans">Posted By: <?php the_author_posts_link(); ?> 
                on <?php the_time('F j, Y'); ?> 
                in <?php echo get_the_category_list(', '); ?></p>
            </div>
            <div>
                <p class="non-sans"><?php the_excerpt(); ?></p>
                <a href="<?php the_permalink(); ?>">Read More....</a>
            </div>
        </div>
<?php    }
echo paginate_links();
?>

</div>


<?php
get_footer();?>