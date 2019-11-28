$(function () {
	/*
		https://www.jqueryscript.net/animation/Smooth-Mouse-Wheel-Scrolling-Plugin-With-jQuery-easeScroll.html
		===========================*/
	$("html").easeScroll({
		frameRate: 60,
		animationTime: 1000,
		stepSize: 90,
		pulseAlgorithm: 1,
		pulseScale: 8,
		pulseNormalize: 1,
		accelerationDelta: 20,
		accelerationMax: 1,
		keyboardSupport: true,
		arrowScroll: 50,
		touchpadSupport: true,
		fixedBackground: true
	});

	let slider = function () {
		$('#js-slider').slick({
			arrows: false,
			fade: true,
			responsive: [
				{
					breakpoint: 720,
					settings: {
						dots: true
					}
				},
			]
		});

		$('.slider__button--left').on('click', function (e) {
			e.preventDefault();
			$('#js-slider').slick('slickPrev');
		});

		$('.slider__button--right').on('click', function (e) {
			e.preventDefault();
			$('#js-slider').slick('slickNext');
		});
	};
	slider();

	let sandwitch = function () {
		$('.sandwitch').on('click', function () {
			$('#js-main-menu').toggleClass('fixed');
			$('body').toggleClass('fixed');
			$(this).toggleClass('sandwitch--active');
			$(this).closest('.sandwitch-wrapper').toggleClass('sandwitch--active');
		});
	};
	sandwitch();

	let tabs = function () {
		$('#js-tabs a').on('click', function (e) {
			e.preventDefault();
			let id = $(this).attr('href');
			$('#js-tabs a').removeClass('active');
			$(this).addClass('active');
			$('#js-tabs-content .tabs-content__item').fadeOut(100);
			$(id).fadeIn(100);
		});
	};
	tabs();

	let showPopup = function () {
		$('#js-show-popup').on('click', function (e) {
			e.preventDefault();
			$('#js-overlay').fadeIn(100);
			$('#js-popup').addClass('active');
		});
		$('#js-overlay, #js-popup-close').on('click', function () {
			$('#js-overlay').fadeOut(100);
			$('#js-popup').removeClass('active');
		});
	};
	showPopup();

	let wow = new WOW(
		{
			boxClass: 'wow',      // animated element css class (default is wow)
			animateClass: 'animated', // animation css class (default is animated)
			offset: 60,          // distance to the element when triggering the animation (default is 0)
			mobile: true,       // trigger animations on mobile devices (default is true)
			live: true,       // act on asynchronously loaded content (default is true)
			callback: function (box) {
				// the callback is fired every time an animation is started
				// the argument that is passed in is the DOM node being animated
			},
			scrollContainer: null // optional scroll container selector, otherwise use window
		}
	);
	wow.init();
});




//# sourceMappingURL=data:application/json;charset=utf8;base64,eyJ2ZXJzaW9uIjozLCJuYW1lcyI6W10sIm1hcHBpbmdzIjoiIiwic291cmNlcyI6WyJtYWluLmpzIl0sInNvdXJjZXNDb250ZW50IjpbIiQoZnVuY3Rpb24gKCkge1xyXG5cdC8qXHJcblx0XHRodHRwczovL3d3dy5qcXVlcnlzY3JpcHQubmV0L2FuaW1hdGlvbi9TbW9vdGgtTW91c2UtV2hlZWwtU2Nyb2xsaW5nLVBsdWdpbi1XaXRoLWpRdWVyeS1lYXNlU2Nyb2xsLmh0bWxcclxuXHRcdD09PT09PT09PT09PT09PT09PT09PT09PT09PSovXHJcblx0JChcImh0bWxcIikuZWFzZVNjcm9sbCh7XHJcblx0XHRmcmFtZVJhdGU6IDYwLFxyXG5cdFx0YW5pbWF0aW9uVGltZTogMTAwMCxcclxuXHRcdHN0ZXBTaXplOiA5MCxcclxuXHRcdHB1bHNlQWxnb3JpdGhtOiAxLFxyXG5cdFx0cHVsc2VTY2FsZTogOCxcclxuXHRcdHB1bHNlTm9ybWFsaXplOiAxLFxyXG5cdFx0YWNjZWxlcmF0aW9uRGVsdGE6IDIwLFxyXG5cdFx0YWNjZWxlcmF0aW9uTWF4OiAxLFxyXG5cdFx0a2V5Ym9hcmRTdXBwb3J0OiB0cnVlLFxyXG5cdFx0YXJyb3dTY3JvbGw6IDUwLFxyXG5cdFx0dG91Y2hwYWRTdXBwb3J0OiB0cnVlLFxyXG5cdFx0Zml4ZWRCYWNrZ3JvdW5kOiB0cnVlXHJcblx0fSk7XHJcblxyXG5cdGxldCBzbGlkZXIgPSBmdW5jdGlvbiAoKSB7XHJcblx0XHQkKCcjanMtc2xpZGVyJykuc2xpY2soe1xyXG5cdFx0XHRhcnJvd3M6IGZhbHNlLFxyXG5cdFx0XHRmYWRlOiB0cnVlLFxyXG5cdFx0XHRyZXNwb25zaXZlOiBbXHJcblx0XHRcdFx0e1xyXG5cdFx0XHRcdFx0YnJlYWtwb2ludDogNzIwLFxyXG5cdFx0XHRcdFx0c2V0dGluZ3M6IHtcclxuXHRcdFx0XHRcdFx0ZG90czogdHJ1ZVxyXG5cdFx0XHRcdFx0fVxyXG5cdFx0XHRcdH0sXHJcblx0XHRcdF1cclxuXHRcdH0pO1xyXG5cclxuXHRcdCQoJy5zbGlkZXJfX2J1dHRvbi0tbGVmdCcpLm9uKCdjbGljaycsIGZ1bmN0aW9uIChlKSB7XHJcblx0XHRcdGUucHJldmVudERlZmF1bHQoKTtcclxuXHRcdFx0JCgnI2pzLXNsaWRlcicpLnNsaWNrKCdzbGlja1ByZXYnKTtcclxuXHRcdH0pO1xyXG5cclxuXHRcdCQoJy5zbGlkZXJfX2J1dHRvbi0tcmlnaHQnKS5vbignY2xpY2snLCBmdW5jdGlvbiAoZSkge1xyXG5cdFx0XHRlLnByZXZlbnREZWZhdWx0KCk7XHJcblx0XHRcdCQoJyNqcy1zbGlkZXInKS5zbGljaygnc2xpY2tOZXh0Jyk7XHJcblx0XHR9KTtcclxuXHR9O1xyXG5cdHNsaWRlcigpO1xyXG5cclxuXHRsZXQgc2FuZHdpdGNoID0gZnVuY3Rpb24gKCkge1xyXG5cdFx0JCgnLnNhbmR3aXRjaCcpLm9uKCdjbGljaycsIGZ1bmN0aW9uICgpIHtcclxuXHRcdFx0JCgnI2pzLW1haW4tbWVudScpLnRvZ2dsZUNsYXNzKCdmaXhlZCcpO1xyXG5cdFx0XHQkKCdib2R5JykudG9nZ2xlQ2xhc3MoJ2ZpeGVkJyk7XHJcblx0XHRcdCQodGhpcykudG9nZ2xlQ2xhc3MoJ3NhbmR3aXRjaC0tYWN0aXZlJyk7XHJcblx0XHRcdCQodGhpcykuY2xvc2VzdCgnLnNhbmR3aXRjaC13cmFwcGVyJykudG9nZ2xlQ2xhc3MoJ3NhbmR3aXRjaC0tYWN0aXZlJyk7XHJcblx0XHR9KTtcclxuXHR9O1xyXG5cdHNhbmR3aXRjaCgpO1xyXG5cclxuXHRsZXQgdGFicyA9IGZ1bmN0aW9uICgpIHtcclxuXHRcdCQoJyNqcy10YWJzIGEnKS5vbignY2xpY2snLCBmdW5jdGlvbiAoZSkge1xyXG5cdFx0XHRlLnByZXZlbnREZWZhdWx0KCk7XHJcblx0XHRcdGxldCBpZCA9ICQodGhpcykuYXR0cignaHJlZicpO1xyXG5cdFx0XHQkKCcjanMtdGFicyBhJykucmVtb3ZlQ2xhc3MoJ2FjdGl2ZScpO1xyXG5cdFx0XHQkKHRoaXMpLmFkZENsYXNzKCdhY3RpdmUnKTtcclxuXHRcdFx0JCgnI2pzLXRhYnMtY29udGVudCAudGFicy1jb250ZW50X19pdGVtJykuZmFkZU91dCgxMDApO1xyXG5cdFx0XHQkKGlkKS5mYWRlSW4oMTAwKTtcclxuXHRcdH0pO1xyXG5cdH07XHJcblx0dGFicygpO1xyXG5cclxuXHRsZXQgc2hvd1BvcHVwID0gZnVuY3Rpb24gKCkge1xyXG5cdFx0JCgnI2pzLXNob3ctcG9wdXAnKS5vbignY2xpY2snLCBmdW5jdGlvbiAoZSkge1xyXG5cdFx0XHRlLnByZXZlbnREZWZhdWx0KCk7XHJcblx0XHRcdCQoJyNqcy1vdmVybGF5JykuZmFkZUluKDEwMCk7XHJcblx0XHRcdCQoJyNqcy1wb3B1cCcpLmFkZENsYXNzKCdhY3RpdmUnKTtcclxuXHRcdH0pO1xyXG5cdFx0JCgnI2pzLW92ZXJsYXksICNqcy1wb3B1cC1jbG9zZScpLm9uKCdjbGljaycsIGZ1bmN0aW9uICgpIHtcclxuXHRcdFx0JCgnI2pzLW92ZXJsYXknKS5mYWRlT3V0KDEwMCk7XHJcblx0XHRcdCQoJyNqcy1wb3B1cCcpLnJlbW92ZUNsYXNzKCdhY3RpdmUnKTtcclxuXHRcdH0pO1xyXG5cdH07XHJcblx0c2hvd1BvcHVwKCk7XHJcblxyXG5cdGxldCB3b3cgPSBuZXcgV09XKFxyXG5cdFx0e1xyXG5cdFx0XHRib3hDbGFzczogJ3dvdycsICAgICAgLy8gYW5pbWF0ZWQgZWxlbWVudCBjc3MgY2xhc3MgKGRlZmF1bHQgaXMgd293KVxyXG5cdFx0XHRhbmltYXRlQ2xhc3M6ICdhbmltYXRlZCcsIC8vIGFuaW1hdGlvbiBjc3MgY2xhc3MgKGRlZmF1bHQgaXMgYW5pbWF0ZWQpXHJcblx0XHRcdG9mZnNldDogNjAsICAgICAgICAgIC8vIGRpc3RhbmNlIHRvIHRoZSBlbGVtZW50IHdoZW4gdHJpZ2dlcmluZyB0aGUgYW5pbWF0aW9uIChkZWZhdWx0IGlzIDApXHJcblx0XHRcdG1vYmlsZTogdHJ1ZSwgICAgICAgLy8gdHJpZ2dlciBhbmltYXRpb25zIG9uIG1vYmlsZSBkZXZpY2VzIChkZWZhdWx0IGlzIHRydWUpXHJcblx0XHRcdGxpdmU6IHRydWUsICAgICAgIC8vIGFjdCBvbiBhc3luY2hyb25vdXNseSBsb2FkZWQgY29udGVudCAoZGVmYXVsdCBpcyB0cnVlKVxyXG5cdFx0XHRjYWxsYmFjazogZnVuY3Rpb24gKGJveCkge1xyXG5cdFx0XHRcdC8vIHRoZSBjYWxsYmFjayBpcyBmaXJlZCBldmVyeSB0aW1lIGFuIGFuaW1hdGlvbiBpcyBzdGFydGVkXHJcblx0XHRcdFx0Ly8gdGhlIGFyZ3VtZW50IHRoYXQgaXMgcGFzc2VkIGluIGlzIHRoZSBET00gbm9kZSBiZWluZyBhbmltYXRlZFxyXG5cdFx0XHR9LFxyXG5cdFx0XHRzY3JvbGxDb250YWluZXI6IG51bGwgLy8gb3B0aW9uYWwgc2Nyb2xsIGNvbnRhaW5lciBzZWxlY3Rvciwgb3RoZXJ3aXNlIHVzZSB3aW5kb3dcclxuXHRcdH1cclxuXHQpO1xyXG5cdHdvdy5pbml0KCk7XHJcbn0pO1xyXG5cclxuXHJcblxyXG4iXSwiZmlsZSI6Im1haW4uanMifQ==
