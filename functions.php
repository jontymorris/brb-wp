<?php

// Register Custom Navigation Walker
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

function brb_init() {
	register_nav_menus(array(
		'primary' => __( 'Primary Menu', 'Backridge Butcher' ),
	));

	add_theme_support( 'title-tag' );
}
add_action('init', 'brb_init');

function brb_enqueue_script() {
	// Styling
	wp_enqueue_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css');
	wp_enqueue_style('master', get_template_directory_uri().'/css/master.css');
	wp_enqueue_style('skranji-font', 'https://fonts.googleapis.com/css?family=Skranji');

	// JQuery
	wp_enqueue_script('jquery-minified', 'https://code.jquery.com/jquery-3.3.1.min.js', array(), null, true);
	
	// Bootstrap
	wp_enqueue_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', array('jquery-minified'), null, true);
	wp_enqueue_script('bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js', array('jquery-minified'), null, true);

	// Custom
	wp_enqueue_script('loading-js', get_template_directory_uri().'/js/loader.js', array('jquery-minified'), null, true);
	wp_enqueue_script('header-js', get_template_directory_uri().'/js/header.js', array('jquery-minified'), null, true);
	wp_enqueue_script('footer-js', get_template_directory_uri().'/js/footer.js', array('jquery-minified'), null, true);
}
add_action('wp_enqueue_scripts', 'brb_enqueue_script');

?>