<?php

function theme_assets() {
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/posts.js', array ( 'jquery' ), 1.1, true);
    wp_localize_script('script', 'myObj', array(
        'ajaxurl' => admin_url('admin-ajax.php'),
        'nonce' => wp_create_nonce('my-nonce')
    ));
}
add_action('wp_enqueue_scripts', 'theme_assets');

//add support the widget
function widget_support() {
    register_sidebar( array(
        'name'          => 'Sidebar',
        'id'            => 'sidebar',
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'widget_support' );

//register menu header
function add_header_nav() {
    register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'add_header_nav' );
