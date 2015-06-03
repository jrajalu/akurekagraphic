<?php
/**
 * @package AkuRekaGraphic
 * @author Jamaludin Rajalu
 * @version 1.0.0
 * 
 */
add_action( 'after_setup_theme', 'argcom_theme_setup' );

  function argcom_theme_setup() {
    
    add_theme_support( 'title-tag' );
    
    add_filter( 'show_admin_bar', '__return_false' );
    
  }
  
add_action( 'wp_enqueue_scripts', 'argcom_theme_scripts' );

  function argcom_theme_scripts() {
    
    wp_deregister_script( 'jquery' );
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/lib/jquery/jquery.min.js', array(), '2.1.4', false );
    // Theme Javascripts
    wp_enqueue_script( 'uikit', get_template_directory_uri() . '/lib/uikit/js/uikit.min.js', array(), '2.21.0', true );
    // Theme Stylesheet
    wp_enqueue_style( 'uikit', get_template_directory_uri() . '/lib/uikit/css/uikit.almost-flat.min.css', array(), '2.21.0' );
    wp_enqueue_style( 'theme', get_stylesheet_uri(), array(), '1.0.0' );
    
  }
  
add_action( 'widgets_init', 'argcom_theme_widgets' );
  
  function argcom_theme_widgets() {

    register_sidebar( array(
      'name'          => 'Main Sidebar',
      'id'            => 'sidebar-1',
      'description'   => 'Main sidebar for pages',
      'before_title'  => '<h2>',
      'after_title'   => '</h2>',
      'before_widget' => '<div>',
      'after_widget'  => '</div>'
    ) );
  }