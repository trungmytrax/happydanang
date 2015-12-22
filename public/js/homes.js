$(document).ready(function() {

	var footerHeight = $("footer").height();
	var screenHeight = $(document).height() - footerHeight - 10;
	console.log(screenHeight);
	$('.carousel-inner').css({
		height: screenHeight + 'px',
	});

	$("#grid-gallery").css({
		height: screenHeight + 'px',
	});
	$('#services').css({
		height: screenHeight + 'px',
	});
	$(".img-slide").css({
		height: screenHeight + 'px',
	});
	/*$('.img-slide').css({
		height: 100 + '%',
	});*/
	$(window).resize(function(event) {
		var footerHeight = $("footer").height();
		var screenHeight = $(document).height() - 10;
		$('.carousel-inner').css({
			height: screenHeight + 'px',
			overflow: 'hidden'
		});
		$("#grid-gallery").css({
			height: screenHeight + 'px',
		});
		$('#services').css({
			height: screenHeight + 'px',
		});
		$(".img-slide").css({
			height: screenHeight + 'px',
		});
	});
});