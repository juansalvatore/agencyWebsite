

$( "#target" ).click(function() {
  $(".menu-container").toggleClass("is-menu-open");
  $(".menuContainer").toggleClass("on");
});

// HOVER CONTROLLER

$(".bars").hover(function(){
    $('.menu').css("transition", "all ease-in-out 300ms");
    $('.menu').css("width", "100px");
    $(this).css("transform", "scale(1.1)");
  }, function(){
    $('.menu').css("width", "40px");
    $(this).css("transform", "scale(1)");
});
