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


  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
