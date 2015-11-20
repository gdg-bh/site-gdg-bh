<header class="page-title card-panel">
  <div class="container">
    <div class="row">
      <div class="col s12 m12 l12">
        <h3 class="title-section">
          <?php
          if ( ( is_page( ) || is_single( ) ) && !is_admin() && get_the_title( ) ) {
             the_title( );
          } else {
            wp_title( '' );
          } ?>
        </h3>
      </div>
    </div>
  </div>
</header>
