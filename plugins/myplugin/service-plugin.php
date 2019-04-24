<?php
/*
Plugin Name: Services Post Type 
Description: Custom Post Type Plugin 
Author:      Faher Elfayez 
Version:     1.0
*/




function myplugin_add_custom_post_type() {



	$args = array(
		'labels'             => array( 'name' => 'Services' ),
		'public'             => true,
		'hierarchical'       => false,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'service' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
    );

	register_post_type( 'service', $args );

}
add_action( 'init', 'myplugin_add_custom_post_type' );


