<?php 

function letsgo_destinations_cpt() {

  if (!post_type_exists('destinations')){

    $labels = array(
      'name'               => 'Destinations',
      'singular_name'      => 'Destination',
      'add_new'            => 'Add New Destination',
      'all_items'          => 'All Destination',
      'add_new_item'       => 'Add New Destination Item',
      'edit_item'          => 'Edit A Destination',
      'new_item'           => 'New Destination',
      'view_item'          => 'View Destination',
      'search_item'        => 'Search Destination',
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
  
    register_post_type( 'destinations', $args );
  }
}

letsgo_destinations_cpt();