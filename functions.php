<?php

/**
 * Do not change anything until you know what you're doing
 */


function enqueue_custom_styles()
{
      wp_enqueue_style('vendors', get_template_directory_uri() . '/assets/css/vendors.min.css');
      wp_enqueue_style('icon', get_template_directory_uri() . '/assets/css/icon.min.css');
      wp_enqueue_style('main-style', get_template_directory_uri() . '/assets/css/style.css');
      wp_enqueue_style('responsive', get_template_directory_uri() . '/assets/css/responsive.css');
      wp_enqueue_style('data-analysis', get_template_directory_uri() . '/assets/css/it-business.css');
}
add_action('wp_enqueue_scripts', 'enqueue_custom_styles');

function enqueue_custom_scripts()
{
      wp_enqueue_script('jquery');
}
add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');

function theme_enqueue_scripts()
{
      wp_enqueue_script('jquery');
}
add_action('wp_enqueue_scripts', 'theme_enqueue_scripts');


function enqueue_ninja_forms_scripts()
{
      wp_enqueue_script('ninja-forms', plugins_url('/assets/js/min/ninja-forms-display.min.js', 'ninja-forms/ninja-forms.php'), array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_ninja_forms_scripts');


add_action('wp_ajax_contact_form_submit', 'handle_contact_form_submission');
add_action('wp_ajax_nopriv_contact_form_submit', 'handle_contact_form_submission');

function handle_contact_form_submission()
{

      $name = isset($_POST['name']) ? sanitize_text_field($_POST['name']) : null;
      $email = isset($_POST['email']) ? sanitize_email($_POST['email']) : null;
      $comment = isset($_POST['comment']) ? sanitize_text_field($_POST['comment']) : null;
      $phone = isset($_POST['phone']) ? ($_POST['phone']) : null;
      $formSubject = isset($_POST['subject']) ? sanitize_text_field($_POST['subject']) : null;
      $type = isset($_POST['service_type']) ? sanitize_text_field($_POST['service_type']) : null;

      if (empty($name) || empty($email) || empty($comment)) {
            echo "All fields are required !";
            exit;
      }

      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Invalid email address.";
            wp_die();
      }

      $table_name = 'wp_contact_us';
      global $wpdb;
      try {

            $mail = send_company_mail($name, $email, $comment, $phone, $formSubject, $type);
            $user_mail = send_user_mail($name, $email, $comment);

            $send_mail_status = $mail ? 1 : 0;
            $return_mail_status = $user_mail ? 1 : 0;

            if (empty($type)) {
                  $inserted = $wpdb->insert($table_name, array(
                        'name' => $name,
                        'email' => $email,
                        'comment' => $comment,
                        'send_mail' => $send_mail_status,
                        'return_mail' => $return_mail_status
                  ));
            } else {
                  $inserted = $wpdb->insert($table_name, array(
                        'name' => $name,
                        'email' => $email,
                        'comment' => $comment,
                        'phone' => $phone,
                        'subject' => $formSubject,
                        'service_type' => $type,
                        'send_mail' => $send_mail_status,
                        'return_mail' => $return_mail_status
                  ));
            }


            if ($inserted) {
                  echo "Your message has been sent successfully";
            } else {
                  error_log("Failed to submit data. WPDB error: " . $wpdb->last_error);
                  echo "Failed to submit data." . $wpdb->last_error;
            }
      } catch (Exception $e) {
            error_log("Exception caught: " . $e->getMessage());
            echo "An error occurred while submitting the data.";
      }

      wp_die();
}

function send_company_mail($name, $email, $comment, $phone, $formSubject, $type)
{

      if (empty($email)) {
            echo "Email Required !";
            exit;
      }

      if (!is_email($email)) {
            wp_send_json_error(array('message' => 'Invalid email address.'));
      }

      ob_start();
      include(get_template_directory() . '/mail-structure/company-email-structure.php');
      $message = ob_get_clean();

      $to = 'info@concepteurit.com';
      $subject = 'New Contact Form Submission';

      $headers = array('Content-Type: text/html; charset=UTF-8', 'From: ' . $name . ' <' . $email . '>');

      $mail = wp_mail($to, $subject, $message, $headers);

      if ($mail) {
            return true;
      } else {
            return false;
      }

      wp_die();
}

function send_user_mail($name, $email, $comment)
{
      if (empty($email)) {
            echo "Email Required !";
            exit;
      }

      if (!is_email($email)) {
            wp_send_json_error(array('message' => 'Invalid email address.'));
      }

      ob_start();
      include(get_template_directory() . '/mail-structure/email-structure.php');
      $to = $email;
      $subject = 'Thank You for Your Message – We Appreciate Your Inquiry!';
      $headers = array('Content-Type: text/html; charset=UTF-8', 'From: letsampit@gmail.com');
      $message = ob_get_clean();

      $mail = wp_mail($to, $subject, $message, $headers);

      if ($mail) {
            return true;
      } else {
            return false;
      }

      wp_die();
}

function my_custom_menu()
{
      register_nav_menu('my_custom_menu', __('My Custom Menu'));
}
add_action('init', 'my_custom_menu');

function enqueue_kanit_font()
{
      wp_enqueue_style('kanit-google-font', 'https://fonts.googleapis.com/css2?family=Kanit:wght@400;500;600;700&display=swap', array(), null);
}
add_action('wp_enqueue_scripts', 'enqueue_kanit_font');


add_filter('theme_page_templates', function ($templates) {
      // Define folders to scan for templates
      $folders = [
            'templates/company',
            'templates/portfolio',
            'templates/blog',
            'templates/services',
            'templates/technologies',
      ];

      foreach ($folders as $folder) {
            $folder_path = get_stylesheet_directory() . '/' . $folder;

            if (is_dir($folder_path)) {
                  // Scan for PHP files in the folder
                  $files = glob($folder_path . '/*.php');

                  foreach ($files as $file) {
                        $file_name = basename($file); // Extract file name
                        $template_key = $folder . '/' . $file_name; // Template path key
                        $template_name = ucwords(str_replace(['-', '_'], ' ', pathinfo($file_name, PATHINFO_FILENAME))); // Human-readable name

                        // Add to templates array
                        $templates[$template_key] = $template_name;
                  }
            }
      }

      return $templates;
});
