<?php
function vgp_security_scripts() {
    wp_enqueue_style( 'vgp-security-style', get_stylesheet_uri() );
    wp_enqueue_script( 'vgp-security-script', get_template_directory_uri() . '/script.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'vgp_security_scripts' );

function vgp_security_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'vgp-security-theme' ),
    ) );
}
add_action( 'after_setup_theme', 'vgp_security_setup' );
?>
