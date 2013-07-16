!function ($) {

  $(function () {


    

    var $win = $(window)


    $win.smartresize(function(){
      
      // update navTop
      navTop = $('.navbar').length && $('.navbar').offset().top - 0

      // setup and refresh navspry
      $('#spry-nav').scrollspy({
        offset: 0
      });

      $('[data-spy="scroll"]').each(function () {
       var $spy = $(this).scrollspy('refresh')
       });
    });
    



    // set background size which will activate hook for non-CSS3 compliant browsers
    $("body").css( "background-size", "cover" )






  })
}(window.jQuery)