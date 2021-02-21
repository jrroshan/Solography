<?php

function solo_style(){
    wp_enqueue_style( 'Quantico', 'https://fonts.googleapis.com/css?family=Quantico:400,700&display=swap');
    wp_enqueue_style( 'Opensans', 'https://fonts.googleapis.com/css?family=Open+Sans:400,600,700&display=swap');
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css',false,'1.1','all');
    wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css',false,'1.1','all');
    wp_enqueue_style( 'elegant-icon', get_template_directory_uri() . '/css/elegant-icons.css',false,'1.1','all');
    wp_enqueue_style( 'owl-carousel', get_template_directory_uri() . '/css/owl.carousel.min.css',false,'1.1','all');
    wp_enqueue_style( 'magnific-popup', get_template_directory_uri() . '/css/magnific-popup.css',false,'1.1','all');
    wp_enqueue_style( 'slicknav', get_template_directory_uri() . '/css/slicknav.min.css',false,'1.1','all');
    wp_enqueue_style( 'userstyle', get_template_directory_uri() . '/css/style.css',false,'1.1','all');

}

add_action('wp_enqueue_scripts','solo_style');

function solo_scripts(){
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery-3.3.1.min.js',NULL, 1.1, true);
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', NULL, 1.1, true);
    wp_enqueue_script( 'magnific', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', NULL, 1.1, true);
    wp_enqueue_script( 'isotope', get_template_directory_uri() . '/js/isotope.pkgd.min.js', NULL, 1.1, true);
    wp_enqueue_script( 'masonry', get_template_directory_uri() . '/js/masonry.pkgd.min.js', NULL, 1.1, true);
    wp_enqueue_script( 'slicknav', get_template_directory_uri() . '/js/jquery.slicknav.js', NULL, 1.1, true);
    wp_enqueue_script( 'Carousel', get_template_directory_uri() . '/js/owl.carousel.min.js', NULL, 1.1, true);
    wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', NULL, 1.1, true);
}

add_action('wp_enqueue_scripts','solo_scripts');

// Adding theme Support

function solo_init(){
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('html5',
        array('comment-list','comment-form','search-form')
    );
    add_theme_support('custom-logo');
}

add_action('after_setup_theme','solo_init');

// Custom Slider

function slider_custom(){
    register_post_type('slider',
        array(
            'rewrite' => array('slug'=> 'Sliders'),
            'labels' => array(
                'name' => 'Slider',
                'singular_name' => 'sliders',
                'add_new_item' => 'Add New Slider',
                'edit_item' => 'Edit Slider'
            ),
            'menu-icon' => 'dashicons-cover-image',
            'public' => true,
            'has_archive' => true,
            'supports' => array(
                'title','thumbnail', 'editor'
            )
        )
    );
}

add_action('init','slider_custom');

// Custom Banner

function custom_banner(){
    register_post_type('banner',
        array(
            'rewrite' => array('slug'=> 'Banners'),
            'labels' => array(
                'name' => 'Banner',
                'singular_name' => 'banners',
                'add_new_item' => 'Add New Banner',
                'edit_item' => 'Edit Slider'
            ),
            'menu-icon' => 'dashicons-cover-image',
            'public' => true,
            'has_archive' => true,
            'supports' => array(
                'title','thumbnail', 'editor'
            )
        )
    );
}

add_action('init','custom_banner');

// Custom Gallery

function custom_gallery(){
    register_post_type('Gallery',
    array(
        'rewrite' => array('slug'=>'gallery'),
        'labels'=> array(
            'name'=>'Gallery',
            'singular_name'=> 'gallery',
            'add_new_itemy'=>'Add New Picute',
            'edit_item'=>'Edit Gallery'
        ),
        'menu-icon'=>'dashicons',
        'public'=>true,
        'has_archive'=>true,
        'supports'=>array(
           'title','thumbnail'
        ),
        'taxonomies'=>array(
            'category'
        )

    )
);
}

add_action('init','custom_gallery');

// Custom Post Type

function reg_cat() {
    register_taxonomy_for_object_type('category','custom_gallery');
}
add_action('init', 'reg_cat');

// Custom Service option

function custom_services(){
    register_post_type('Services',
    array(
        'rewrite' => array('slug'=>'services'),
        'labels'=> array(
            'name'=>'Services',
            'singular_name'=> 'services',
            'add_new_itemy'=>'Add new Service',
            'edit_item'=>'Edit Services'
        ),
        'menu-icon'=>'dashicons',
        'public'=>true,
        'has_archive'=>true,
        'supports'=>array(
           'title','editor'
        )

    )
);
}

add_action('init','custom_services');

// Custom About Option

function custom_about(){
    register_post_type('About',
    array(
        'rewrite' => array('slug'=>'about'),
        'labels'=> array(
            'name'=>'About',
            'singular_name'=> 'abouts',
            'add_new_itemy'=>'Add new about',
            'edit_item'=>'Edit Abouts'
        ),
        'menu-icon'=>'dashicons',
        'public'=>true,
        'has_archive'=>true,
        'supports'=>array(
           'title','editor','thumbnail'
        )

    )
);
}

add_action('init','custom_about');