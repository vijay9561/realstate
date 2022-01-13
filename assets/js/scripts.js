// navigation slide-in
$(window).load(function() {
  $('.nav_slide_button').click(function() {
   // $('.pull').slideToggle();
	$('.pull').slideToggle('medium', function() {
    if ($(this).is(':visible'))
        $(this).css('display','inline-block');
});
//$('.myclasssleft').slideToggle();
  });
});


$(document).ready(function() {
  $('#mydiveee').click(function() {
if(screen.width < 500) {
    $('#searchresponsive').show();
	$('#mydiveee1232').show();
	$('#mydiveee').hide();
	$('.banner-buying').css("margin-top", "312px"); 
	$('.slider').css('margin-top','227px');
}else{
	$('#searchresponsive').show();
	$('#mydiveee1232').show();
	$('#mydiveee').hide();
	$('.banner-buying').css("margin-top", "273px"); 
	$('.slider').css('margin-top','196px');
	}
  });
});


$(document).ready(function() {
						   
  $('#mydiveee1232').click(function() {
	if(screen.width < 500) {
    $('#searchresponsive').hide();
	$('#mydiveee1232').hide();
	$('#mydiveee').show();
	$('.banner-buying').css("margin-top", "81px");
	$('.slider').css('margin-top','40px');
	}else{
										
    $('#searchresponsive').hide();
	$('#mydiveee1232').hide();
	$('#mydiveee').show();
	$('.banner-buying').css("margin-top", "81px");
	$('.slider').css('margin-top','10px');
		}
  });
});