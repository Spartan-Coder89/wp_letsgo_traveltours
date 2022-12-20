<?php

function letsgo_create_destinations_metabox() {

  add_meta_box(
    'meta_details',
    'Meta Details',
    'letsgo_create_destinations_metabox_callback',
    'destinations', 
    'normal'
  );

  function letsgo_create_destinations_metabox_callback($post) { ?>

    <div id="meta_details_wrap">

      <div id="is_featured" class="content_box">
        <?php $is_featured_checked = get_post_meta($post->ID, '_is_featured', true) ? 'checked' : ''; ?>
        <input type="checkbox" name="is_featured" <?php echo $is_featured_checked; ?>>
        <p>Is Featured</p>
      </div>

      <div id="starting_price" class="content_box">
        <div class="input_fields">
          <p>Starting Price</p>
          <input type="text" name="starting_price" value="<?php echo get_post_meta($post->ID, '_starting_price', true); ?>">
        </div>
      </div>
      
      <div id="general_details" class="content_box">
        <h2>General Details</h2>
        <div id="general_details_list_container" class="fields_wrap">
          <?php destination_general_details_meta($post->ID); ?>
        </div>
      </div>

      <div id="key_highlights" class="content_box">
        <h2>Key Highlights</h2>
        <div id="key_highlights_list_container" class="fields_wrap">
          <?php destination_key_highlights_meta($post->ID); ?>
        </div>
        <div class="add_item_box">
          <textarea id="key_highlights_item_content" name=""></textarea>
          <button id="key_highlights_add_item" class="add_item" type="button">Add New Item</button>
        </div>
      </div>

      <div id="itenerary" class="content_box">
        <h2>Itenerary</h2>
        <div class="tabs">
          <div id="tabs_container" class="tabs_container">
            <?php itenerary_days_tabs($post->ID); ?>
          </div>
          <button id="minus_tab" type="button">-</button>
          <button id="new_tab" type="button">+</button>
        </div>
        <div id="itenerary_list_container" class="list_container">
          <?php destination_itenerary_meta($post->ID); ?>
        </div>
      </div>

      <div id="best_features" class="content_box">
        <h2>Best Features</h2>
        <div id="best_features_list_container" class="fields_wrap">
          <?php best_features_meta($post->ID); ?>
        </div>
        <div class="add_item_box">
          <textarea id="best_features_item_content" name=""></textarea>
          <button id="best_features_add_item" class="add_item" type="button">Add New Item</button>
        </div>
      </div>
    </div>

    <input type="hidden" name="destinations_post_nonce" value="<?php echo wp_create_nonce('destinations_post_nonce'); ?>">
  <?php  
  }
}

letsgo_create_destinations_metabox();