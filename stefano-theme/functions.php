<?php

function my_theme_styles() {
    wp_enqueue_style( 'stefano-theme-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'my_theme_styles' );

function mytheme_add_elementor_support() {
    add_theme_support( 'elementor' );
}
add_action( 'after_setup_theme', 'mytheme_add_elementor_support' );

function your_theme_custom_logo_setup() {
    $defaults = array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'your_theme_custom_logo_setup' );



function register_my_menu() {
    register_nav_menu('header-menu',__( 'Header Menu' ));
  }
  add_action( 'init', 'register_my_menu' );
  