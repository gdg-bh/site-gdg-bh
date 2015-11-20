<?php
// Header
get_header( ); ?>

<div class="container">
  <div class="row">
    <div class="col m8 s12">
      <?php get_template_part( 'templates/home','blog' ); ?>
    </div>
    <div class="col m4 s12">
      <?php get_template_part( 'templates/home','events' ); ?>
    </div>
  </div>
  <div class="row">
    <div class="col s12">
      <?php get_template_part( 'templates/home','newsletter' ); ?>
    </div>
  </div>
  <div class="row">
    <div class="col m4 s12">
      <?php get_template_part( 'templates/home','about' ); ?>
    </div>
    <div class="col m4 s12">
      <?php get_template_part( 'templates/home','jobs' ); ?>
    </div>
    <div class="col m4 s12">
      <?php get_template_part( 'templates/home','comunity' ); ?>
    </div>
  </div>
</div>

<?php
// Footer
get_footer( ); ?>
