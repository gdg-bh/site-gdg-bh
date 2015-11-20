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
          <div class="col s12">

            <?php
            $api_key    = '47262d6233c14a2267d33665c29';
            $connection = new MeetupKeyAuthConnection( $api_key );
            $meetup     = new MeetupEvents( $connection );
            $events     = $meetup->getEvents( array( 'group_urlname' => 'GDG-BH' ) );

            if ( $events ) :
              echo '<div class="card-panel featured-events-list">';
              foreach ( $events as $event ) :
                $event_date = date( 'd/m', ($event['time'] / 1000) ); ?>

                <article class="featured-events-item">
                  <div class="col l2 m3 s4 event-thumb">
                    <a href="<?php echo $event['event_url'] ?>">
                      <?php echo '<img src="' . get_template_directory_uri() . '/assets/img/event-thumb.png" class="responsive-img circle">'; ?>
                    </a>
                  </div>
                  <div class="col l9 m8 s6 event-body">
                    <h4><a class="color-00" href="<?php echo $event['event_url'] ?>"><?php echo $event_date ?></a></h4>
                    <p class="superlight"><?php echo $event['name'] ?></p>
                  </div>
                  <div class="col l1 m1 s2 event-links">
                    <a href="<?php echo $event['event_url'] ?>"><i class="ion-ios-upload-outline"></i></a>
                  </div>
                </article>

                <?php
              endforeach;
              echo '</div>';
            else :
              get_template_part( 'templates/alert','warning' );
            endif; ?>

          </div>
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
