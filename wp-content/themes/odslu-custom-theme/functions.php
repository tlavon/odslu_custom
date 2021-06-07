<?php
    function odslu_files() {
        wp_enqueue_style('odslu-main_styles', get_stylesheet_uri());
        wp_enqueue_style('fonts', '//fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300&family=Playfair+Display:wght@500&display=swap" rel="stylesheet">');
        wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
        wp_enqueue_script('menu-js', get_theme_file_uri('/js/Menu.js'), NULL, microtime(), true);
    }

    function odslu_features() {
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails'); 
    }
    add_action('wp_enqueue_scripts', 'odslu_files');
    add_action('after_setup_theme', 'odslu_features');
    
?>