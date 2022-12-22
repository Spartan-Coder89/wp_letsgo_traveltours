<?php get_header(); ?>

<main>
  <?php get_template_part('/temp_parts/inner_page_banner'); ?>

  <div class="main_wrap">
    <div id="destination_list">

      <?php 
        $destinations_query = new WP_Query(array(
          'posts_per_page' => 12,
          'post_type' => 'destinations',
          'paged' => get_query_var('paged') ? get_query_var('paged') : 1
        ));

        if ($destinations_query->have_posts()) {

          while ($destinations_query->have_posts()) {
            
            $destinations_query->the_post();
            $general_details = get_post_meta(get_the_id(), '_general_details', true);

            echo
            '<div class="destination" style="background-image: url('. get_the_post_thumbnail_url() .');">
              <a href="'. get_the_permalink() .'" class="permalink">
                <div class="overlay"></div>
                <article>
                  <p class="starting_price">'. get_post_meta($post->ID, '_starting_price', true) .'</p>
                  <h2 class="destination_name">'. get_the_title() .'</h2>
                  <p class="location">'. $general_details['location'] .'</p>
                </article>
              </a>
            </div>';
          }

        }

        wp_reset_postdata();
      ?>
    </div>
    
    <div id="pagination">
      <?php prev_pagination(get_query_var('paged'), get_site_url() .'/destinations'); ?>
      <div class="page_list">
        <?php post_pagination($destinations_query->max_num_pages, get_query_var('paged'), get_site_url() .'/destinations'); ?>
      </div>
      <?php next_pagination(get_query_var('paged'), $destinations_query->max_num_pages, get_site_url() .'/destinations'); ?>
    </div>

  </div>
</main>

<?php get_footer(); ?>