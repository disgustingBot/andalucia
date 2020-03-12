<?php



add_action( 'init', 'cp_change_post_object' );
// Change dashboard Posts to News
function cp_change_post_object() {
    $get_post_type = get_post_type_object('post');
    $labels = $get_post_type->labels;
        $labels->name = 'Partners';
        $labels->singular_name = 'Partners';
        $labels->add_new = 'Add Partners';
        $labels->add_new_item = 'Add Partners';
        $labels->edit_item = 'Edit Partners';
        $labels->new_item = 'Partners';
        $labels->view_item = 'View Partner';
        $labels->search_items = 'Search Partners';
        $labels->not_found = 'No Partners found';
        $labels->not_found_in_trash = 'No Partners found in Trash';
        $labels->all_items = 'All Partners';
        $labels->menu_name = 'Partners';
        $labels->name_admin_bar = 'Partners';
}


// Built by www.lattedev.com
// add_action( 'init', 'lattedev_custom_posts' );
// function lattedev_custom_posts() {
//     /* Añado las etiquetas que aparecerán en el escritorio de WordPress */
// 	$labels = array(
// 		'name'               => _x( 'Partners', 'post type general name', 'text-domain' ),
// 		'singular_name'      => _x( 'Partner', 'post type singular name', 'text-domain' ),
// 		'menu_name'          => _x( 'Partners', 'admin menu', 'text-domain' ),
// 		'add_new'            => _x( 'Add new', 'partner', 'text-domain' ),
// 		'add_new_item'       => __( 'Add new partner', 'text-domain' ),
// 		'new_item'           => __( 'New partner', 'text-domain' ),
// 		'edit_item'          => __( 'Edit partner', 'text-domain' ),
// 		'view_item'          => __( 'See partner', 'text-domain' ),
// 		'all_items'          => __( 'All partners', 'text-domain' ),
// 		'search_items'       => __( 'Search partners', 'text-domain' ),
// 		'not_found'          => __( 'There are no partners.', 'text-domain' ),
// 		'not_found_in_trash' => __( 'No partners in the bin.', 'text-domain' )
// 	);
//     /* Configuro el comportamiento y funcionalidades del nuevo custom post type */
// 	$args = array(
// 		'labels'             => $labels,
// 		'description'        => __( 'Desctription.', 'text-domain' ),
// 		'public'             => true,
// 		'publicly_queryable' => true,
// 		'parent_item_colon'  => true,
// 		'show_ui'            => true,
// 		'show_in_menu'       => true,
// 		'show_in_nav_menus'  => true,
//     'show_in_rest'       => true,
// 		'query_var'          => true,
// 		'rewrite'            => array( 'slug' => 'partner' ),
// 		'capability_type'    => 'post',
// 		'has_archive'        => true,
// 		'hierarchical'       => true,
//     'menu-icon'          => 'dashicons-palmtree',
// 		'menu_position'      => 5,
// 		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'page-attributes', 'revisions', 'custom-fields' )
// 	);
// 	register_post_type( 'partner', $args );
//
//
//
//
//     /* Añado las etiquetas que aparecerán en el escritorio de WordPress */
// 	$labels = array(
// 		'name'               => _x( 'Testimonials', 'post type general name', 'text-domain' ),
// 		'singular_name'      => _x( 'Testimonial', 'post type singular name', 'text-domain' ),
// 		'menu_name'          => _x( 'Testimonials', 'admin menu', 'text-domain' ),
// 		'add_new'            => _x( 'Add new', 'testimonial', 'text-domain' ),
// 		'add_new_item'       => __( 'Add new testimonial', 'text-domain' ),
// 		'new_item'           => __( 'New testimonial', 'text-domain' ),
// 		'edit_item'          => __( 'Edit testimonial', 'text-domain' ),
// 		'view_item'          => __( 'See testimonial', 'text-domain' ),
// 		'all_items'          => __( 'All testimonials', 'text-domain' ),
// 		'search_items'       => __( 'Search testimonials', 'text-domain' ),
// 		'not_found'          => __( 'There are no testimonials.', 'text-domain' ),
// 		'not_found_in_trash' => __( 'No testimonials in the bin.', 'text-domain' )
// 	);
//
//
//     /* Configuro el comportamiento y funcionalidades del nuevo custom post type */
// 	$args = array(
// 		'labels'             => $labels,
// 		'description'        => __( 'Desctription.', 'text-domain' ),
// 		'public'             => true,
// 		'publicly_queryable' => true,
// 		'show_ui'            => true,
// 		'show_in_nav_menus'  => true,
// 		'show_in_menu'       => true,
//     'show_in_rest'       => true,
// 		'query_var'          => true,
// 		'rewrite'            => array( 'slug' => 'restaurant' ),
// 		'capability_type'    => 'post',
// 		'has_archive'        => true,
// 		'hierarchical'       => false,
//     'taxonomies'         => array('loc'),
// 		'menu_icon'          => 'dashicons-format-quote',
// 		'menu_position'      => 5,
// 		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'revisions' )
// 	);
// 	register_post_type( 'testimonials', $args );
//
//
//
//
//
//
//   /* Configuramos las etiquetas que mostraremos en el escritorio de WordPress */
//   $labels = array(
//     'name'             => _x( 'Locations', 'taxonomy general name' ),
//     'singular_name'    => _x( 'Location', 'taxonomy singular name' ),
//     'search_items'     => __( 'Search by Location' ),
//     'all_items'        => __( 'All Locations' ),
//     'parent_item'      => __( 'Parent location' ),
//     'parent_item_colon'=> __( 'Parent location:' ),
//     'edit_item'        => __( 'Edit Location' ),
//     'update_item'      => __( 'Update Location' ),
//     'add_new_item'     => __( 'Add new Location' ),
//     'new_item_name'    => __( 'Name of new Location' ),
//   );
//
//   /* Registramos la taxonomía y la configuramos como jerárquica (al estilo de las categorías) */
//   register_taxonomy( 'loc', array( 'restaurant' ), array(
//     'labels'             => $labels,
//     'public'             => true,
//     'hierarchical'       => true,
//     'show_ui'            => true,
//     'query_var'          => true,
//     'show_in_nav_menus'  => true,
//     'show_admin_column'  => true,
//     'show_in_rest'       => true, // Needed for tax to appear in Gutenberg editor.
//     'rewrite'            => array( 'slug' => 'loc' ),
//   ));
//
// }
