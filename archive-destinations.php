<?php get_header(); ?>

<main>
  <?php get_template_part('/temp_parts/inner_page_banner'); ?>

  <div class="main_wrap">
    <div id="destination_list">

    <?php 
        $destinations_query = new WP_Query(array(
          'posts_per_page' => 12,
          'post_type' => 'destinations'
        ));

        if ($destinations_query->have_posts()) {

          while ($destinations_query->have_posts()) {
            
            $destinations_query->the_post();
            $general_details = get_post_meta(get_the_id(), '_general_details', true);

            echo
            '<div class="destination" style="background-image: url('. get_the_post_thumbnail_url() .');">
              <div class="overlay"></div>
              <article>
                <p class="starting_price">From USD 450/Person</p>
                <h2 class="destination_name">'. get_the_title() .'</h2>
                <p class="location">'. $general_details['location'] .'</p>
              </article>
            </div>';
          }

        } else {
          // no posts found
        }

        wp_reset_postdata();
      ?>
    </div>

    <div id="pagination" >
      <div class="prev">
        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M18.25 22.5L20 20.75L14.25 15L20 9.25L18.25 7.5L10.75 15L18.25 22.5Z" fill="#131313"/>
        </svg>
      </div>
      <div class="page_list">
        <div class="active">1</div>
        <div>2</div>
        <div>3</div>
        <div>4</div>
        <div>5</div>
        <div>6</div>
        <div>7</div>
        <div>8</div>
      </div>
      <div class="next">
        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M11.75 22.5L10 20.75L15.75 15L10 9.25L11.75 7.5L19.25 15L11.75 22.5Z" fill="#131313"/>
        </svg>
      </div>
    </div>
  </div>
</main>

<?php get_footer(); ?>