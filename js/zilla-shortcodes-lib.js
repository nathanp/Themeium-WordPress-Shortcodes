jQuery(document).ready(function($) {

	$(".zilla-tabs").tabs();
	
	$(".zilla-toggle").each( function () {
		if($(this).attr('data-id') == 'closed') {
			$(this).accordion({
				header: '.zilla-toggle-title',
				collapsible: true,
				active: false,
				//Fixes the accordion overflow issue
				heightStyle: "content",
				autoHeight: false,
				clearStyle: true
				});
		} else {
			$(this).accordion({
				header: '.zilla-toggle-title',
				collapsible: true,
				//Fixes the accordion overflow issue
				heightStyle: "content",
				autoHeight: false,
				clearStyle: true
			});
		}
	});
	
	
});
