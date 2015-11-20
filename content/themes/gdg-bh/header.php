<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicon.png">

  <style type="text/css">
    #loading {
      position: fixed;
      width: 100%;
      height: 100%;
      background: #f2f2f2;
      z-index: 999;
    }
    .loading-icon {
      top: 0;
      bottom: 0;
      left: 0;
      right: 0;
      width: 65px;
      height: 65px;
      margin: auto;
      position: fixed;
    }
  </style>

  <script src="<?php echo get_template_directory_uri() ?>/assets/hacks/respond.min.js"></script>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php
// Loading
get_template_part( 'templates/content', 'loader' ); ?>

<?php
/**
* Menu Mobile
*/
$args = array(
  'theme_location'  => '',
  'menu'            => '',
  'container'       => '',
  'container_class' => '',
  'container_id'    => '',
  'menu_class'      => 'menu side-nav',
  'menu_id'         => 'slide-out',
  'echo'            => true,
);
wp_nav_menu( $args ); ?>

  <header class="main-header">

    <div class="parallax-container">
      <div class="parallax"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg-header.jpg"></div>
    </div>

    <div class="container header-content">
      <div class="row">

        <div class="col l4 m8 s8">
          <?php
          $website_logo = gdg_get_option('website_logo');
          if ( $website_logo ) : ?>
            <a href="<?php echo home_url( ); ?>" class="main-logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" class="responsive-img" alt="<?php bloginfo( ); ?>"></a>
          <?php else: ?>
            <h3><a href="<?php echo home_url( ); ?>"><?php bloginfo( ); ?></a></h3>
          <?php endif; ?>
        </div>

        <div class="col l12 m4 s4 hide-on-large-only">
          <a href="#" data-activates="slide-out" class="button-collapse"><i class="ion-navicon"></i></a>
        </div>

        <div class="col l8 m12 s12">
          <form action="<?php echo home_url( ); ?>" class="search-form">
            <div class="input-field">
              <button type="submit" class="prefix"><i class="ion-android-search"></i></button>
              <input id="search" type="text" name="s" class="validate">
              <label for="search"><big>Pesquisar no GDG BH</big></label>
            </div>
          </form>
        </div>

      </div>
      <div class="row hide-on-med-and-down no-margin">

        <nav class="main-menu">
          <?php
          /**
          * Menu Desktop
          */
          $args = array(
            'theme_location'  => '',
            'menu'            => '',
            'container'       => '',
            'container_class' => '',
            'container_id'    => '',
            'menu_class'      => 'menu',
            'menu_id'         => '',
            'echo'            => true,
          );
          wp_nav_menu( $args ); ?>
        </nav>

      </div>
    </div>
  </header>

  <?php
  if ( !is_home() ) {
    get_template_part( 'templates/content', 'title' );
  } ?>
