+function($) {

  $(document).ready(function() {
    $('.carousel').carousel({
        pause: "false",
        interval: 4000
    });

    $('#image-carousel').css({'margin': 0, 'width': $(window).outerWidth(), 'height': $(window).outerHeight()});
    $('#image-carousel .item').css({'position': 'fixed', 'width': '100%', 'height': '100%'});
    $('#image-carousel .carousel-inner div.item img').each(function() {
        var imgSrc = $(this).attr('src');
        $(this).parent().css({'background': 'url('+imgSrc+') center center no-repeat', '-webkit-background-size': '100% ', '-moz-background-size': '100%', '-o-background-size': '100%', 'background-size': '100%', '-webkit-background-size': 'cover', '-moz-background-size': 'cover', '-o-background-size': 'cover', 'background-size': 'cover'});
        $(this).remove();
    });

    var slideSpeed = 750;
    $(".header").slideDown(slideSpeed);
    $(".footer").slideDown(slideSpeed);
  });

  $(window).on('resize', function() {
        $('#image-carousel').css({'width': $(window).outerWidth(), 'height': $(window).outerHeight()});
  });

  $(".anchor-link").click(function() {
    $('html, body').animate({
        scrollTop: $( $(this).find("a").attr('href') ).offset().top - 40
    }, 500);
    return false;
  });

}(jQuery);
