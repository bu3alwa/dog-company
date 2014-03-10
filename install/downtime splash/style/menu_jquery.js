$( document ).ready(function() {
$(document).ready(function(){
$('.nav ul ul li:odd').addClass('odd');
	$('.nav ul ul li:even').addClass('even');
		$('.nav > ul > li > a').click(function() {
		  $('.nav li').removeClass('active');
		  $(this).closest('li').addClass('active');	
		  var checkElement = $(this).next();
		  if((checkElement.is('ul')) && (checkElement.is(':visible'))) {
			$(this).closest('li').removeClass('active');
			checkElement.slideUp('normal');
		  }
		  if((checkElement.is('ul')) && (!checkElement.is(':visible'))) {
			$('.nav ul ul:visible').slideUp('normal');
			checkElement.slideDown('normal');
		  }
		  if($(this).closest('li').find('ul').children().length == 0) {
			return true;
		  } else {
			return false;	
		  }		
		});

	});

});