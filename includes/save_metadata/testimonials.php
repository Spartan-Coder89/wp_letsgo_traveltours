<?php

add_action('save_post_testimonials', 'letsgo_save_testimonials_metadata');
function letsgo_save_testimonials_metadata($post_id) {

  if (!isset($_POST['testimonials_post_nonce'])) {
    return;
  }

  if (!wp_verify_nonce($_POST['testimonials_post_nonce'], 'testimonials_post_nonce')) {
    return;
  }

  if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
    return;
  }
  
  if (isset($_POST['company_position']) and !empty(isset($_POST['company_position']))) {
    $company_position = htmlspecialchars(strip_tags($_POST['company_position']));
    update_post_meta($post_id, '_company_position', $company_position);
  }
}