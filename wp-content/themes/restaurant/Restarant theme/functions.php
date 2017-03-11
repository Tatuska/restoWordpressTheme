<?php

//Importera bootsrap
function import_bootstrap() {
	wp_enqueue_style('bootstrap-css', get_template_directory_uri()."/bootstrap/css/bootstrap.min.css", array(), "3.3.6");
	
	wp_enqueue_script('bootstrap-js', get_template_directory_uri(). "/bootstrap/js/bootstrap.min.js", array('jquery'), "3.3.6", true);

}
add_action('wp_enqueue_scripts', 'import_bootstrap');


function mat_assets() {
	wp_enqueue_style( 'my-awesome-theme', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'mat_assets' );

function mat_widget_areas() {
    register_sidebar( array(
        'name' => 'Theme Sidebar',
        'id' => 'mat-sidebar',
        'description' => 'The main sidebar shown on the right in our awesome theme',
        'before_widget' => '<li id="%1$s" class="widget %2$s list">',
		'after_widget'  => '</li>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
    ));
    register_sidebar( array(
        'name' => 'slider huge',
        'id' => 'slider1',
    ));
    register_sidebar( array(
        'name' => 'Footer area 1',
        'id' => 'footer1',
    ));
    register_sidebar( array(
        'name' => 'Footer area 2',
        'id' => 'footer2',
    ));
    register_sidebar( array(
        'name' => 'Footer area 3',
        'id' => 'footer3',
    ));
    register_sidebar( array(
        'name' => 'Footer area 4',
        'id' => 'footer4',
    ));
}
add_action( 'widgets_init', 'mat_widget_areas' );


//register_nav_menus( array(
//	'header-menu' => 'Our Awesome Header Menu',
//	'footer-menu' => 'Our Awesome Footer Menu',
//));


function register_my_menus() {
    register_nav_menus(
        array(
            'header-menu' => __( 'Header Menu' ),
            'extra-menu' => __( 'Extra Menu' ),
            'new-menu' => __( 'New Menu' )
        )
    );
}
add_action( 'init', 'register_my_menus' );




