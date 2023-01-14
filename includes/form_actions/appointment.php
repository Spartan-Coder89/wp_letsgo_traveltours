<?php

add_action('admin_post_nopriv_appointment', 'set_appointment');
add_action('admin_post_appointment', 'set_appointment');

function set_appointment() {

  if (!isset($_POST['appointment_nonce'])) {
    return;
  }

  if (!wp_verify_nonce($_POST['appointment_nonce'], 'appointment_nonce')) {
    return;
  }

  if ($_POST['meeting_date']) {
    $meeting_date = htmlspecialchars(strip_tags($_POST['meeting_date']));
  }

  if ($_POST['meeting_time']) {
    $meeting_time = htmlspecialchars(strip_tags($_POST['meeting_time']));
  }

  if ($_POST['fname']) {
    $fname = htmlspecialchars(strip_tags($_POST['fname']));
  }

  if ($_POST['lname']) {
    $lname = htmlspecialchars(strip_tags($_POST['lname']));
  }

  if ($_POST['email']) {
    $email = htmlspecialchars(strip_tags($_POST['email']));
  }

  if ($_POST['tel']) {
    $tel = htmlspecialchars(strip_tags($_POST['tel']));
  }

  $to = get_option('admin_email');
  $subject = $fname .' set and appointment';
  $headers = array('Content-Type: text/html; charset=UTF-8');

  $body = 
  '<div style="background-color: #ececec; width: 100%; height: 100%; padding: 50px 20px;">
    <table style="width: 600px; margin: 0 auto;">
      <thead>
          <tr style="border: 0; background-color: #fff;">
            <td style="padding: 30px 10px 20px 10px; text-align: center;" colspan="2">
              <img style="width:100%; max-width:180px;" src="'. wp_get_attachment_image_url(get_theme_mod('letsgo_header_logo_white_setting')) .'" />
            </td>
          </tr>
      </thead>
      <tbody>
        <tr style="background-color: #fff;">
          <td style="padding: 20px;" colspan="2">
            Hi admin, someone submitted their entries on contact form.
            Please see details below:
          </td>
        </tr>
        <tr style="background-color: #fff;">
          <td style="padding: 10px 20px;">Meeting Date:</td>
          <td style="padding: 10px 10px;">'. $meeting_date .'</td>
        </tr>
        <tr style="background-color: #fff;">
          <td style="padding: 10px 20px;">Meeting Time:</td>
          <td style="padding: 10px 10px;">'. $meeting_time .'</td>
        </tr>
        <tr style="background-color: #fff;">
          <td style="padding: 10px 20px; width: 200px;">Full Name:</td>
          <td style="padding: 10px 10px;">'. $fname .' '. $lname .'</td>
        </tr>
        <tr style="background-color: #fff;">
          <td style="padding: 10px 20px;">Email Address:</td>
          <td style="padding: 10px 10px;">'. $email .'</td>
        </tr>
        <tr style="background-color: #fff;">
          <td style="padding: 10px 20px;">Contact Number:</td>
          <td style="padding: 10px 10px;">'. $tel .'</td>
        </tr>
      </tbody>
      <tfoot>
        <tr>
          <td style="text-align: center; padding: 10px; font-size: 12px; background: #FF9F1C; color: #fff;" colspan="2">'. get_bloginfo('name') .' - '. date('Y') .'</td>
        </tr>
      </tfoot>
    </table>
  </div>';

  if (wp_mail( $to, $subject, $body, $headers )) {
    wp_safe_redirect(get_site_url() .'/booking?prompt='. urlencode('Your message has been successfully sent. We will get in touch with you as soon as possible.'));
    exit;
  } else {
    wp_safe_redirect(get_site_url() .'/booking?error='. urlencode('Something went wrong with your appointment setting.'));
    exit;
  }

}