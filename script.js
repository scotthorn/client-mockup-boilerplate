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
	$('.gallery').on('click', 'li.active img', function(){
		$('.next').click();
	})
	$('.gallery').on('hover', 'li.active img', function(){
		$('.next').addClass('hover');
	}, function(){
		$('.next').removeClass('hover');
	})

	$('.thumbs img').click(function(){
		console.log('thumb clicked');
		var src = $(this).attr('src'),
			newImage = $('.gallery img[src="' + src + '"]').parents('li');
		console.log(src);
		console.log(newImage);
		changeGalleryImage(newImage, true);	
		routie('!/photos');
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
		$('#main').scrollTop(0);
		$('#page').attr('class', section);
	}

	routie({
		'!/:section': function(section) {
			openSection(section);
		},
		'': function() {
			console.log('photos default');
			openSection('photos');
		}
	});

	$('#menu-toggle').click(function(){
		$('#menu').toggleClass('responsive-open');
	})
});

$(window).load(function(){
	$('.thumbs ul').masonry( {
		itemSelector: 'li',
		columnWidth: 224,
		fitWidth: true,
	})
})
