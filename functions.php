<?php function mytheme_setup() {
    add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'mytheme_setup' );
?>
<?php
register_nav_menus(

array ('fria-menu' =>'fria-menu')

);
add_theme_support('post-thumbnails');
?>
<?php
function add_custom_class_to_menu_link($atts, $item, $args, $depth) {
    $atts['class'] = 'nav-link';
    return $atts;
}

add_filter('nav_menu_link_attributes', 'add_custom_class_to_menu_link', 10, 4);

function add_custom_class_to_menu_items($items, $args) {
    $items = preg_replace('/<a/', '<a class="nav-link"', $items);
    return $items;
}

add_filter('wp_nav_menu_items', 'add_custom_class_to_menu_items', 10, 2);

function add_custom_class_to_submenu_ul($submenu, $args) {
    $submenu = preg_replace('/<ul class="sub-menu/', '<ul class="dropdown-menu"', $submenu);
    return $submenu;
}

add_filter('wp_nav_menu', 'add_custom_class_to_submenu_ul', 10, 2);
?>
<?php
add_action('customize_register', 'my_customizer_options');

function my_customizer_options($wp_customize) {
    // Add a new custom setting
    $wp_customize->add_setting('page_title', array(
        'default' => 'Services',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    // Add a new custom control to the Site Identity section
    $wp_customize->add_control('page_title', array(
        'type' => 'text',
        'section' => 'title_tagline',
        'label' => __('Page Title', 'fria-theme'),
    ));
}
?>
 <?php 
 
    register_sidebar( array(
        'name'          =>'footer1',
        'id'            => 'sidebar-1',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>'
    ) );
?>
<?php

register_sidebar( array(
    'name'          =>'footer2',
    'id'            => 'sidebar-2',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>'
) );
?>







