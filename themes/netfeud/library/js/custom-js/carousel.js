jQuery(document).ready(function($){

  var carousel = $(".carousel"),
      currdeg  = 0;
   

  $(".next").on("click", { d: "n" }, rotate);
  $(".prev").on("click", { d: "p" }, rotate);

  function rotate(e){
    if(e.data.d=="n"){
      currdeg = currdeg - 36;
    }
    if(e.data.d=="p"){
      currdeg = currdeg + 36;
    }
    carousel.css({
      "-webkit-transform": "rotateY("+currdeg+"deg)",
      "-moz-transform": "rotateY("+currdeg+"deg)",
      "-o-transform": "rotateY("+currdeg+"deg)",
      "transform": "rotateY("+currdeg+"deg)"
    });
  }

var number = 1;
var lowerNumber = 1;
var topNumber = 10;

$(".topNumber").html(number);


$( ".next" ).on("click", function(e) {
      if(number === topNumber) {
        number -=  topNumber;
      }

      number +=  1;

      $(".topNumber").html(number);
   })

$( ".prev" ).on("click", function(e) {
      if(number === lowerNumber) {
        number +=  topNumber;
      }

      number -= 1;

      $(".topNumber").html(number);

   })



var number1 = 1;
var lowerNumber1 = 1;
var topNumber1 = 10;

$(".gamesNumberId").html(number1);


$( ".next1" ).on("click", function(e) {
      if(number1 === topNumber1) {
        number1 -= topNumber1;
      }

      number1 +=  1;

      $(".gamesNumberId").html(number1);
   })

$( ".prev1" ).on("click", function(e) {
      if(number1 === lowerNumber1) {
        number1 +=  topNumber1;
      }

      number1 -= 1;

      $(".gamesNumberId").html(number1);

   })

});













