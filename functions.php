<?php
if ( ! function_exists( 'wednesday_setup' ) ) :

function wednesday_setup() {
  add_theme_support('title-tag');
  add_theme_support( 'post-thumbnails' );

  // Stylesheets
  wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/vendor/bootstrap/css/bootstrap.min.css',false,'3.3.7','all');
  wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/vendor/font-awesome/css/font-awesome.min.css',false,'4.6.3','all');
  wp_enqueue_style( 'lora', get_template_directory_uri() . 'https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic',false,'1.0.0','all');
  wp_enqueue_style( 'open-sans', get_template_directory_uri() . 'https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800',false,'1.0.0','all');

  wp_enqueue_style( 'clean-blog', get_template_directory_uri() . '/css/clean-blog.min.css',array('bootstrap'),'3.3.7','all');
}

endif;

add_action( 'after_setup_theme', 'wednesday_setup' );
?>
