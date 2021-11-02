jQuery(document).ready(function($) {
   const $hdr = 'h3'; // set heading level to look out for
   var $acc_id = 1; // global id counter
   console.log('hello Jon');
   $('.accordion-container').find($hdr).each(function(){

      // Store current ID value
      var $this_id = $acc_id,
      $this_text = $(this).text();

      // empty the header
      $(this).empty();

      // Construct the button string with the attributes we need
      var $this_button = '<button data-id="' + $this_id + '" id="accordion-button-' + $this_id + '" '
         + ' aria-controls="accordion-panel-'+ $this_id +'" aria-expanded="false">'
         + $this_text + '</button>';


      // Add the button string into the heading
      $(this).append($this_button);

      // Get the set of elements between this header and the next header, or the end of
      // the accordion container
      var $set = $(this).nextUntil($hdr),
      $this_panel = '<div class="accordion-panel hidden" id="accordion-panel-' + $this_id +
         '" tabindex="-1" aria-labelledby="accordion-button-' + $this_id + '"></div>';

      // Wrap everything in a <div> with the necessary elements included.
      // This will be the accordion panel that is hidden by default and shown on demand.
      $set.wrapAll($this_panel);

      // Now increment the $acc_id value ready for the next one
      $acc_id++;
   });

   // Now set up the event listeners
   // Look for all buttons that are inside a correct level heading inside the accordion container
   $('.accordion-container').find($hdr).find('button').on('click', function(e) {
      var $thisId = $( this ).attr('data-id');
      if ($(this).attr( 'aria-expanded' ) == 'true') {
         hideAccordion($( this ));
         $( this ).focus();
      } else {
         showAccordion($( this ));
      }
   });

   function showAccordion(obj) {
      // Being passed a button
      var $thisId = $( obj ).attr('data-id');
      var $panel = $('#accordion-panel-'+$thisId);
      console.log("In showAccordion - "+$thisId);

      $($panel).removeClass('hidden');
      $(obj).attr('aria-expanded','true');
      $($panel).focus();
   }
   function hideAccordion(obj) {
      // Being passed a button
      var $thisId = $( obj ).attr('data-id');
      var $panel = $('#accordion-panel-'+$thisId);
      console.log("In hideAccordion - "+$thisId);

      $($panel).addClass('hidden');
      $(obj).attr('aria-expanded','false');
      $(obj).focus();
   }
});
