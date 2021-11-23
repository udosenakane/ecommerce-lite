<?php
define("_S_VERSION" , 1.0);
define("DC" , "&#8358");

add_theme_support('title-tag');

function digitakeoff_scripts() {
	wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/dev/bootstrap/bootstrap.css', array(), _S_VERSION );
	wp_enqueue_style( 'fontawesome', get_template_directory_uri().'/dev/fontawesome/css/all.css', array(), _S_VERSION );
	
	wp_enqueue_style( 'digitakeoff-style', get_stylesheet_uri(), array('bootstrap'), _S_VERSION );
	wp_style_add_data( 'digitakeoff-style', 'rtl', 'replace' );
	
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/dev/bootstrap/bootstrap.js', array('jquery', 'popper'), _S_VERSION, true );
	wp_enqueue_script( 'popper', get_template_directory_uri() . '/dev/js/popper.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'main', get_template_directory_uri() . '/main.js', array('bootstrap'), _S_VERSION, true );

}
add_action( 'wp_enqueue_scripts', 'digitakeoff_scripts' );


function digitakeoff_after_switch_theme(){
	// 
}
add_action( 'after_switch_theme', 'digitakeoff_after_switch_theme' );

function digitakeoff_switch_theme(){
	// 
}
add_action( 'switch_theme', 'digitakeoff_switch_theme' );






