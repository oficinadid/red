<?php

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