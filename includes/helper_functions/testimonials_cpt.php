<?php

/**
 * Query all testimonials
 * Returns a markup string
 */
function get_all_testimonials() {

  $testimonials = get_posts(array(
    'posts_per_page' => -1,
    'post_type' => 'testimonials'
  ));

  $testimonials_markup = '';

  if (!empty($testimonials)) {

    foreach ($testimonials as $key => $testimonial) {

      if (!empty(get_the_post_thumbnail_url($testimonial->ID))) {
        $featured_img = get_the_post_thumbnail_url($testimonial->ID);
      } else {
        $featured_img = IMAGES_DIR .'/home/ico_person.png';
      }

      $testimonials_markup .=
      '<div class="client">
        <div class="pro_pic" style="background-image: url('. $featured_img .');"></div>
        <article>
          <p class="statement">'. $testimonial->post_content .'</p>
          <h2 class="name">'. $testimonial->post_title .'</h2>
          <p class="position">'. get_post_meta($testimonial->ID, '_company_position', true) .'</p>
        </article>
      </div>';
    }
  
    return $testimonials_markup;
  }
}