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
      $post_id = get_the_id(); ?>

      <div class="container">
        <div class="row">
          <div class="col s12 m12 l4">

            <div class="row">
              <div class="col s12 m6 l12">
                <p>
                  <?php
                  if ( has_post_thumbnail( ) ) {
                    the_post_thumbnail( 'large', array( 'class' => 'responsive-img z-depth-2' ) );
                  } ?>
                </p>
              </div>
              <div class="col s12 m6 l12">
                <p class="superlight"><i><?php echo get_the_date(  ); ?></i></p>
                <?php the_tags( '<div class="chip">', '</div> <div class="chip">', '</div>' ); ?>
              </div>
            </div>

          </div>
          <div class="col s12 m12 l8">
            <div class="the-content">
              <?php the_content( ); ?>
            </div>
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
