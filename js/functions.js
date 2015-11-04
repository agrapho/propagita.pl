+function($) {

  $("#header-background").click(function() {
    var slideSpeed = 750;
    $(this).animate({ opacity: 0.0 }, 1000, function() {
      $(this).hide();
      $(".header").slideDown(slideSpeed);
      $(".footer").slideDown(slideSpeed);
      $("#text-carousel-container").slideDown(slideSpeed);

      $('#image-carousel').carousel({
          pause: "false",
          interval: 20000
      });

      $('#text-carousel .carousel').carousel({
          pause: "true",
          interval: 20000
      });

    });
  });

  $("#image-carousel").on("slide.bs.carousel", function (e) {
    var nextSlide = $(e.relatedTarget).index();
    $("#text-carousel .carousel").carousel(nextSlide);
  });

  $(window).load(function() {
    $('#image-carousel').show();
    $('#image-carousel').css({'margin': 0, 'width': $(window).outerWidth(), 'height': $(window).outerHeight()});
    $('#image-carousel .item').css({'position': 'fixed', 'width': '100%', 'height': '100%'});
    $('#image-carousel .carousel-inner div.item img').each(function() {
        var imgSrc = $(this).attr('src');
        $(this).parent().css({'background': 'url('+imgSrc+') center center no-repeat', '-webkit-background-size': '100% ', '-moz-background-size': '100%', '-o-background-size': '100%', 'background-size': '100%', '-webkit-background-size': 'cover', '-moz-background-size': 'cover', '-o-background-size': 'cover', 'background-size': 'cover', 'background-position': '50% 50%'});
        $(this).remove();
    });
  });

  $(window).on('resize', function() {
        $('#image-carousel').css({'width': $(window).outerWidth(), 'height': $(window).outerHeight()});
  });

  $(document).ready(function () {
        $(".gallery a").attr("rel","gallery");   
        $('a[rel="gallery"]').colorbox({title: function(){ return $(this).children().attr("alt"); }});
  });

  $('.language-selector').hover( 
    function(){
      $(this).stop().animate({right: '0px'}, 750)
    },
    function(){
      $(this).stop().animate({right: '-65px'}, 750)
    }
  );

}(jQuery);
