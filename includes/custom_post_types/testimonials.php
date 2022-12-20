<?php 

function letsgo_testimonials_cpt() {

  if (!post_type_exists('testimonials')){

    $labels = array(
      'name'               => 'Testimonials',
      'singular_name'      => 'Testimonial',
      'add_new'            => 'Add New Testimonial',
      'all_items'          => 'All Testimonial',
      'add_new_item'       => 'Add New Testimonial Item',
      'edit_item'          => 'Edit A Testimonial',
      'new_item'           => 'New Testimonial',
      'view_item'          => 'View Testimonial',
      'search_item'        => 'Search Testimonial',
      'not_found'          => 'No Items Found in This',
      'not_found_in_trash' => 'No items found in Trash',
      'parent_item_column' => 'Parent Item'
    );
  
    $args = array(
      'labels'             => $labels,
      'public'             => true,
      'has_archive'        => true,
      'publicly_queryable' => true,
      'query_var'          => true,
      'rewrite'            => true,
      'capability'         => 'post',
      'heirarchical'       => FALSE,
      'show_in_rest'       => true,
      'supports'           => array(
          'title',
          'editor',
          'thumbnail'
      ),
      'exclude_from_search' => FALSE
    );
  
    register_post_type( 'testimonials', $args );
  }
}

letsgo_testimonials_cpt();