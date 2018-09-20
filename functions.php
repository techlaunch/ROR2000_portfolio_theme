<?php 

function tl_portfolio_assets() {
	wp_enqueue_style('boostrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css');
	wp_enqueue_style('google_fonts', 'https://fonts.googleapis.com/css?family=Nunito');
	wp_enqueue_style('style', get_stylesheet_uri());
	wp_enqueue_script('script', get_template_directory_uri() . '/script.js', [], true);
}

function tl_menu() {
	register_nav_menus([
		'main-menu' => __('Main menu'),
		'social-menu' => __('Social menu')
	]);
}

function tl_widgets() {
	register_sidebar([
		'name' => 'Sidebar1',
		'id' => 'sidebar_1_widget',
		'before_widget' => '<div class="chw-widget">',
		'after_widget' => '</div>',
		'before_title'=> '<h2 class="chw-title">',
		'after_title' => '</h2>',
	]);
}

add_theme_support('post-thumbnails', [
	'post',
	'page',
	'custom-post-type-name',
]);

add_action('init', 'tl_menu');
add_action('wp_enqueue_scripts', 'tl_portfolio_assets');
add_action('widgets_init', 'tl_widgets');