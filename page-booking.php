<?php get_header(); ?>

<main>
  <?php get_template_part('/temp_parts/inner_page_banner'); ?>

  <section id="booking_page_wrap">
    <h2>Set an appointment with us so we could start your booking process</h2>
    <p class="note">Fields marked with <span class="required">*</span> are required</p>
    <form id="booking_form" class="booking_form" action="<?php echo admin_url('admin-post.php'); ?>" method="POST">
      <div class="date_time">
        <div class="form_control date fade_in_upwards">
          <label>Choose your prefered date: <span class="required">*</span> </label>
          <input type="date" name="meeting_date" id="meeting_date" class="check_input_change">
        </div>
        <div class="form_control time fade_in_upwards">
          <label>Choose your prefered time: <span class="required">*</span></label>
          <select name="meeting_time" id="meeting_time" class="check_input_change">
            <option value="2:00PM-3:00PM">2:00 PM - 3:00 PM</option>
            <option value="3:00PM-4:00PM">3:00 PM - 4:00 PM</option>
            <option value="4:00PM-5:00PM">4:00 PM - 5:00 PM</option>
          </select>
        </div>
      </div>
      <div class="form_control fade_in_upwards">
        <label>First name: <span class="required">*</span></label>
        <input type="text" name="fname" id="fname" class="check_input">
      </div>
      <div class="form_control fade_in_upwards">
        <label>Last name:</label>
        <input type="text" name="lname">
      </div>
      <div class="form_control fade_in_upwards">
        <label>Email Address: <span class="required">*</span></label>
        <input type="text" name="email" id="email" class="check_input">
      </div>
      <div class="form_control fade_in_upwards">
        <label>Contact number:</label>
        <input type="tel" name="tel">
      </div>
      <input type="hidden" name="appointment_nonce" value="<?php echo wp_create_nonce('appointment_nonce'); ?>">
      <input type="hidden" name="action" value="appointment">
    </form>
    <div class="booking_conditions fade_in">
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
      <div class="agree fade_in_upwards">
        <input type="checkbox" id="agree" class="check_input_change">
        <p>I AGREE TO THE BOOKING CONDITIONS</p>
      </div>
      <button id="submit" class="submit fade_in_upwards" form="booking_form" disabled>Send Message</button>
    </div>
  </section>
</main>

<?php get_footer(); ?>