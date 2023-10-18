


$(document).ready(function() {

  /* Hide mobile menu after clicking on a link
    -----------------------------------------------*/
    $('.navbar-collapse a').click(function(){
        $(".navbar-collapse").collapse('hide');
    });


  /* home slider section
  -----------------------------------------------*/
  $(function(){
    jQuery(document).ready(function() {
    $('#home').backstretch([
       
       "images/tatas.jpg",
       "images/persona.jpg", 
       "images/Misak.jpg",
       "images/carro.jpg",
       "images/mamas.jpg",
       
        ],  {duration: 2000, fade: 750});
    });
  })

  /* wow
  -------------------------------*/
  new WOW({ mobile: false }).init();

  });

