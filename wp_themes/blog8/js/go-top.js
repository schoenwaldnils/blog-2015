jQuery(document).ready(function() {
  $(window).scroll(function() {
    if ($(this).scrollTop() > 200) {
      $(".go-top").fadeIn(200);
    } else {
      $(".go-top").fadeOut(200);
    }
  });

  $(document).on("click", ".go-top", function(e) {
    e.preventDefault();
    $("html, body").animate({scrollTop: 0}, 300);
  });
});
