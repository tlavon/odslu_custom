<!DOCTYPE html>

<html>
    <head>
        <?php wp_head(); ?>
    </head>
    <body>
        <header>
            <div class="container">
                <div class="mobile-container">
                <img class="logo" src="<?php echo get_theme_file_uri('/images/odslu-logo.png') ?>" alt="">
                <i class="fa fa-bars menu-icon"></i>
                </div>
                <div class="navi-container">
                
                <nav>
                    <ul class="navi-list">
                        <li><a href="<?php echo site_url('/services') ?>">Services</a></li>
                        <li><a href="<?php echo site_url('/one-day-she-leveled-up') ?>">ODSLU</a></li>
                        <li><a href="<?php echo site_url('/blog') ?>">Blog</a></li>
                        <li><a href="<?php echo site_url() ?>"><img class="logo" src="<?php echo get_theme_file_uri('/images/odslu-logo.png') ?>" alt=""></a></li>
                        <li><a href="#">Shop</a></li>
                        <li><a href="<?php echo site_url('/about') ?>">About</a></li>
                        <li><a href="<?php echo site_url('/contact-us') ?>">Contact</a></li>
                    </ul>
                </nav>
                </div>
            </div>

            <div class="menu-overlay">
                <i class="fa fa-times close-icon"></i>
                <ul class="navi-list">
                    <li><a href="<?php echo site_url('/services') ?>">Services</a></li>
                    <li><a href="<?php echo site_url('/one-day-she-leveled-up') ?>">ODSLU</a></li>
                    <li><a href="<?php echo site_url('/blog') ?>">Blog</a></li>
                    <li><a href="#">Shop</a></li>
                    <li><a href="<?php echo site_url('/about') ?>">About</a></li>
                    <li><a href="<?php echo site_url('/contact-us') ?>">Contact</a></li>
                </ul>
            </div>
        </header>
