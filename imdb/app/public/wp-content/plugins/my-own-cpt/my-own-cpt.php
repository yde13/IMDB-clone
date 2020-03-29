<?php
/*
Plugin Name: My Own CPT
Description: Making my own CPT
Author: Yde13
*/

$post_types = array ( 'post', 'movies');

function hcf_register_meta_boxes() {
    add_meta_box( 'hcf-1', __( 'My Own CPT', 'hcf' ), 'hcf_display_callback', $post_types );
}
add_action( 'add_meta_boxes', 'hcf_register_meta_boxes' );

/**
 * Meta box display callback.
 *
 * @param WP_Post $post Current post object.
 */
function hcf_display_callback( $post ) {
    include plugin_dir_path( __FILE__ ) . './form.php';
}

function hcf_save_meta_box( $post_id ) {
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
    if ( $parent_id = wp_is_post_revision( $post_id ) ) {
        $post_id = $parent_id;
    }
    $fields = [
        'hcf_title',
        'hcf_description',
        'hcf_id',
    ];
    foreach ( $fields as $field ) {
        if ( array_key_exists( $field, $_POST ) ) {
            update_post_meta( $post_id, $field, sanitize_text_field( $_POST[$field] ) );
        }
     }
}
add_action( 'save_post', 'hcf_save_meta_box' );

function cptui_register_my_cpts_movies() {

	/**
	 * Post Type: movies.
	 */

	$labels = [
		"name" => __( "movies", "financerecruitment" ),
		"singular_name" => __( "movie", "financerecruitment" ),
	];

	$args = [
		"label" => __( "movies", "financerecruitment" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "movies", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "editor", "thumbnail" ],
	];

	register_post_type( "movies", $args );
}

add_action( 'init', 'cptui_register_my_cpts_movies' );




