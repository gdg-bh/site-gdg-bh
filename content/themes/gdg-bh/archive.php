<?php
// Header
get_header( ); ?>


<section class="main-container">
  <div class="container">

    <div class="row">
      <div class="grid-list">
        <div class="grid-sizer"></div>

        <?php
        /**
        *
        * The Loop
        *
        **/
        if(have_posts()) :
          while(have_posts()): the_post(); ?>

            <div class="grid-item">
              <div class="card">
                <?php if ( has_post_thumbnail( ) ): ?>
                  <div class="card-image waves-effect waves-block waves-light">
                    <a href="<?php the_permalink(); ?>">
                      <?php the_post_thumbnail( 'thumbnail', array( 'class' => 'responsive-img' ) ); ?>
                    </a>
                  </div>
                <?php endif ?>
                <div class="card-content">
                  <p><b><?php the_title( ); ?></b></p>
                  <span class="superlight"><?php the_excerpt(); ?></span>
                </div>
                <div class="card-action">
                  <a class="color-04" href="<?php the_permalink(); ?>">Continue lendo...</a>
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

      </div>
    </div>

    <div class="row">
      <div class="col s12 m12 l12">
        <div class="pagination">
          <?php echo paginate_links( ); ?>
        </div>
      </div>
    </div>

  </div>
</section>

<?php
// Footer
get_footer( ); ?>
