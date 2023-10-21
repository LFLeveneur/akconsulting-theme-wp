<?php
/**
 * Ak Consulting Theme WP functions and definitions
 */

function ak_consulting_theme_wp_supports () {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
    register_nav_menus(array(
        'header-menu' => 'Header Menu',
        'footer-menu' => 'Footer Menu',
    ));
}

function ak_consulting_theme_wp_nav_menu_css_class ($classes) {
    $classes[] = 'navbar-items';
    return $classes;
}

function ak_consulting_theme_wp_nav_menu_nav_link_attributes ($attrs) {
    $attrs['class'] = 'navbar-link';
    return $attrs;
}

/* function wpdocs_register_widgets() {
    register_widget( 'My_Widget' );
} */

add_action('after_setup_theme', 'ak_consulting_theme_wp_supports');
add_filter('nav_menu_css_class', 'ak_consulting_theme_wp_nav_menu_css_class');
add_filter('nav_menu_link_attributes', 'ak_consulting_theme_wp_nav_menu_nav_link_attributes');
/* add_action( 'widgets_init', 'wpdocs_register_widgets' ); */