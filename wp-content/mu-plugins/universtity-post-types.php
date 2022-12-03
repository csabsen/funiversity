<?php

function university_post_types()
{
	// Reference: https://developer.wordpress.org/reference/functions/register_post_type/
	register_post_type('event', [
		// event will be use as the slug www.whatever.com/event
		'rewrite' => [
			// you can rewrite it here
			'slug' => 'events',
		],
		'has_archive' => true,
		'public' => true,
		'labels' => [
			'name' => 'Events', // this is the name of the post type
			'add_new_item' => 'Add New Event', // this is the label for the Add New button on the post type's admin page
			'edit_item' => 'Edit Event', // this is the label for the Edit button on the post type's admin page
			'all_items' => 'All Events', // this is the label for the All Items button on the post type's admin page
			'singular_name' => 'Event', //	this is the label for the singular name of the post type
		],
		'menu_icon' => 'dashicons-calendar', // change the icon of the post type in the admin menu from](https://developer.wordpress.org/resource/dashicons/#calendar)
		'show_in_rest' => true, // this is to enable the Gutenberg editor
	]);
}

add_action('init', 'university_post_types');
