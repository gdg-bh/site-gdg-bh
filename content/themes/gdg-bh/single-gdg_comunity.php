<?php
// Header
get_header( ); ?>

<section class="main-container">

  <?php
  /**
  *
  * The Loop
  *
  **/
  if(have_posts()) :
    while(have_posts()): the_post();
      $post_id = get_the_id();
      $comunity_url = get_post_meta( $post_id, 'gdg_comunity_url', true ); ?>

      <div class="container">
        <div class="row">
          <div class="col s12 m3 l3">
            <?php the_post_thumbnail( 'thumb-square', array( 'class' => 'responsive-img circle' ) ); ?>
          </div>
          <div class="col s12 m9 l9">
            <div class="the-content">
              <?php the_content( ); ?>
            </div>
            <?php if ( $comunity_url ): ?>
              <p><b>Website: <a href="<?php echo $comunity_url ?>"><?php the_title( ); ?></a></b></p>
            <?php endif ?>
          </div>
        </div>
      </div>

      <?php
    endwhile;
  else:
    echo '<div class="col s12 m12 l12">';
    get_template_part( 'templates/alert','warning' );
    echo '</div>';
  endif; ?>

</section>

<?php
// Footer
get_footer( ); ?>
