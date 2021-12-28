<?php 

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}


	//------------------Register Custom Post Акции---------------------
	function action_post_type() {

		$labels = array(
				'name'                  => _x( 'Акции', 'Post Type General Name', 'text_domain' ),
				'singular_name'         => _x( 'Акции', 'Post Type Singular Name', 'text_domain' ),
				'menu_name'             => __( 'Акции', 'text_domain' ),
				'all_items'             => __( 'Акции', 'text_domain' ),
				'add_new_item'          => __( 'Добавить акцию', 'text_domain' ),
				'add_new'               => __( 'Добавить акцию', 'text_domain' ),
		);
		$args = array(
				'label'                 => __( 'Акции', 'text_domain' ),
				'labels'                => $labels,
				'supports'              => array( 'title', 'thumbnail', 'excerpt'),// 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
				'hierarchical'          => false,
				'public'                => true,
				'show_ui'               => true,
				'show_in_menu'          => true,
				'menu_position'         => 4,
				'menu_icon'             => 'dashicons-images-alt2',
				'show_in_admin_bar'     => true,
				'show_in_nav_menus'     => true,
				'can_export'            => true,
				'has_archive'           => true,
				'exclude_from_search'   => false,
				'publicly_queryable'    => true,
				'capability_type'       => 'page',
		);
		register_post_type( 'action', $args );

}
add_action( 'init', 'action_post_type', 0 );


	//------------------Register Custom Post Новости---------------------
	function news_post_type() {

		$labels = array(
				'name'                  => _x( 'Новости', 'Post Type General Name', 'text_domain' ),
				'singular_name'         => _x( 'Новости', 'Post Type Singular Name', 'text_domain' ),
				'menu_name'             => __( 'Новости', 'text_domain' ),
				'all_items'             => __( 'Новости', 'text_domain' ),
				'add_new_item'          => __( 'Добавить новость', 'text_domain' ),
				'add_new'               => __( 'Добавить новость', 'text_domain' ),
		);
		$args = array(
				'label'                 => __( 'Новости', 'text_domain' ),
				'labels'                => $labels,
				'supports'              => array( 'title', 'thumbnail', 'excerpt'),// 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
				'hierarchical'          => false,
				'public'                => true,
				'show_ui'               => true,
				'show_in_menu'          => true,
				'menu_position'         => 4,
				'menu_icon'             => 'dashicons-images-alt2',
				'show_in_admin_bar'     => true,
				'show_in_nav_menus'     => true,
				'can_export'            => true,
				'has_archive'           => true,
				'exclude_from_search'   => false,
				'publicly_queryable'    => true,
				'capability_type'       => 'page',
		);
		register_post_type( 'news', $args );

}
add_action( 'init', 'news_post_type', 0 );
