<?php

function cw_post_type() {

	register_post_type( 'news',
		// WordPress CPT Options Start
		array(
			'labels' => array(
				'name' => __( 'News' ),
				'singular_name' => __( 'News' )
			),
			'has_archive' => true,
			'public' => true,
			'rewrite' => array('slug' => 'news'),
			'show_in_rest' => true,
			'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
		)
	);
 }
 
 add_action( 'init', 'cw_post_type' );
 
 