<?php

add_action('customize_register', function($wp_customize) {
  include_once 'home.php';
  include_once 'social.php';
});