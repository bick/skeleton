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

wp_enqueue_style( 'my_parent_styles', get_template_directory_uri().'/library/css/style.css' );

?>