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
      $post_id       = get_the_id();
      $jobs_place    = get_post_meta( $post_id, 'gdg_jobs_place', true );
      $jobs_url      = get_post_meta( $post_id, 'gdg_jobs_url', true );
      $jobs_earnings = get_post_meta( $post_id, 'gdg_jobs_earnings', true ); ?>

      <div class="container">
        <div class="row">
          <div class="col s12 m12 l12">
            <?php the_terms( $post_id, 'job_genre', '<div class="chip">', '</div> <div class="chip">', '</div>' ); ?>
            <p class="superlight"><i><?php echo get_the_date(  ); ?></i></p>
            <div class="the-content">
              <?php the_content( ); ?>
            </div>

            <div class="job-item card-panel">
              <?php if ( $jobs_place ): ?>
                <b>Local:</b> <?php echo $jobs_place; ?>
                <br>
                <br>
              <?php endif ?>
              <?php if ( $jobs_earnings ): ?>
                <b>Salário/Remuneração:</b> <?php echo $jobs_earnings; ?>
                <br>
                <br>
              <?php endif ?>
              <?php if ( $jobs_url ): ?>
                <b>Link da vaga:</b> <?php echo '<a class="color-03" target="_blank" href="' . $jobs_url . '">' . $jobs_url . '</a>'; ?>
              <?php endif ?>
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
