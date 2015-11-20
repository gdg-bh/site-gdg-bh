<?php
$social_links = gdg_social_links(); ?>

<footer class="main-footer">
  <div class="container">
    <div class="row">
      <div class="col s12">
        <?php if ( $social_links ): ?>
          <ul class="social-links">
            <?php foreach ( $social_links as $key => $link ): ?>
              <li><a target="_blank" href="<?php echo $link ?>"><i class="ion-social-<?php echo $key ?>"></i></a></li>
            <?php endforeach ?>
          </ul>
        <?php endif ?>
        <p class="center light"><small><b>GDG BH </b>© Google Developers Group  - 2015 - Todos os direitos reservados.</small></p>
      </div>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
