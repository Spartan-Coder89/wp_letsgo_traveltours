<?php get_header(); ?>

<main>
  <?php get_template_part('/temp_parts/inner_page_banner'); ?>

  <section id="booking_page_wrap">
    <h2>Set an appointment with us so we could start your booking process</h2>
    <form id="booking_form" class="booking_form" action="<?php echo admin_url('admin-post.php'); ?>" method="POST">
      <div class="date_time">
        <div class="form_control date">
          <label>Choose your prefered date:</label>
          <input type="date" name="meeting_date">
        </div>
        <div class="form_control time">
          <label>Choose your prefered time:</label>
          <select name="meeting_time">
            <option>2:00 PM - 3:00 PM</option>
            <option>3:00 PM - 4:00 PM</option>
            <option>4:00 PM - 5:00 PM</option>
          </select>
        </div>
      </div>
      <div class="form_control">
        <label>First name:</label>
        <input type="text" name="fname">
      </div>
      <div class="form_control">
        <label>Last name:</label>
        <input type="text" name="lname">
      </div>
      <div class="form_control">
        <label>Email Address:</label>
        <input type="text" name="email">
      </div>
      <div class="form_control">
        <label>Contact number:</label>
        <input type="tel" name="tel">
      </div>
      <input type="hidden" name="appointment_nonce" value="<?php echo wp_create_nonce('appointment_nonce'); ?>">
      <input type="hidden" name="action" value="appointment">
    </form>
    <div class="booking_conditions">
      <h2>Booking Conditions</h2>
      <ul class="conditions_list">
        <li>
          <span>
            Praesent sed ligula in sem viverra imperdiet. Donec pharetra lorem ac cursus fringilla. 
            Integer vitae commodo justo, eget malesuada libero. Aenean et leo vitae ipsum tempor elementum vel ac dui.
          </span>
        </li>
        <li>
          <span>
            Praesent sed ligula in sem viverra imperdiet. Donec pharetra lorem ac cursus fringilla. 
            Integer vitae commodo justo, eget malesuada libero.
          </span>
        </li>
        <li>
          <span>
            Praesent sed ligula in sem viverra imperdiet. Donec pharetra lorem ac cursus fringilla. 
            Integer vitae commodo justo, eget malesuada libero. Aenean et leo vitae ipsum tempor elementum vel ac dui.
          </span>
        </li>
        <li>
          <span>
            Praesent sed ligula in sem viverra imperdiet. Donec pharetra lorem ac cursus fringilla. 
            Integer vitae commodo justo, eget malesuada libero.
          </span>
        </li>
      </ul>
      <div class="agree">
        <input id="agree" type="checkbox">
        <p>I AGREE TO THE BOOKING CONDITIONS</p>
      </div>
      <button class="submit" form="booking_form">Send Message</button>
    </div>
  </section>
</main>

<?php get_footer(); ?>