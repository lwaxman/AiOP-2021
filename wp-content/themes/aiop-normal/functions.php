<?php 

	// custom navigation
	// https://www.wpbeginner.com/wp-themes/how-to-add-custom-navigation-menus-in-wordpress-3-0-themes/
	function wpb_custom_new_menu() {
		register_nav_menus(
			array(
				'my-custom-menu' => __( 'Top Navigation' ),
				'my-second-menu' => __( 'Sub Navigation' ),
			)
		);
	}
	add_action( 'init', 'wpb_custom_new_menu' );

		
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

	function sort_posts_alpha( $query ) {
		if ( $query->is_tax('artists') && $query->is_main_query() ) {
			$query->set( 'orderby', 'title' );
			$query->set( 'order', 'ASC' );
		}
	}
	add_action( 'pre_get_posts', 'sort_posts_alpha' );


	// add css & javascript
	function add_theme_scripts() {
		wp_enqueue_style('style', get_stylesheet_directory_uri().'/style.css' );
		wp_enqueue_script('jquery');
		wp_enqueue_script('main-js', get_template_directory_uri().'/js/main.js', array('jquery'));
	}	
	add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

	// add css to page templates
	function add_page_template_scripts() {
	    if ( is_page_template( 'page-artists.php' ) ) {
	        wp_enqueue_style( 'style-artists-page', get_stylesheet_directory_uri() . '/style.css' );
	    }
	    if ( is_page_template( 'page-about.php' ) ) {
	        wp_enqueue_style( 'style-about-page', get_stylesheet_directory_uri() . '/style.css' );
	    }
	    if ( is_page_template( 'page-partners.php' ) ) {
	        wp_enqueue_style( 'style-partners-page', get_stylesheet_directory_uri() . '/style.css' );
	    }
	     if ( is_page_template( 'page-donate.php' ) ) {
	        wp_enqueue_style( 'style-donate-page', get_stylesheet_directory_uri() . '/style.css' );
	    }
	}
	add_action( 'wp_enqueue_scripts', 'add_page_template_scripts' );

?>