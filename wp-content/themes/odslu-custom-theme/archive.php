<?php
get_header(); ?>

<div id="content">

<h1><?php the_archive_title(); ?></h1>
<p><?php the_archive_description(); ?></p>

<?php
    while(have_posts()) {
        the_post(); ?>
        <div>
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <div>
                <p>Posted By: <?php the_author_posts_link(); ?> 
                on <?php the_time('F j, Y'); ?> 
                in <?php echo get_the_category_list(', '); ?></p>
            </div>
            <div>
                <?php the_excerpt(); ?>
                <a href="<?php the_permalink(); ?>">Continue reading....</a>
            </div>
        </div>
<?php    }
echo paginate_links();
?>

</div>


<?php
get_footer();?>