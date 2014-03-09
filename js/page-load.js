/*
 * Work in progress.
 */

/*
$(window).load(function() {
jQuery('a[rel="load"]').click(function(e){
	//var siteurl = ""; 
	e.preventDefault();
	var link = $(this).attr("href");
	if(link!=window.location){
				window.history.pushState({path:link},'',link);
	}
	$('#slider-wrapper').slideUp().empty();
	$('#content').css('position' , 'relative');
	$('#content').after('<div id="wrap-overlay"></div>');
	$('#wrap').css({
		'background-color': 'rgba(0,0,0,0.5)',
		'z-index' : '10',
		'position' : 'absolute'
		});
	var ajaxURL = '/wp-admin/admin-ajax.php';
	$.ajax({
	//ajax setting
		type: 'POST',
		url: link,
		//data: ({action : 'AJAX_get_page', linkURL: link}),
		dataType: 'html',
		success : function(data, text, xhr){
			//parse data
			var response = $("<div>").html(data);
			//console.log(typeof(response));
			//console.log(data);
			var parser = new DOMParser();
			var preParse = data.match(/<head[^>]*>[\s\S]*<\/head>/gi);
			var headHTML = parser.parseFromString(preParse, "text/html");
			var head = $(headHTML).find('head').html();
			var slider = response.find('#slider-wrapper').html();
			var content = response.find('#content').html();
			var footer = response.find('#wp-footer').html();
			//console.log(slider);
			//console.log(footer);
			//Post data
			$('#content').empty().append(content);
			$('head').empty().append(head);
			if(slider != null){
				if($("#slider-wrapper").length == 0){
					$('#content').insertBefore('<section id="slider-wrapper"></section>');
				}
				$("#slider-wrapper").empty().append(slider);
			}
			$("#content").empty().append(content);
			$('#slider-wrapper').empty().append(footer);
			

			$('#wrap').remove();
			return false;
		}})
		if($('#slider-wrapper').length > 0){
			$('#slider-wrapper').slideDown();
		}
	});
});
*/