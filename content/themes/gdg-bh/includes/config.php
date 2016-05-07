<?php
date_default_timezone_set('UTF-3');


/**
*
* Custom Scripts
*
**/
function gdg_custom_scripts()
{
  if ( !is_admin() ) {
    // change jquery version
    wp_deregister_script('jquery');
    wp_register_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js', false, '1.11.3');
    wp_enqueue_script('jquery');
    // scripts
    wp_enqueue_script( 'scripts', get_template_directory_uri() . '/assets/dist/concat.min.js', array('jquery'), '1.0', true );
    // Styles
    wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/dist/all.min.css', false, '1.0', 'all' );
    wp_enqueue_style( 'fonts', '://fonts.googleapis.com/css?family=Open+Sans:400,300,700,300italic,400italic,700italic' );
  }
}
add_action( 'wp_enqueue_scripts', 'gdg_custom_scripts' );


/**
*
* Enable post thumbnails
*
**/
function gdg_enable_thumbnails()
{
  if ( function_exists( 'add_theme_support' ) )
  {
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 300, 150, true ); // default Post Thumbnail dimensions (cropped)

    // additional image sizes
    add_image_size( 'thumb-slider', 365, 330, true ); //300 pixels wide (and unlimited height)
    add_image_size( 'thumb-events', 55, 55, true ); //300 pixels wide (and unlimited height)
    add_image_size( 'thumb-square', 200, 200, true ); //300 pixels wide (and unlimited height)
  }
}
add_action( 'init', 'gdg_enable_thumbnails' );



/**
*
* Register Nav Menus
*
**/
function gdg_register_nav()
{
  register_nav_menus(
    array(
      'primary-menu' => 'Menu Principal',
    )
  );
}
add_action( 'init', 'gdg_register_nav' );


/**
 * Enables the Excerpt meta box in Page edit screen.
 */
function gdg_add_excerpt_support_for_pages() {
  add_post_type_support( 'page', 'excerpt' );
}
add_action( 'init', 'gdg_add_excerpt_support_for_pages' );



 ?>
