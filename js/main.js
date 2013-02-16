$(function() {
	var $container = $("#container");
	if ($container.length > 0) {
		$container.imagesLoaded(function() {
			$container.masonry({
				itemSelector: '.item',
				//columnWidth: 240,
				isAnimated: true,
				animationOptions: {
					duration: 400,
					easing: 'linear',
					queue: false
				}
			});
		});
	}
});