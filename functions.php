<?php

function perftechlab_files() {
  wp_enqueue_script('uikit-js', 'https://cdnjs.cloudflare.com/ajax/libs/uikit/3.5.4/js/uikit.min.js', array('jquery'), true);
  wp_enqueue_script('uikit-icons', 'https://cdnjs.cloudflare.com/ajax/libs/uikit/3.5.4/js/uikit-icons.min.js');
  // wp_enqueue_script('custom-js', get_template_directory_uri() . '/js/custom.js', array(), '1.0.0', true);
  // wp_enqueue_script('bundled-js', get_template_directory_uri() . '/bundled.js', array(), '1.0.0', true);

  // wp_enqueue_style( 'site_main_css', get_template_directory_uri() . '/css/build/main.min.css' );
  wp_enqueue_style( 'site_main_css', get_template_directory_uri() . '/assets/css/styles.css' );
  wp_enqueue_script( 'site_main_js', get_template_directory_uri() . '/assets/js/main.js' , null , null , true );
  wp_enqueue_style('perftechlab_main_styles', get_stylesheet_uri());
  wp_localize_script('site_main_js', 'webrootData', array(
    'root_url' => get_site_url(),
  ));
}
add_action('wp_enqueue_scripts', 'perftechlab_files');


function perftechlab_features() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails', array('post', 'page', 'lab'));

}
add_action('after_setup_theme', 'perftechlab_features');
