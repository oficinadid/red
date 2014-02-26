<?php

add_theme_support('post-thumbnails');
add_image_size('130x130', 130, 130, true);
add_image_size('medium', 413, 136, true );


/* Excerpt length */
function custom_excerpt_length( $length ) {
    return 40;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

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



/**
 * Load javascripts used by the theme
 */
function custom_theme_js(){
	wp_register_script( 'infinite_scroll',  get_template_directory_uri() . '/js/jquery.infinitescroll.min.js', array('jquery'),null,true );
	wp_register_script( 'manual-trigger',  get_template_directory_uri() . '/js/manual-trigger.js', array('jquery'),null,true );
	// if( ! is_singular() ) {
		wp_enqueue_script('infinite_scroll');
		wp_enqueue_script('manual-trigger');
	// }
}
add_action('wp_enqueue_scripts', 'custom_theme_js');

/**
 * Infinite Scroll
 */
function custom_infinite_scroll_js() {
	?>
	<script>
	var infinite_scroll = {
		loading: {
			img: 'data:image/gif;base64,R0lGODlhAQABAHAAACH5BAUAAAAALAAAAAABAAEAAAICRAEAOw==',
			msgText: '<span class="is-loading">Cargando posts</small>',
			finishedMsg: '<span class="is-end">No hay más posts</span>',
			speed: "fast"
		},

		// "debug" : true,
		"bufferPx" : 5,
		"behavior" : "twitter",
		"nextSelector":"a.nextpostslink",
		"navSelector":".wp-pagenavi",
		"itemSelector":".infscr-item",
		"contentSelector":".infscr-content"
	};
	jQuery( infinite_scroll.contentSelector ).infinitescroll( infinite_scroll );
	</script>
	<?php
}
add_action( 'wp_footer', 'custom_infinite_scroll_js',100 );

function get_post_meta_all($post_id){
    global $wpdb;
    $data   =   array();
    $wpdb->query("
        SELECT `meta_key`, `meta_value`
        FROM $wpdb->postmeta
        WHERE `post_id` = $post_id
    ");
    foreach($wpdb->last_result as $k => $v){
        $data[$v->meta_key] =   $v->meta_value;
    };
    return $data;
}