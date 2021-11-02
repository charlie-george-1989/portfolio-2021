jQuery(document).ready(function($) {
  $(window).scroll(function(){
    $('.page-cover').each(function(){
      if ($(this).offset().top < $(window).scrollTop()) {
        var difference = $(window).scrollTop() - $(this).offset().top;
        var half = (difference / 2) + 'px';

        $(this).find('img').css('top', half);
      } else {
        $(this).find('img').css('top', '0');
      }
    });

  });
});
