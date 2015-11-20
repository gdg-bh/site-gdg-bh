<section class="newsletter-home">
  <form action="<?php echo home_url( ); ?>" class="card-panel newsletter-form">
    <div class="input-field">
      <button type="button" class="newsletter-submit prefix"><i class="ion-ios-email-outline"></i></button>
      <input id="newsletter-email" type="text" name="email" class="validate">
      <label for="newsletter-email"><big>Receba novidades do GDG direto no seu email.</big></label>
    </div>
  </form>
  <div class="card-panel bg-02 white-text newsletter-msg" style="display:none;">Desculpe, nenhum conteúdo foi encontrado. =(</div>
</section>

<script>
// Enviando dados via Ajax Form
$(document).ready( function() {
  $(".newsletter-submit").click( function() {
    email = $('#newsletter-email').val();
    $.ajax({
      type    : "post",
      dataType: "json",
      url     : "<?php echo admin_url('admin-ajax.php?action=newsletter_register_mail'); ?>",
      data    : {action: "newsletter_register_mail", email : email},
      success: function(response) {
        if(response.type == "success") {
          $(".newsletter-form").fadeOut( function() {
            $(this).remove();
          });
        }
        $(".newsletter-msg").fadeOut( function() {
          $(this).html(response.message).fadeIn();
        });
      }
    })
  });
});
</script>
