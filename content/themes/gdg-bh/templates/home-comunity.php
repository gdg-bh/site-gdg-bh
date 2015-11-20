<h4 class="title-section"><a href="<?php echo get_post_type_archive_link( 'gdg_comunity' ); ?>">Comunidades</a></h4>
<section class="jobs-home">
  <div class="row">
    <div class="job-list">

      <?php
      $args = array(
        'post_type' => 'gdg_comunity',
        'numberposts' => 9
      );

      $posts_data = get_posts( $args );

      if( $posts_data ):
        foreach( $posts_data as $post_data ):
          $post_id        = $post_data->ID;
          $post_permalink = get_post_permalink( $post_id );
          $post_title     = get_the_title( $post_id );
          $post_thumbnail = get_the_post_thumbnail( $post_id, 'thumb-square' ); ?>

          <div class="col l4 m4 s6">
            <article class="comunity-item">
              <a href="<?php echo $post_permalink; ?>" title="<?php echo $post_title; ?>">
                <span class="waves-holder waves-effect waves-block waves-light"></span>
                <?php echo $post_thumbnail ?>
              </a>
            </article>
          </div>

          <?php
        endforeach;
      endif; ?>

    </div>
  </div>
</section>
