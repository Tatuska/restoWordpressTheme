<?php

//Importera bootsrap
function import_bootstrap() {
	wp_enqueue_style('bootstrap-css', get_template_directory_uri()."/bootstrap/css/bootstrap.min.css", array(), "3.3.6");
	
	wp_enqueue_script('bootstrap-js', get_template_directory_uri(). "/bootstrap/js/bootstrap.min.js", array('jquery'), "3.3.6", true);

}
add_action('wp_enqueue_scripts', 'import_bootstrap');


//Hämta CSS filer
function import_stylesheets() {
	wp_enqueue_style('reset', get_template_directory_uri()."css/reset.css");
	wp_enqueue_style('style', get_template_directory_uri(). "/style.css", array('reset'));
}
add_action('wp_enqueue_scripts', 'import_stylesheets');


//Lägg till funktioner för temat
function sibarstheme_setup() {
	add_theme_support( 'custom-background' );
	
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'small-thumb', 180, 120, true );
	add_image_size( 'banner-image', 860, 320, true );
}
add_action('after_setup_theme', 'sibarstheme_setup');

add_action( 'widgets_init', 'mat_widget_areas' );
function mat_widget_areas() {
	register_sidebar( array(
		'name' => 'Theme Sidebar',
		'id' => 'mat-sidebar',
		'description' => 'The main sidebar shown on the right in our awesome theme',
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget'  => '</li>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	));
}