$(document).ready(function () {
  $( "#target" ).click(function() {
    $(".menu-container").toggleClass("is-menu-open");

    if($(this).hasClass('one')) {
      $(this).removeClass('one').addClass('two');
      $('.menu').css("width", "70%");
      $('.header').css("height", "15%");
      $('.bottom').css("height", "15%");
      $('#sudcoHeader').css("top", "55px");
      $('#sudcoHeader').css("left", "185px");

    } else {
      $(this).removeClass('two').addClass('one');
      $('.menu').css("width", "40px");
      $('.header').css("height", "40px");
      $('.bottom').css("height", "40px");
      $('#sudcoHeader').css("top", "8px");
      $('#sudcoHeader').css("left", "40px");
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
