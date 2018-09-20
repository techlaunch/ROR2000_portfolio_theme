<?php 

function tl_portfolio_assets() {
	wp_enqueue_style('boostrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css');
	wp_enqueue_style('style', get_stylesheet_uri());
	wp_enqueue_script('script', get_template_directory_uri() . '/script.js', [], true);
}

add_action('wp_enqueue_scripts', 'tl_portfolio_assets');
