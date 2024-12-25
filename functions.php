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

function handle_form_submission()
{
      if (isset($_POST['name']) && isset($_POST['email'])) {
            $name = sanitize_text_field($_POST['name']);
            $email = sanitize_email($_POST['email']);
            $appointment = sanitize_text_field($_POST['appointment']);
            $comment = sanitize_textarea_field($_POST['comment']);

            if (isset($_FILES['uploadedFile']) && $_FILES['uploadedFile']['error'] == 0) {
                  $uploaded_file = $_FILES['uploadedFile'];
                  $upload_dir = wp_upload_dir();
                  $upload_path = $upload_dir['path'] . '/' . basename($uploaded_file['name']);
                  move_uploaded_file($uploaded_file['tmp_name'], $upload_path);
            }

            $to = 'your-email@example.com';
            $subject = 'New Contact Form Submission';
            $message = "Name: $name\nEmail: $email\nAppointment: $appointment\nMessage: $comment";
            send_company_mail($name, $email, $comment);
            $headers = array('Content-Type: text/plain; charset=UTF-8');
            if (isset($upload_path)) {
                  $attachments = array($upload_path);
            } else {
                  $attachments = array();
            }
            wp_mail($to, $subject, $message, $headers, $attachments);
            wp_send_json_success('Message sent successfully');
      } else {
            wp_send_json_error('Missing required fields');
      }
}
add_action('wp_ajax_handle_form_submission', 'handle_form_submission');
add_action('wp_ajax_nopriv_handle_form_submission', 'handle_form_submission');


function send_company_mail($name, $email, $comment)
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


function custom_post_types()
{
      // Register "Language" Post Type
      register_post_type('language', [
            'labels' => [
                  'name' => 'Languages',
                  'singular_name' => 'Language',
                  'add_new' => 'Add New Language',
                  'add_new_item' => 'Add New Language',
                  'edit_item' => 'Edit Language',
                  'new_item' => 'New Language',
                  'view_item' => 'View Language',
                  'search_items' => 'Search Languages',
                  'not_found' => 'No languages found',
                  'not_found_in_trash' => 'No languages found in trash',
                  'all_items' => 'All Languages',
            ],
            'public' => true,               // Make the post type visible on the front end
            'has_archive' => true,          // Enable archive pages (e.g., example.com/languages)
            'rewrite' => ['slug' => 'languages'], // URL slug
            'supports' => ['title', 'editor', 'thumbnail', 'excerpt', 'comments'],
            'show_in_rest' => true,         // Enables support for the block editor and REST API
            'menu_icon' => 'dashicons-translation',
      ]);
}
add_action('init', 'custom_post_types');
