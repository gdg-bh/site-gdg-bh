(function($) {
  $(document).ready(function() {

    // Waves class
    $('.main-menu a').addClass('waves-effect waves-light');

    // Slider
    $('.slider').slider();

    // Initialize collapse button
    $(".button-collapse").sideNav();

    // Grid - Masonry
    $('.grid-list').masonry({
      // options...
      itemSelector: '.grid-item',
      columnWidth: '.grid-sizer',
      itemSelector: '.grid-item',
      percentPosition: true
    });

    // Parallax
    $('.parallax').parallax();

    // Formidable
    $( function(){
      $('.form-field').addClass('input-field');
      $('textarea').addClass('materialize-textarea');
      $('fieldset').addClass('card-panel');
      $('.frm_submit input').addClass('btn');
    }() );


    // Loading
    $( function(){
      setTimeout(function(){
        $('#loading').fadeOut('slow');
      }, 500);
    }() );

  });
})( jQuery );
