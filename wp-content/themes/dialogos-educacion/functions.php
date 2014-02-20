<?php
add_theme_support('post-thumbnails');
add_image_size('130x130', 130, 130, true);
add_image_size('medium', 413, 136, true );

// Register Custom Post Type
function cpt_preguntas() {

	$labels = array(
		'name'                => _x( 'Preguntas', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'Pregunta', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'Preguntas', 'text_domain' ),
		'parent_item_colon'   => __( 'Parent Pregunta:', 'text_domain' ),
		'all_items'           => __( 'All Preguntas', 'text_domain' ),
		'view_item'           => __( 'View Pregunta', 'text_domain' ),
		'add_new_item'        => __( 'Add New Pregunta', 'text_domain' ),
		'add_new'             => __( 'Add New', 'text_domain' ),
		'edit_item'           => __( 'Edit Pregunta', 'text_domain' ),
		'update_item'         => __( 'Update Pregunta', 'text_domain' ),
		'search_items'        => __( 'Search Pregunta', 'text_domain' ),
		'not_found'           => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
	);
	$args = array(
		'label'               => __( 'preguntas', 'text_domain' ),
		'description'         => __( 'Preguntas', 'text_domain' ),
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
	register_post_type( 'preguntas', $args );

}

// Hook into the 'init' action
add_action( 'init', 'cpt_preguntas', 0 );

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

		"debug" : true,
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

// modificamos resultados de búsqueda
add_filter( 'pre_get_posts', 'modified_pre_get_posts' );
function modified_pre_get_posts( $query ) {
  if ( $query->is_search() ) {
    $query->set( 'post_type', array( 'post' ) ); // should be a number; you have to replace that text with the actual ID
  }
  return $query;
}