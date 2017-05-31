jQuery(document).ready(function($){
	

	$("#submit").on("click", function() {
    	$(".suc1").removeClass("suc11");
    	$(".suc1").addClass("success-box");
    	$(".suc2").removeClass("suc12");
    	$(".suc2").addClass("box-head");
    	$(".suc3").removeClass("suc13");
    	$(".suc4").removeClass("suc14");
    	$(".suc4").addClass("success-text");
    	$(".suc5").removeClass("suc15");
    	$(".suc5").addClass("box-foot");
    	$(".suc7").removeClass("suc17");
    	$(".suc7").addClass("success-overlay");	
  })

	$(".success-box-x").on("click", function() {
		$(".suc1").addClass("suc11");
    	$(".suc1").removeClass("success-box");
    	$(".suc2").addClass("suc12");
    	$(".suc2").removeClass("box-head");
    	$(".suc3").addClass("suc13");
    	$(".suc4").addClass("suc14");
    	$(".suc4").removeClass("success-text");
    	$(".suc5").addClass("suc15");
    	$(".suc5").removeClass("box-foot");
    	$(".suc7").addClass("suc17");
    	$(".suc7").removeClass("success-overlay");
	})

	$('#cancel').click(
    function(){
        $('input').val('');
    });

    $('#cancel').click(
    function(){
        $('textarea').val('');
    });

    $('#cancel').click(
    function(){
        $('select').val('-----select one------');
    });

    $('#submit').click(
    function(){
        $('input').val('');
    });

    $('#submit').click(
    function(){
        $('textarea').val('');
    });

    $('#submit').click(
    function(){
        $('select').val('-----select one------');
    });

    

});