+function($) {

  $(document).ready(function() {
  });

  $(window).scroll(function() {
  }).scroll();

  $(".anchor-link").click(function() {
    $('html, body').animate({
        scrollTop: $( $(this).find("a").attr('href') ).offset().top - 40
    }, 500);
    return false;
  });

}(jQuery);
