<?php

add_action('save_post_destinations', 'letsgo_save_destinations_metadata');
function letsgo_save_destinations_metadata($post_id) {

  if (!isset($_POST['destinations_post_nonce'])) {
    return;
  }

  if (!wp_verify_nonce($_POST['destinations_post_nonce'], 'destinations_post_nonce')) {
    return;
  }

  if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
    return;
  }
  
  if (isset($_POST['starting_price']) and !empty(isset($_POST['starting_price']))) {
    $starting_price = htmlspecialchars(strip_tags($_POST['starting_price']));
    update_post_meta($post_id, '_starting_price', $starting_price);
  } else {
    update_post_meta($post_id, '_starting_price', null);
  }

  //  General Details
  if (isset($_POST['general_details']) and !empty($_POST['general_details'])) { 
    
    $general_details = $_POST['general_details'];
    foreach ($general_details as $key => $value) {
      $general_details[$key] = htmlspecialchars(strip_tags($value));
    }

    update_post_meta($post_id, '_general_details', $general_details);

  } else {
    update_post_meta($post_id, '_general_details', []);
  }

  //  Key Highlights
  if (isset($_POST['key_highlights']) and !empty($_POST['key_highlights'])) {

    $key_highlights = $_POST['key_highlights'];
    foreach ($key_highlights as $key => $value) {
      $key_highlights[$key] = htmlspecialchars(strip_tags($value));
    }

    update_post_meta($post_id, '_key_highlights', $key_highlights);

  } else {
    update_post_meta($post_id, '_key_highlights', []);
  }

  //  Itenerary
  if (isset($_POST['itenerary']) and !empty($_POST['itenerary'])) {

    $itenerary = $_POST['itenerary'];
    foreach ($itenerary as $itenerary_key => $list) {
      foreach ($list as $key => $value) {
        $itenerary[$itenerary_key][$key] = htmlspecialchars(strip_tags($value));
      }
    }

    update_post_meta($post_id, '_itenerary', $itenerary);

  } else {
    update_post_meta($post_id, '_itenerary', []);
  }

  //  Best Features
  if (isset($_POST['best_features']) and !empty($_POST['best_features'])) {

    $best_features = $_POST['best_features'];
    foreach ($best_features as $key => $value) {
      $best_features[$key] = htmlspecialchars(strip_tags($value));
    }

    update_post_meta($post_id, '_best_features', $best_features);

  } else {
    update_post_meta($post_id, '_best_features', []);
  }

  //  Is Featured
  if (isset($_POST['is_featured'])) {

    $destinations = get_posts(array(
      'posts_per_page' => -1,
      'post_type' => 'destinations',
      'post__not_in' => array($post_id)
    ));

    foreach ($destinations as $key => $destination) {
      update_post_meta($destination->ID, '_is_featured', false);
    }

    update_post_meta($post_id, '_is_featured', true);
    
  } else {
    update_post_meta($post_id, '_is_featured', false);
  }
}