<?php

add_theme_support('post-thumbnails');
add_image_size('130x130', 130, 130, true);
add_image_size('medium', 413, 136, true );

// registramos taxonomia Tema
function tax_tema() {

	$labels = array(
		'name'                       => 'Temas',
		'singular_name'              => 'Tema',
		'menu_name'                  => 'Temas',
		'all_items'                  => 'All Temas',
		'parent_item'                => 'Parent Tema',
		'parent_item_colon'          => 'Parent Tema:',
		'new_item_name'              => 'New Tema Name',
		'add_new_item'               => 'Add New Tema',
		'edit_item'                  => 'Edit Tema',
		'update_item'                => 'Update Tema',
		'separate_items_with_commas' => 'Separate temas with commas',
		'search_items'               => 'Search Temas',
		'add_or_remove_items'        => 'Add or remove temas',
		'choose_from_most_used'      => 'Choose from the most used temas',
		'not_found'                  => 'Not Found',
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'temas', 'post', $args );

}

// Hook into the 'init' action
add_action( 'init', 'tax_tema', 0 );

// Register Custom Post Type
function cpt_colaboradores() {

	$labels = array(
		'name'                => _x( 'Colaboradores', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'Colaborador', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'Colaboradores', 'text_domain' ),
		'parent_item_colon'   => __( 'Parent Colaborador:', 'text_domain' ),
		'all_items'           => __( 'All Colaboradores', 'text_domain' ),
		'view_item'           => __( 'View Colaborador', 'text_domain' ),
		'add_new_item'        => __( 'Add New Colaborador', 'text_domain' ),
		'add_new'             => __( 'Add New', 'text_domain' ),
		'edit_item'           => __( 'Edit Colaborador', 'text_domain' ),
		'update_item'         => __( 'Update Colaborador', 'text_domain' ),
		'search_items'        => __( 'Search Colaborador', 'text_domain' ),
		'not_found'           => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
	);
	$args = array(
		'label'               => __( 'colaboradores', 'text_domain' ),
		'description'         => __( 'Colaboradores', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'thumbnail', 'page-attributes' ),
		// 'taxonomies'          => array( 'temas' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'menu_icon'           => '',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'colaboradores', $args );

}

// Hook into the 'init' action
add_action( 'init', 'cpt_colaboradores', 0 );