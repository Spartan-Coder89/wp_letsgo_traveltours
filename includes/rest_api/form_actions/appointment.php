<?php

function form_action_appointment() {

  register_rest_route('form-actions/v1', '/appointment', array(
    'methods' => 'POST',
    'callback' => 'form_action_appointment_callback',
    'permission_callback' => '__return_true'
  ));

  function form_action_appointment_callback( WP_REST_Request $request ) {

    $response = array();

    $meeting_date = !empty($request['meeting_date']) ? $request['meeting_date'] : '';
    $meeting_time = !empty($request['meeting_time']) ? $request['meeting_time'] : '';
    $fname = !empty($request['fname']) ? $request['fname'] : '';
    $lname = !empty($request['lname']) ? $request['lname'] : '';
    $email = !empty($request['email']) ? $request['email'] : '';
    $tel = !empty($request['tel']) ? $request['tel'] : ''; 

    if (empty($meeting_date) || empty($meeting_time) || empty($fname) || empty($email) || empty($message)) {
      $response['error'] = 'First name, email and message is required';
    } else {

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
        $response['success'] = 'Message sent successfully';
      } else {
        $response['error'] = 'First name, email and message is required';
      }

    }

    return $response;
  }
}

form_action_appointment();