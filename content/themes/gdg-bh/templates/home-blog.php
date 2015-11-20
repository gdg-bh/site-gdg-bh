 <h4 class="title-section"><a href="<?php echo get_category_link( 1 ); ?>">Blog GDG</a></h4>
 <section class="about-home">
   <div class="row">
     <div class="grid-list grid-list-home">
        <div class="grid-sizer"></div>

        <?php
        $args = array(
          'post_type' => 'post',
          'numberposts' => 5
        );
        $posts_data = get_posts( $args );
        if( $posts_data ):
          foreach( $posts_data as $post_data ):
            $post_id        = $post_data->ID;
            $post_title     = $post_data->post_title;
            $post_permalink = get_the_permalink( $post_id );
            $post_excerpt   = $post_data->post_excerpt;
            $post_date      = get_the_time('d/m/y', $post_id);
            $post_thumbnail = get_the_post_thumbnail( $post_id, 'thumbnail', array( 'class' => 'responsive-img' ) );
            $post_author    = get_user_meta( $post_data->post_author, 'first_name', true );
            $comments_number = get_comments_number( $post_id ); ?>

            <div class="grid-item">
              <div class="card hoverable">
                <?php if ( $post_thumbnail ): ?>
                  <div class="card-image waves-effect waves-block waves-light">
                    <a href="<?php echo $post_permalink ?>">
                      <?php echo $post_thumbnail; ?>
                    </a>
                  </div>
                <?php endif ?>
                <div class="card-content">
                  <p><b><?php echo $post_title ?></b></p>
                  <span class="superlight"><?php echo wpautop( $post_excerpt ); ?></span>
                </div>
                <div class="card-action">
                  <a class="color-04" href="<?php echo $post_permalink ?>">Continue lendo...</a>
                </div>
              </div>
            </div>


            <?php
          endforeach;
        else:
          get_template_part( 'templates/alert','warning' );
        endif; ?>

    </div>
  </div>
</section>
