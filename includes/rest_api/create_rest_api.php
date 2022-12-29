<?php

/**
 * Data to get
 * 
 * GET
 * 1. Customizers
 *  1.1 Common
 *    a. Header
 *      - Logo transparent background
 *      - Logo white background
 *    b. Footer
 *      - Footer logo
 *      - Company short description
 *    c. Contact
 *      - Phone number
 *      - Email address
 *  1.2 Homepage
 *    a. Banner section
 *      - Banner background
 *      - Banner headline
 *      - Banner subheadline
 *    b. Below banner
 *      - Below banner image
 *      - Below banner headline
 *      - Below banner description
 *    c. Assurance section
 *      - Assurance icon 1
 *      - Assurance headline 1
 *      - Assurance description 1
 *      - Assurance icon 2
 *      - Assurance headline 2
 *      - Assurance description 2
 *      - Assurance icon 3
 *      - Assurance headline 3
 *      - Assurance description 3
 *    d. Around the world
 *      - Around the world headline
 *      - Around the world description
 *   1.3 About us
 *    a. Mission, Vision and History
 *      - Mission
 *      - Vision
 *      - History
 *    b. Images
 *      - Banner image
 *      - Image 1
 *      - Image 2
 *      - Image 3
 *   1.4 Social
 *    a. Facebook link
 *    b. Twitter link
 *    c. Youtube link
 *    d. Instagram link
 * 
 * 2. Destinations
 *  2.1 Destinations archive
 *  2.1 Single destinations page
 *  
 * 3. Posts
 *  3.1 Blog archive
 *  3.2 Single post page
 * 
 * POST
 * 1. Contact form
 * 2. Appointment form
 */

add_action('rest_api_init', function() {
  include_once 'customizer/common.php';
  include_once 'customizer/homepage.php';
  include_once 'customizer/about_us.php';
  include_once 'customizer/social.php';
  include_once 'destinations/archive.php';
  include_once 'destinations/single_destination.php';
  include_once 'blog/archive.php';
  include_once 'blog/single_post.php';
  include_once 'form_actions/contact_us.php';
  include_once 'form_actions/appointment.php';
});