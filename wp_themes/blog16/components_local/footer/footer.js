'use strict';

/**
 *@fileOverview
 *@version 0.0.1
 *
 * @namespace factorial.footer
 */

require('jquery');
require('jqueryui');

(function ($, window, document, undefined) {

  $(document).ready(function() {
    $(window).scroll(function() {
      $('.Footer-goTop').toggleClass('is-active', $(this).scrollTop() > 200);
    });

    $('.Footer-goTop').on('click', function(e) {
      e.preventDefault();
      $('html, body').animate({scrollTop: 0}, 300);
    });
  });

})(window.jQuery, window, document);
