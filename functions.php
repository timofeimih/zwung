<?php

  include 'inc/assets.php';
  include 'inc/loadmore.php';

  if (function_exists('acf_add_options_page')) {
    $page = acf_add_options_page(array(
     'page_title' => 'Allgemeine Informationen',
     'menu_title' => 'Allgemeine',
     'menu_slug' => 'theme-general-settings',
     'capability' => 'edit_posts',
     'redirect' => false,
     'position' => 10
    ));
  }

  function cc_mime_types($mimes)
  {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
  }
  add_filter('upload_mimes', 'cc_mime_types');

  add_theme_support('post-thumbnails');

  register_nav_menus(array(
    'header_top' => 'header_top',
    'header_bottom' => 'header_bottom'
  ));

  add_theme_support('html5', array('search-form'));

  add_filter('excerpt_length', function () {
    return 40;
  });
  add_filter('excerpt_more', function ($more) {
    return '...';
  });

add_theme_support( 'custom-logo', array(
    'flex-height' => true,
    'flex-width'  => true,
) );

add_filter( 'get_custom_logo', 'change_logo_class' );


function change_logo_class( $html ) {

    $html = str_replace( 'custom-logo-link', 'logo', $html );

    return $html;
}

add_filter('show_admin_bar', '__return_false');


require_once('inc/SimpleXLSXGen.php');

function custom_wpcf7_mail_components($components)
{
    //Get current form
    $wpcf7 = WPCF7_ContactForm::get_current();
    $attachment_file_path = '';
    //check the relevant form id
    if ($wpcf7->id == '40') {
        // get current SUBMISSION instance
        $submission = WPCF7_Submission::get_instance();
        if ($submission) {
          // get submission data
          $form_data = $submission->get_posted_data();
          // setup upload directory
          $upload_dir = wp_upload_dir();
          $attachment_file_path = $upload_dir['basedir'] . '/contact_form/contact_form_' . time() . '.xlsx';
          
          $contact_form = [
            ['Name', 'Firma', 'Betreff', 'Nachricht'],
            [$form_data['Name'], $form_data['Firma'], $form_data['Betreff'], $form_data['Nachricht']],
          ];

          $xlsx = SimpleXLSXGen::fromArray( $contact_form );

          if( $xlsx->saveAs($attachment_file_path)){
            //append new file to mail attachments
            $components['attachments'][] = $attachment_file_path;
          }
            
        }
    }
    return $components;
}

add_filter('wpcf7_mail_components', 'custom_wpcf7_mail_components');

