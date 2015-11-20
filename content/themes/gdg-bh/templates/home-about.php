<?php
$page = get_page_by_path( 'sobre' );
if ( $page ) :
  $post_id = $page->ID;
  $post_permalink = get_page_link( $post_id );
  $post_thumbnail = get_the_post_thumbnail( $post_id, 'thumbnail', array( 'class' => 'responsive-img' ) ); ?>

  <h4 class="title-section"><a href="<?php echo $post_permalink ?>"><?php echo $page->post_title ?></a></h4>
  <section class="about-home">
    <div class="card hoverable">
      <?php if ( $post_thumbnail ): ?>
        <div class="card-image">
          <?php echo $post_thumbnail ?>
          <span class="card-title">Google Developers Group</span>
        </div>
      <?php endif ?>
      <div class="card-content">
        <p class="superlight"><?php echo $page->post_excerpt ?></p>
      </div>
    </div>
  </section>

  <?php
endif; ?>
