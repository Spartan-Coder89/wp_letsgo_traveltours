<?php

add_action('customize_register', function($wp_customize) {
  include_once 'home.php';
  include_once 'about_us.php';
  include_once 'social.php';
  include_once 'common.php';
});