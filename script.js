$(document).ready(function(){
	var body = $("body");

	$('#main-version').change(function(){
		var select = $(this),
			val = select.val();
			
		body.removeClass(function(index, css) {
		    return (css.match(/\bversion-\S+/g) || []).join(' ');
		})
		setTimeout(function(){
			body.addClass('version-' + val);
		}, 100);
	}).change();

	$('#bar-menu .menu-toggle').click(function(){
		body.toggleClass('bar-menu-open');
		window.scrollTo(0,0);
	});
	
	$('#menu-backwash').click(function(){
		body.removeClass('bar-menu-open');
	});
});