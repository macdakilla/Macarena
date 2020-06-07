<?php
add_action('wp_enqueue_scripts', 'childhood_styles');
add_action('wp_enqueue_scripts', 'jquery' );
add_action('wp_enqueue_scripts', 'childhood_scripts');

function childhood_styles() {
    wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css', array(), '5.13.0');

    wp_enqueue_style( 'bootstrap-style', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css', array(), '4.5.0' );

    wp_enqueue_style( 'animate', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css', array(), '4.0.0' );

    wp_enqueue_style( 'childhood-style', get_stylesheet_uri());
};
function childhood_scripts() {
    wp_enqueue_script( 'childhood-scripts', get_template_directory_uri() . '/assets/js/main.min.js', array(), null, true);
};
function jquery() {
    wp_deregister_script('jquery-core');
	wp_deregister_script('jquery');

	wp_register_script( 'jquery-core', 'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js', false, null, true );
	wp_register_script( 'jquery', false, array('jquery-core'), null, true );

	wp_enqueue_script( 'jquery' );
}

add_filter( 'nav_menu_link_attributes', 'filter_nav_menu_link_attributes', 10, 3);
function filter_nav_menu_link_attributes($atts, $item, $args) {
    if ($args->menu === 'Main') {
        $atts['class'] = 'menu__item';
        
        if ($item->current) {
            $atts['class'] .= ' menu__item-active';
        }
    };

    return $atts;
}


add_theme_support( 'custom-logo' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'menus' );
?>