(function($) {
  $(document).ready(function() {

    // Waves class
    $('.main-menu a').addClass('waves-effect waves-light');

    // Slider
    $('.slider').slider();

    // Initialize collapse button
    $(".button-collapse").sideNav();

    // Parallax
    $('.parallax').parallax();

    // Formidable
    $( function(){
      $('.form-field').addClass('input-field');
      $('textarea').addClass('materialize-textarea');
      $('fieldset').addClass('card-panel');
      $('.frm_submit input').addClass('btn');
    }() );


    $( function(){
      setTimeout(function(){
        // Grid - Masonry
        $('.grid-list').masonry({
          itemSelector: '.grid-item',
          columnWidth: '.grid-sizer',
          itemSelector: '.grid-item',
          percentPosition: true
        });
        // Loading
        $('#loading').fadeOut('slow');
      }, 500);
    }() );

  });
})( jQuery );
