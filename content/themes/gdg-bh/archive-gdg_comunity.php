<?php
// Header
get_header( ); ?>


<section class="main-container">
  <div class="container">

    <div class="row">
      <div class="comunity-list">

        <?php
        /**
        *
        * The Loop
        *
        **/
        if(have_posts()) :
          while(have_posts()): the_post(); ?>

            <div class="col l3 m4 s6">
              <article class="comunity-item">
                <a href="<?php the_permalink(); ?>" title="<?php the_title( ); ?>">
                  <span class="waves-holder waves-effect waves-block waves-light"></span>
                  <?php the_post_thumbnail( 'thumb-square' ); ?>
                </a>
              </article>
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
