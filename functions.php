<?php 


// adding css
////////////////////////////////////////////////////////
function theme_styles() {

    wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css' );
    wp_enqueue_style( 'style_css', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'font-awesome','http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css' );
    wp_enqueue_style( 'google_font', 'http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' );
    wp_enqueue_style( 'google_font2','http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' );

}

add_action( 'wp_enqueue_scripts', 'theme_styles' );


// adding js
////////////////////////////////////////////////////////
function theme_js() {

    global $wp_scripts;

    wp_register_script('html5_shiv', 'https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js', '', '', false);
    wp_register_script('respond_js', 'https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js', '', '', false);

    $wp_scripts->add_data('html5_shiv', 'conditional', 'lt IE 9');
    $wp_scripts->add_data('respond_js', 'conditional', 'lt IE 9');

    wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '', true );
    wp_enqueue_script( 'theme_js', get_template_directory_uri() . '/js/clean-blog.min.js', array('jquery'), '', true );


}

 add_action( 'wp_enqueue_scripts', 'theme_js');


// enabling featured image
////////////////////////////////////////////////////////
add_theme_support( 'post-thumbnails' ); 



?>