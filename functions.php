<?php
    define( 'SASS_VERSION', 0.1 );

   
    add_theme_support( 'automatic-feed-links' );

    register_nav_menus( 
        array(
            'primary'   =>  __( 'Primary Menu', 'sass' ),
        )
    );

    function main_stylesheet() {

        wp_register_style( 'main-style', get_template_directory_uri() . 'style.css', array(), '28062013', 'all' );  

        wp_enqueue_style( 'main-style' );
    }

    function main_script() {
      
        wp_register_script( 'main-script', get_template_directory_uri() . '/js/main.js', array( 'jquery', '28062013', true ) );

        wp_enqueue_script( 'main-script' );
    }

    add_action( 'wp_enqueue_style', 'main_style' );  
    add_action( 'wp_enqueue_scripts', 'main_script' );



?>