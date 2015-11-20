<h4 class="title-section"><a href="<?php echo get_post_type_archive_link( 'gdg_jobs' ); ?>">Vagas</a></h4>
<section class="jobs-home">
  <div class="job-list">

    <?php
    $args = array(
      'post_type' => 'gdg_jobs',
      'numberposts' => 3
    );

    $posts_data = get_posts( $args );

    if( $posts_data ):
      foreach( $posts_data as $post_data ):
        $post_id        = $post_data->ID;
        $post_permalink = get_post_permalink( $post_id );
        $post_title     = get_the_title( $post_id );
        $jobs_place     = get_post_meta( $post_id, 'gdg_jobs_place', true );
        $jobs_earnings  = get_post_meta( $post_id, 'gdg_jobs_earnings', true ); ?>

          <div class="job-item">
            <div class="card">
              <div class="card-content">
                <span class="secondary-content"><a href="<?php echo $post_permalink ?>"><i class="ion-chevron-right"></i></a></span>
                <p><b><a href="<?php echo $post_permalink ?>"><?php echo $post_title ?></a></b></p>
                <span class="superlight"><?php echo $jobs_place; ?></span>
              </div>
            </div>
          </div>

        <?php
      endforeach;
    endif; ?>

  </div>
</section>
