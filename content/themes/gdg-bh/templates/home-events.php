<h4 class="title-section"><a href="<?php echo home_url( ); ?>/eventos">Eventos</a></h4>
<section class="featured-events">
  <div class="row">
    <div class="col l12 m12 s12">

      <?php
      $api_key    = '47262d6233c14a2267d33665c29';
      $connection = new MeetupKeyAuthConnection( $api_key );
      $meetup     = new MeetupEvents( $connection );
      $events     = $meetup->getEvents( array( 'group_urlname' => 'GDG-BH' ) );

      if ( $events ) :
        echo '<div class="card-panel featured-events-list">';
        $i = 0;
        foreach ( $events as $event ) :
          if ( $i > 2 ) break;
          $event_date = date( 'd/m', ($event['time'] / 1000) ); ?>

          <article class="featured-events-item">
            <div class="col l3 m3 s3 event-thumb">
              <a href="<?php echo $event['event_url'] ?>">
                <?php echo '<img src="' . get_template_directory_uri() . '/assets/img/event-thumb.png" class="responsive-img circle">'; ?>
              </a>
            </div>
            <div class="col l7 m7 s7 event-date">
              <h4><a class="color-00" href="<?php echo $event['event_url'] ?>"><?php echo $event_date ?></a></h4>
            </div>
            <div class="col l2 m2 s2 event-links">
              <a href="<?php echo $event['event_url'] ?>"><i class="ion-ios-upload-outline"></i></a>
            </div>
            <div class="col l9 m9 s9 event-body">
              <p class="superlight"><?php echo $event['name'] ?></p>
            </div>
          </article>

          <?php
          $i++;
        endforeach;
        echo '</div>';
      else :
        get_template_part( 'templates/alert','warning' );
      endif; ?>


    </div>
  </div>
</section>
