<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Phozogy Template">
    <meta name="keywords" content="Phozogy, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <?php wp_head(); ?>
    
</head>

<body>
    <!-- Page Preloder -->
    <!-- <div id="preloder">
        <div class="loader"></div>
    </div> -->

    <!-- Header Section Begin -->

    <?php
        if(function_exists('the_custom_logo')){
            
            $custom_logo_id = get_theme_mod('custom_logo');
            $logo = wp_get_attachment_image_src($custom_logo_id);
        }
        ?>
    <header class="header-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="logo">
                        <a href="<?php echo site_url(''); ?>">
                            <img src="<?php echo $logo[0] ?>" alt="Site Logo">
                        </a>
                    </div>
                    <nav class="nav-menu mobile-menu">
                        <ul>
                            <li class="active"><a href="<?php echo site_url(''); ?>">Home</a></li>
                            <li><a href="<?php echo site_url('/about-page'); ?>">About</a></li>
                            <li><a href="<?php echo site_url('/services'); ?>">Services</a></li>
                            <li><a href="<?php echo site_url('/portfolio'); ?>">Portfolio</a></li>
                            <li><a href="./blog.html">Blog</a></li>
                            <li><a href="#">Pages</a>
                                <ul class="dropdown">
                                    <li><a href="./gallery.html">Gallery</a></li>
                                    <li><a href="./portfolio-details.html">Portfolio Details</a></li>
                                    <li><a href="./blog-details.html">Blog Details</a></li>
                                </ul>
                            </li>
                            <li><a href="./contact.html">Contact</a></li>
                        </ul>
                    </nav>
                    <div class="top-search search-switch">
                        <i class="fa fa-search"></i>
                    </div>
                    <div id="mobile-menu-wrap"></div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->