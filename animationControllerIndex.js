$(document).ready(function () {
  // Init ScrollMagic
  var controller = new ScrollMagic.Controller();
  // loop through each .project element
  $('.animacionBarra').each(function(){
    // buld a scene
    var ourScene = new ScrollMagic.Scene({
      triggerElement: this,
      //duration: '90%',
      //reverse: false,
      triggerHook: 0
    })
    .setClassToggle('.barraAmarilla', 'animate') // add class to #img-1
    // .addIndicators({
    //    name: 'fade in'
    //  })
    .addTo(controller);
  });


  ///////////////
  $('.animacionBarra').each(function(){
    // buld a scene
    var ourScene = new ScrollMagic.Scene({
      triggerElement: this,
      //duration: '90%',
      //reverse: false,
      triggerHook: 0
    })
    .setClassToggle('.textoHola', 'moverTexto') // add class to #img-1
    // .addIndicators({
    //   name: 'Diagonal On'
    // })
    .addTo(controller);
  });

  //////////////
  $('.animacionBarra').each(function(){
    // buld a scene
    var ourScene = new ScrollMagic.Scene({
      triggerElement: this,
      //duration: '90%',
      //reverse: false,
      triggerHook: 0
    })
    .setClassToggle('#contenido', 'show') // add class to #img-1
    // .addIndicators({
    //   name: 'Diagonal On'
    // })
    .addTo(controller);
  });


});
