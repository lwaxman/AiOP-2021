<?php 

	// custom menu
	// https://premium.wpmudev.org/blog/add-menus-to-wordpress/
	function register_top_nav() {
		register_nav_menu('new-menu',__( 'Top Navigation' ));
	}
	add_action( 'init', 'register_top_nav' );


		
	// Add Artists posts type
	function register_artists(){
	    $args = array(
	        'label' => __('Artists'),
	       	'singular_label' => __('Artist'),
	       	'public' => true,
	       	'show_ui' => true,
	       	'capability_type' => 'post',
	       	'taxonomies' => array('category'), 
	       	'hierarchical' => true,
			'rewrite' => array("slug" => "artists",'with_front' => true), // Permalinks format
			'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail'),
			'add_new' => __( 'Add New Artist' ),
			'add_new_item' => __( 'Add New Artist' ),
			'edit' => __( 'Edit Artist' ),
			'edit_item' => __( 'Edit Artist' ),
			'new_item' => __( 'New Artist' ),
			'view' => __( 'View Artist' ),
			'view_item' => __( 'View Artist' ),
			'search_items' => __( 'Search Artists' ),
			'not_found' => __( 'No artist found' ),
			'not_found_in_trash' => __( 'No artist found in Trash' ),
			'parent' => __( 'Parent Info' ),
			'menu_position' =>__( 20 ),
	       );

	   	register_post_type( 'artists' , $args );
	}
	// Load up custom post types
	add_action('init', 'register_artists');


	// add css & javascript
	function add_theme_scripts() {
		wp_enqueue_style('style', get_template_directory_uri().'/css/style.css' );
		wp_enqueue_script('jquery');
		wp_enqueue_script('main-js', get_template_directory_uri().'/js/main.js', array('jquery'));
	}	
	add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );




?>