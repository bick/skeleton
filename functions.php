<?php

function wpb_custom_new_menu() {
    register_nav_menus(
        array(
            'main-menu' => __( 'Main Menu' ),
            'footer-menu' => __( 'Footer Menu' )
        )
    );
}
add_action( 'init', 'wpb_custom_new_menu' );

function enqueue_custom_styles() {

	wp_enqueue_style( 'main-css', get_template_directory_uri() .'/library/css/style.css', array(), false, 'all' );
    wp_enqueue_script( 'main-js', get_template_directory_uri() .'/library/js/scripts.js', array(), false, 'all' );

}
add_action( 'wp_enqueue_scripts', 'enqueue_custom_styles' );

?>