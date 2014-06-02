$(document).ready(function(){
	var body = $("body");
	var desktopWidth = 1024;

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
		if (body.hasClass('bar-menu-open')) {
			body.removeClass('bar-menu-open');
		}
		else {
			window.scrollTo(0,0);
			body.addClass('bar-menu-open');
			// On desktops, auto-focus on the search box.
			if (window.innerWidth >= desktopWidth) {
				setTimeout(function(){
					// Delayed to avoid an odd bug where the search box jumps.
					$('#bar-menu-search input').focus();
				}, 100);
			}
		}
		
	});
	
	$('#menu-backwash').click(function(){
		body.removeClass('bar-menu-open');
	});

	$('#site-search').hover(function(){
		if (window.innerWidth >= desktopWidth) {
			$('#site-search input').focus();
		}
	});

	$('#site-search input').focus(function(){
		$('#site-search').addClass('active');
	}).blur(function(){
		$('#site-search').removeClass('active');
	});

	$('#site-search button').click(function(e){
		if ($('#site-search input').val() == '') {
			e.preventDefault();
			$('#site-search input').focus();
			return false;
		}
	});
});




