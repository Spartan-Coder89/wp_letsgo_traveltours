<?php

/**
 * Receives nav menu name as parameter
 * Outputs the the menu items in html format
 */
function output_menu($menu_name) {

  if (!empty(wp_get_nav_menu_object($menu_name))) {

    $main_nav_menu = wp_get_nav_menu_object($menu_name);
    $main_nav_menu_items = wp_get_nav_menu_items($main_nav_menu);

    foreach ($main_nav_menu_items as $menu_item) {
      echo '<a href="'. $menu_item->url .'">'. $menu_item->post_title .'</a>';
    }
  }
}

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