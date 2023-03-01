$(document).ready(function() {
  $(window).on("scroll", function() {
    console.log($(this).scrollTop())
    if($(this).scrollTop() >= 30){
      // set to new image
      $(".brand-logo img").attr("src","img/tamili-logo-black.png");
    } else {
      //back to default
      $(".brand-logo img").attr("src","img/tamili-logo-white.png");
    }
  })
})
$(function() {
    var nav = $(".bg-theme");
    $(window).scroll(function() {    
        var scroll = $(window).scrollTop();
    
        if (scroll >= 30) {
            nav.removeClass('bg-theme').addClass("bg-white");
        } else {
            nav.removeClass("bg-white").addClass('bg-theme');
        }
    });
});
$(function() {
    var nav = $(".btn-theme");
    $(window).scroll(function() {    
        var scroll = $(window).scrollTop();
    
        if (scroll >= 30) {
            nav.removeClass('btn-theme').addClass("btn-primary");
        } else {
            nav.removeClass("btn-primary").addClass('btn-theme');
        }
    });
});