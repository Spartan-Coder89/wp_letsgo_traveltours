<?php

/**
 * Outputs post meta on destinations post's
 * general details
 */
function destination_general_details_meta($post_id) {
  
  $general_details = get_post_meta($post_id, '_general_details', true);

  $location = !empty($general_details['location']) ? $general_details['location'] : '';
  $flight = !empty($general_details['flight']) ? $general_details['flight'] : '';
  $board_and_lodging = !empty($general_details['board_and_lodging']) ? $general_details['board_and_lodging'] : '';
  $meals = !empty($general_details['meals']) ? $general_details['meals'] : '';
  $tour_guide = !empty($general_details['tour_guide']) ? $general_details['tour_guide'] : '';
  $visa = !empty($general_details['visa']) ? $general_details['visa'] : '';
  
  echo
  '<div class="input_fields">
    <label>Location:</label>
    <input type="text" name="general_details[location]" value="'. $location .'">
  </div>';

  echo
  '<div class="input_fields">
    <label>Flight:</label>
    <input type="text" name="general_details[flight]" value="'. $flight .'">
  </div>';

  echo
  '<div class="input_fields">
    <label>Board and Lodging::</label>
    <input type="text" name="general_details[board_and_lodging]" value="'. $board_and_lodging .'">
  </div>';

  echo
  '<div class="input_fields">
    <label>Meals:</label>
    <input type="text" name="general_details[meals]" value="'. $meals .'">
  </div>';

  echo
  '<div class="input_fields">
    <label>Tour Guide:</label>
    <input type="text" name="general_details[tour_guide]" value="'. $tour_guide .'">
  </div>';

  echo
  '<div class="input_fields">
    <label>Visa:</label>
    <input type="text" name="general_details[visa]" value="'. $visa .'">
  </div>';
}

/**
 * Outputs post meta on destinations post's
 * key highlights
 */
function destination_key_highlights_meta($post_id) {
  
  $key_highlights = get_post_meta($post_id, '_key_highlights', true);

  if (!empty($key_highlights)) {
    foreach ($key_highlights as $key => $value) {
      echo 
      '<div class="input_fields">
        <p>'. $value .'</p>
        <input type="hidden" name="key_highlights[]" value="'. $value .'">
        <button class="remove_list_item" type="button">Remove</button>
      </div>';
    }
  }
}

/**
 * Outputs itenerary tab on destinations post's
 * itenerary list
 */
function itenerary_days_tabs($post_id) {

  $itenerary = get_post_meta($post_id, '_itenerary', true);

  if (!empty($itenerary)) {
    foreach ($itenerary as $day => $list) {
      echo '<div class="day" data-day="'. $day .'">Day '. $day .'</div>';
    }
  }
}

/**
 * Outputs post meta on destinations post's
 * itenerary list
 */
function destination_itenerary_meta($post_id) {
  
  $itenerary = get_post_meta($post_id, '_itenerary', true);

  if (!empty($itenerary)) {
    foreach ($itenerary as $day => $list) {
      
      $show_class = $day == 1 ? 'show' : '';

      echo 
      '<div id="itenerary_'. $day .'" class="fields_wrap '. $show_class .'">
        <div id="itenerary_list_'. $day .'" class="inputs">';

        foreach ($list as $list_key => $list_value) {
          echo 
          '<div class="input_fields">
            <p>'. $list_value .'</p>
            <input type="hidden" name="itenerary['. $day .'][]" value="'. $list_value .'">
            <button class="remove_list_item" type="button">Remove</button>
          </div>';
        }

        echo   
        '</div>
        <div class="add_item_box">
          <textarea id="itenerary_item_content_'. $day .'"></textarea>
          <button class="itenerary_add_item add_item" type="button" data-day="'. $day .'">Add New Item</button>
        </div>
      </div>';
    }
  }
}

/**
 * Outputs best features meta on destinations post's
 * itenerary list
 */
function best_features_meta($post_id) {

  $best_features = get_post_meta($post_id, '_best_features', true);

  if (!empty($best_features)) {
    foreach ($best_features as $key => $value) {
      echo 
      '<div class="input_fields">
        <p>'. $value .'</p>
        <input type="hidden" name="best_features[]" value="'. $value .'">
        <button class="remove_list_item" type="button">Remove</button>
      </div>';
    }
  }
}

/**
 * Get featured destination details
 */
function featured_destination_details() {

  $destinations = get_posts(array(
    'posts_per_page' => 1,
    'post_type' => 'destinations',
    'meta_key' => '_is_featured',
    'meta_value' => true
  ));

  $best_features = get_post_meta($destinations[0]->ID, '_best_features', true);
  $best_features_markup = '';
  if (!empty($best_features)) {
    foreach ($best_features as $key => $feature) {
      $best_features_markup .= '<li><span class="bullets"></span><span>'. $feature .'</span></li>';
    }
  }

  if (!empty(get_the_post_thumbnail_url($destinations[0]->ID))) {
    $featured_img = get_the_post_thumbnail_url($destinations[0]->ID);
  } else {
    $featured_img = IMAGES_DIR .'/img_placeholder.jpg';
  }

  return array(
    'post_title' => $destinations[0]->post_title,
    'post_content' => $destinations[0]->post_content,
    'featured_img' => $featured_img,
    'best_features' => $best_features_markup
  );
}

/**
 * Output media uploader markup
 */
function output_video_uploader_markup($post_id) {
  
  $image_id = get_post_meta($post_id, '_video_attachment', true);

  if (!empty($image_id))  {

    $image = wp_get_attachment_url($image_id, 'medium');

    echo
    '<a href="#" class="video_upload">
      <video controls>
        <source src="'. esc_url($image) .'" type="video/mp4">
        <source src="'. esc_url($image) .'" type="video/ogg">
      </video>
    </a>
    <a href="#" class="video_remove">Remove image</a>
    <input type="hidden" name="video_attachment" value="'. absint($image_id) .'">';

  } else {

    echo
    '<div type="button" class="button video_upload">Upload Video</div>
    <a href="#" class="video_remove" style="display:none">Remove image</a>
    <input type="hidden" name="video_attachment" value="">';
  }

}

/**
 * Query all destinations
 * Returns a markup string
 */
function get_all_destinations() {

  $destinations = get_posts(array(
    'posts_per_page' => -1,
    'post_type' => 'destinations'
  ));

  $destinations_markup = '';
  foreach ($destinations as $key => $destination) {

    if (!empty(get_the_post_thumbnail_url($destination->ID))) {
      $featured_img = get_the_post_thumbnail_url($destination->ID);
    } else {
      $featured_img = IMAGES_DIR .'/img_placeholder.jpg';
    }

    $destinations_markup .=
    '<article class="destination">
      <div class="featured_img" style="background-image: url('. $featured_img .');">
        <div class="overlay">
          <a href="'. get_the_permalink($destination->ID) .'">READ MORE</a>
        </div>
      </div>
      <h2 class="title">'. $destination->post_title .'</h2>
      <p>'. get_post_meta($destination->ID, '_general_details', true)['location'] .'</p>
    </article>';
  }

  return $destinations_markup;
}