$(document).ready(function(){
	$(".Valiform").animate({
		top:"50px"
	},"slow");
	$(".Thank").animate({
		top:"50px"
	},"slow");
	$("#fform").animate({
		top:"50px",
		opacity:'1'
	},"slow");
	$(".image").animate({
		marginLeft :"55%"
	},"slow");
	$("#wrong").animate({
		top:"50px"
	},"slow");
	$("#admin").animate({
		marginRight:"81%"
	},"slow");
});
function count(val){
	$('#count').css('color','red');
     var len = val.value.length;
     if (len >= 300) {
              val.value = val.value.substring(0, 300);
     } else {
              $('#count').text(300 - len);
     }
};