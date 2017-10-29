$(document).ready(function () {
  $( "#target" ).click(function() {
    $(".menu-container").toggleClass("is-menu-open");

    if($(this).hasClass('one')) {
      $(this).removeClass('one').addClass('two');
      $('.menu').css("width", "80%");
      $('.header').css("height", "12%");
      $('.bottom').css("height", "12%");
      $('.redes').css("width", "60px");
      $('#sudcoHeader').css("top", "55px");
      $('#sudcoHeader').css("left", "185px");
      $(".menu-container").css("transform", "scale(0.3) rotate(45deg)");
      $(".menu-container").css("left", "100px");
      $(".menu-container").css("transition", "all ease-in-out 300ms");

    } else {
      $(this).removeClass('two').addClass('one');
      $('.menu').css("width", "40px");
      $('.header').css("height", "40px");
      $('.bottom').css("height", "40px");
      $('.redes').css("width", "40px");
      $('#sudcoHeader').css("top", "8px");
      $('#sudcoHeader').css("left", "40px");
      $(".menu-container").css("left", "-15px");
      $(".menu-container").css("transform", "scale(0.2) rotate(0deg)");
    }
  });



  // HOVER CONTROLLER
  if($('#target').hasClass('one')) {
    $(".bars").hover(function(){
      if($('#target').hasClass('one')) {
        $('.menu').css("transition", "all ease-in-out 300ms");
        $('.menu').css("width", "90px");
        $(this).css("transform", "scale(1.1)");
      }
    }, function(){
      if($('#target').hasClass('one')) {
        $('.menu').css("width", "40px");
        $(this).css("transform", "scale(1)");
      }
    });
  }
});
