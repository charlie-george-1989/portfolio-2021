export default {
  init() {

    // Menu Button
    const menuButton = $('.menu-button'),
          siteNav = $('.site-nav');
    menuButton.on('click', function () {
      siteNav.toggleClass('revealed');
    });

    // Accessibility
    document.onkeydown = function(event) {
      event = event || window.event;
      if (event.keyCode == 27 ) {
        siteNav.removeClass('revealed');
      }
    };

    // Sub-menu
    siteNav.find('.menu-item-has-children > button').each(function () {
      $(this).on('click', function(e) {
        e.preventDefault();
        $(this).parent('.menu-item-has-children').toggleClass('sub-menu-open');
      });
    });

  },

  finalize() {

  }
}
