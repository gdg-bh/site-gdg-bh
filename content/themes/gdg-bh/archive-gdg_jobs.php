<?php
// Header
get_header( ); ?>


<section class="main-container">
  <div class="container">

    <div class="row">
      <div class="col s12 m12 l12 term-list">
        <?php
        $term_list = get_terms( 'job_genre' );
        if ( $term_list ) {
          echo '<div class="chip"><a href="' . get_post_type_archive_link( 'gdg_jobs' ) . '">Todas as áreas</a></div> ';
          foreach ( $term_list as $term ) {
            $term_url = get_term_link( $term, 'job-genre' );
            echo '<div class="chip"><a href="' . $term_url . '">' . $term->name . '</a></div> ';
          }
        } ?>
      </div>
    </div>

    <div class="row">
      <div class="col s12 m12 l12">
        <div class="job-list">

          <?php
          /**
          *
          * The Loop
          *
          **/
          if(have_posts()) :
            while(have_posts()): the_post();
              $post_id = get_the_id();
              $jobs_place = get_post_meta( $post_id, 'gdg_jobs_place', true );
              $jobs_earnings = get_post_meta( $post_id, 'gdg_jobs_earnings', true ); ?>

              <div class="job-item">
                <div class="card">
                  <div class="card-content">
                    <span class="secondary-content superlight"><i><?php echo get_the_date( 'd/m/Y' ); ?></i></span>
                    <p><b><a href="<?php the_permalink(); ?>"><?php the_title( ); ?></b></a></p>
                    <span class="superlight"><?php echo $jobs_place; ?></span>
                  </div>
                  <div class="card-action">
                    <span><?php echo $jobs_earnings ?></span>
                    <a class="right color-03" href="<?php the_permalink(); ?>">Saiba mais</a>
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
