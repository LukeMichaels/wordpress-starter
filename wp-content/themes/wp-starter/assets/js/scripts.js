(function ($, root, undefined) {

  $(function () {

    'use strict';

    // toggle hamburger & off-canvas nav
    var $hamburger = $(".hamburger");
    $hamburger.on("click", function() {
      $hamburger.toggleClass("is-active");
      $(".offCanvasMenu").toggleClass("open");
      // Do something else, like open/close menu
    });

    // wrap first word in header nav in a div
    $('#menu li a').each(function(){
      var me = $(this);
      me.html(me.html().replace(/^(\w+)/, '<div class=\"first-word\">$1</div>'));
    });
    
    // off canvas search form
    $('#search-form').animate({
      marginTop: '-50px'
    }, 200);
    $('.show-search').toggle(function(){
        $('#search-form').animate({
          marginTop: '0'
        }, 500);
      },
      function(){
        $('#search-form').animate({
          marginTop: '-50px'
        }, 500);
      }
    );
    $('.close').click(function() {
      $('#search-form').animate({
        marginTop: '-50px'
      }, 500);
    });
    
    $(".show-search").click(function() {
      $("html, body").animate({ scrollTop: 0 }, "fast");
      return false;
    });

  });

})(jQuery, this);

