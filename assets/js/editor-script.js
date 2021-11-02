jQuery(document).ready(function($) {

  console.log( "This is the editor script" );

  // const wpBlock = $('.wp-block');
  //
  // wpBlock.each(function() {
  //   if ( $(this).hasClass('wp-block') ) {
  //     $(this).css('max-width', 'none');
  //   }
  // });

  // $( ".wp-block" ).each(function() {
  //   if ( $( this ).has( "wp-block" ) ) {
  //     $(this).addClass('full-bleed');
  //   }
  // });

  $( ".wp-block" ).each(function() {
    console.log( $(this));
    if ( $( this ).hasClass( "wp-block" ) ) {
      $(this).addClass('full-bleed');
    }
  });

  // function myFunction() {
  //   $("hero-section").parents('.wp-block').addClass('full-bleed');
  // }


  // $.each(wpBlock, function() {
  //   if ( $(this).contains('wp-block') ) {
  //     $(this).addClass('full-bleed');
  //   }
  // });

});
