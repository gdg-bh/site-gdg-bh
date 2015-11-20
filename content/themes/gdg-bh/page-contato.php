<?php
// Header
get_header( ); ?>

<section class="main-container">
  <div class="container">
    <?php
    /**
    *
    * The Loop
    *
    **/
    if(have_posts()) :
      while(have_posts()): the_post(); ?>

        <div class="row">
          <?php if ( has_post_thumbnail( ) ) : ?>
            <div class="col l7 m7 s12">
              <div class="the-content">
                <?php the_content( ); ?>
              </div>
            </div>
            <div class="col l5 m5 s12">
              <p>
                <?php
                if ( has_post_thumbnail( ) ) {
                  the_post_thumbnail( 'large', array( 'class' => 'responsive-img z-depth-2' ) );
                } ?>
              </p>
            </div>
          <?php else: ?>
            <div class="col l8 m10 s12 offset-l2 offset-m1">
              <div class="the-content">
                <?php the_content( ); ?>
              </div>
            </div>
          <?php endif; ?>
        </div>

        <?php
      endwhile;
    else:
      get_template_part( 'templates/alert','warning' );
    endif; ?>
  </div>
</section>

<?php
// Footer
get_footer( ); ?>
