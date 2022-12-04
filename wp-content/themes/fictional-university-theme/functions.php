<?php

function university_files()
{
	wp_enqueue_script(
		'main-university-js',
		get_theme_file_uri('/build/index.js'),
		['jquery'],
		'1.0',
		true
	);
	wp_enqueue_style(
		'university_main_styles',
		get_theme_file_uri('/build/style-index.css')
	);
	wp_enqueue_style(
		'university_extra_styles',
		get_theme_file_uri('/build/index.css')
	);
	wp_enqueue_style(
		'font-awesome',
		'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'
	);
	wp_enqueue_style(
		'custom-google-fonts',
		'https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700|Roboto:100,300,400,400i,700'
	);
}

add_action('wp_enqueue_scripts', 'university_files');

function university_features()
{
	// Registers a navigation menu location for a theme.
	// to register several menus, use an array with register_nav_menus
	// https://developer.wordpress.org/reference/functions/register_nav_menu/
	// <!-- removed this again in lesson 20  -->
	// register_nav_menu('headerMenuLocation', 'Header Menu Location');
	// register_nav_menu('footerLocationOne', 'Footer Location One');
	// register_nav_menu('footerLocationTwo', 'Footer Location Two');
	//Title Tag is a theme feature, first introduced in Version 4.1. This feature allows themes to add document title tag to HTML <head>.
	//https://codex.wordpress.org/Title_Tag
	add_theme_support('title-tag');
}

add_action('after_setup_theme', 'university_features');

function university_adjust_queries($query)
{
	if (
		!is_admin() and
		is_post_type_archive('event') and
		$query->is_main_query()
	) {
		$today = date('Ymd');
		$query->set('meta_key', 'event_date');
		$query->set('orderby', 'meta_value_num');
		$query->set('order', 'ASC');
		$query->set('meta_query', [
			[
				'key' => 'event_date',
				'compare' => '>=',
				'value' => $today,
				'type' => 'numeric',
			],
		]);
	}
}

add_action('pre_get_posts', 'university_adjust_queries');
