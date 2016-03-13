$(document).ready(function(){
	var body = $("body");
	$('.prev').click(function(){
		var current = $('.gallery.active li.active'),
			next = current.prev(),
			changeGallery = false;

		if (next.length == 0) {
			changeGallery = true;
			var currentGallery = current.parents('.gallery'),
				nextGallery = currentGallery.prev();

			if (nextGallery.length == 0) {
				nextGallery = $('.gallery:last-child');
			}
			next = nextGallery.find('li:last-child');
		}
		changeGalleryImage(next, changeGallery);
	})
	$('.next').click(function(){
		var current = $('.gallery.active li.active'),
			next = current.next(),
			changeGallery = false;

		if (next.length == 0) {
			changeGallery = true;
			var currentGallery = current.parents('.gallery'),
				nextGallery = currentGallery.next();

			if (nextGallery.length == 0) {
				nextGallery = $('.gallery:first-child');
			}
			next = nextGallery.find('li:first-child');
		}
		changeGalleryImage(next, changeGallery);
	})

	function changeGalleryImage(newImage, changeGallery) {
		if (changeGallery) {
			$('.gallery.active').removeClass('active');
			newImage.parents('.gallery').addClass('active');
		}
		$('.gallery li.active').removeClass('active');
		newImage.addClass('active');
	}

	function openSection(section) {
		$('.site-section.active, #menu a.active').removeClass('active');
		$('.site-section#' + section + ', #menu a[href="#!/' + section + '"]').addClass('active');
	}

	routie({
		'!/:section': function(section) {
			openSection(section);
		},
		'': function() {
			console.log('gallery default');
			openSection('gallery');
		}
	});

	$('#menu-toggle').click(function(){
		$('#menu').toggleClass('responsive-open');
	})
});




