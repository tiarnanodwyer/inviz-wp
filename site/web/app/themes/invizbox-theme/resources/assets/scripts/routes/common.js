export default {
  init() {
    // JavaScript to be fired on all pages
      jQuery(function() {
    var header = jQuery(".navbar");

    jQuery(window).scroll(function() {
        var scroll = jQuery(window).scrollTop();
        if (scroll >= 50) {
            header.addClass("scrolled");
        } else {
            header.removeClass("scrolled");
        }
    });

});


      jQuery(function () {
  'use strict'

  jQuery('[data-toggle="offcanvas"]').on('click', function () {
    jQuery('.offcanvas-collapse').toggleClass('open')
  })
})






  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
