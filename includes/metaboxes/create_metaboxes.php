<?php 

add_action( 'add_meta_boxes', function() {
  include_once 'destinations_metabox.php';
  include_once 'testimonials_metabox.php';
});