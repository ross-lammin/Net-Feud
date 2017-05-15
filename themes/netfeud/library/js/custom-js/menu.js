jQuery(document).ready(function($){


  $( ".menu-text" ).on("click", function(e) {
    	$( e.target ).toggleClass(  "menu-text"  );
    	$( e.target ).toggleClass(  "menu-close"  );
    	$( ".menu-default" ).toggleClass(  "menu-overlay"  );
    	$( ".pie1" ).toggleClass(  "pie"  );
    	$( ".slice1" ).toggleClass(  "slice"  );
    	$( ".slice-contents1" ).toggleClass(  "slice-contents"  );
    	$( ".slice2" ).toggleClass(  "slice"  );
    	$( ".slice-contents2" ).toggleClass(  "slice-contents"  );
    	$( ".slice3" ).toggleClass(  "slice"  );
    	$( ".slice-contents3" ).toggleClass(  "slice-contents"  );
    	$( ".slice4" ).toggleClass(  "slice"  );
    	$( ".slice-contents4" ).toggleClass(  "slice-contents"  );
    	$( ".slice5" ).toggleClass(  "slice"  );
    	$( ".slice-contents5" ).toggleClass(  "slice-contents"  );
    	$( ".label1" ).toggleClass(  "radial-label1"  );
    	$( ".label2" ).toggleClass(  "radial-label2"  );
    	$( ".label3" ).toggleClass(  "radial-label3"  );
    	$( ".label4" ).toggleClass(  "radial-label4"  );
    	$( ".label5" ).toggleClass(  "radial-label5"  );
    	$( ".logo-overlay1" ).toggleClass(  "logo-overlay"  );
      })


      $( ".dropdown-arrow" ).on("click", function(e) {
        $( e.target ).toggleClass(  "dropdown-reverse"  );
        $( ".avatar-nest" ).toggleClass(  "avatar-nest-full"  );
      })

      
      $( ".avatar" ).on("click", function(e) { 
        $( ".profile-card" ).addClass(  "avatar-profile-card"  );
        $(".h" ).removeClass( "hidden" );
        $(".h" ).addClass( "card-hidden-bg" );
      })

      $( ".card-close" ).on("click", function(e) { 
        $( ".profile-card" ).removeClass(  "avatar-profile-card"  );
        $(".h" ).addClass( "hidden" );
        $(".h" ).removeClass( "card-hidden-bg" );
      })



// $(function(){
//     var stickyHeaderTop = $('.ads-temp-left').offset().top;

//     $(window).scroll(function(){
//             if( $(window).scrollTop() >= stickyHeaderTop ) {
//                     $('.ads-temp-left').css({position: 'fixed', top: '40px', marginTop: '0em'});

//             } else {
//                     $('.ads-temp-left').css({position: 'absolute', marginTop: '80em'});

//             }
//     });
// });



// $(function(){
//     var stickyHeaderTop = $('.ads-temp-right').offset().top;

//     $(window).scroll(function(){
//             if( $(window).scrollTop() >= stickyHeaderTop ) {
//                     $('.ads-temp-right').css({position: 'fixed', top: '40px', marginTop: '0em'});

//             } else {
//                     $('.ads-temp-right').css({position: 'absolute', marginTop: '80em'});

//             }
//     });
// });


$(document).scroll(function() {
    var y = $(document).scrollTop(), //get page y value 
        header = $(".ads-temp-left"); // your div id
    if(y >= 1319)  {
        header.css({position: "fixed", "top" : "-40em", "left" : "0"});
    } else {
        header.css({position: "absolute", top: '42em' });
    }
});

$(document).scroll(function() {
    var y = $(document).scrollTop(), //get page y value 
        header = $(".ads-temp-right"); // your div id
    if(y >= 1319)  {
        header.css({position: "fixed", "top" : "-40em", "right" : "0"});
    } else {
        header.css({position: "absolute", top: '42em' });
    }
});



});











