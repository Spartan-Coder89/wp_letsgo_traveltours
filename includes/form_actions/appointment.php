<?php

add_action('admin_post_appointment', function() {

  if (!isset($_POST['appointment_nonce'])) {
    wp_die();
  }

  if (!wp_verify_nonce($_POST['appointment_nonce'], 'appointment_nonce')) {
    wp_die();
  }

  
});