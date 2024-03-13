<?php 
function floral_register_custom_post_types(){
  //Testimonials
  $labels = array(
    'name'               => _x( 'Testimonials', 'post type general name'  ),
    'singular_name'      => _x( 'Testimonial', 'post type singular name'  ),
    'menu_name'          => _x( 'Testimonials', 'admin menu'  ),
    'name_admin_bar'     => _x( 'Testimonial', 'add new on admin bar' ),
    'add_new'            => _x( 'Add New', 'testimonial' ),
    'add_new_item'       => __( 'Add New Testimonial' ),
    'new_item'           => __( 'New Testimonial' ),
    'edit_item'          => __( 'Edit Testimonial' ),
    'view_item'          => __( 'View Testimonial'  ),
    'all_items'          => __( 'All Testimonials' ),
    'search_items'       => __( 'Search Testimonials' ),
    'parent_item_colon'  => __( 'Parent Testimonials:' ),
    'not_found'          => __( 'No testimonials found.' ),
    'not_found_in_trash' => __( 'No testimonials found in Trash.' ),
);

  $args = array(
      'labels'             => $labels,
      'public'             => true,
      'publicly_queryable' => true,
      'show_ui'            => true,
      'show_in_menu'       => true,
      'show_in_rest'       => true,
      'query_var'          => true,
      'rewrite'            => array( 'slug' => 'testimonials' ),
      'capability_type'    => 'post',
      'has_archive'        => false,
      'hierarchical'       => false,
      'menu_position'      => 7,
      'menu_icon'          => 'dashicons-heart',
      'supports'           => array( 'title', 'editor' ),
      'template'           => array( array( 'core/quote' ) ),
      // Prevent moving, inserting, deleting blocks
      'template_lock' => 'all',

      // Prevent inserting and deleting blocks
      // 'template_lock' => 'insert',
  );

  register_post_type( 'testimonial', $args ); 
}
add_action( 'init', 'floral_register_custom_post_types' );