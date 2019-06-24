(function($) {

	// navigation
	var OnePageNav = function() {
		var navToggler = $('.js-site-nav-toggle');
		/*$("#ftco-navbar ul li a[href^='#']").on('click', function(e) {
			e.preventDefault();
			var hash = this.hash;
				
			$('html, body').animate({
				scrollTop: $(hash).offset().top
			}, 700, 'easeInOutExpo', function(){
				window.location.hash = hash;
			});
		});*/
		$("#ftco-navbar ul li a[href^='#']").on('click', function(e){
			if ( navToggler.is(':visible') ) {
				navToggler.click();
			}
		});
	
		// $('body').on('activate.bs.scrollspy', function () {
		//   console.log('nice');
		// })
	};
	OnePageNav();

	$(window).scroll(function() {
	
		var $this = $(this),
			st = $this.scrollTop(),
			navbar = $('.menu-burger-wrap');
	
		if (st > 150) {
			if ( !navbar.hasClass('scrolled') ) {
				navbar.addClass('scrolled');  
			}
		} 
		if (st < 150) {
			if ( navbar.hasClass('scrolled') ) {
				navbar.removeClass('scrolled sleep');
			}
		} 
		if ( st > 350 ) {
			if ( !navbar.hasClass('awake') ) {
				navbar.addClass('awake'); 
			}
		}
		if ( st < 350 ) {
			if ( navbar.hasClass('awake') ) {
				navbar.removeClass('awake');
				navbar.addClass('sleep');
			}
		}
	
	}); 
	
	
	$('.js-site-nav-toggle').on('click', function(e) {
	
		var $this = $(this);
		e.preventDefault();
	
		if ( $('body').hasClass('menu-open') ) {
		  	$this.removeClass('active');
			$('.site-menu .site-menu-inner > ul > li').each(function(i) {
	
				var that = $(this);
				setTimeout(function() {
					that.removeClass('is-show');
				}, i * 100);
	
			// $(this).removeClass('is-show');
			});
		  
			setTimeout(function() {
				// $('.site-menu').fadeOut(400);
				$('.site-menu').removeClass('site-menu-show');
			}, 800);
		
			$('body').removeClass('menu-open');
		} else {
	
			// $('.site-menu').fadeIn(400);
			$('.site-menu').addClass('site-menu-show');
		
			$this.addClass('active');
			$('body').addClass('menu-open');
		
			setTimeout(function() {
				$('.site-menu .site-menu-inner > ul > li').each(function(i) {
				var that = $(this);
				setTimeout(function() {
					that.addClass('is-show');
				}, i * 100);
		
				});
			}, 500);
		  
		}
	
	});

	/* Map */

	//$(".visited,.lived").hover(function() {
	//	$(".tooltiptext").text($(this).attr('title'));
	//});
	
	if($(".visited,.lived").hover(function() {
		$('.hovertext').addClass('active');
	}, function(){
		$('.hovertext').removeClass('active');
	}));
	
	$(".visited,.lived").mousemove(function(e) {
		$(".hovertext").text($(this).attr('title'));
		$(".hovertext").css({
		'top': e.pageY + 20,
		'left': e.pageX + 20
		}).fadeIn('slow');
	});

	// /**
	// * Langues
	// */
	window.windowHeight = window.innerHeight;
	window.windowWidth = window.innerWidth;
	$('[data-init="dropdown"]').each(function(index, el) {

		$(el).find('a.dropdown__toggle').on('click', function(event) {
			event.preventDefault();
			$(el).find('.dropdown__content').toggleClass('open');
			$(el).toggleClass('open');
		});
		
		$(document).on('click', function(event) {
			var $content = $(el).find('.dropdown__content');
			if ($.contains(el, event.target)) {
				return;
			}
		
			if ($(el).hasClass('open')) {
				$(el).removeClass('open');
			}
		
			if ($content.hasClass('open')) {
				$content.removeClass('open');
			}
		});
	});

	/*
	$("#list-lang").on("click", function(){
		var v = $(this).val();
		if(v=="FR"){
		    include('lang/fr-lang.php'); 
		}else{
			include('lang/en-lang.php'); 
		} 
	  });
	*/

	var	$window = $(window),
		$body = $('body');

	// Breakpoints.
		breakpoints({
			default:   ['1681px',   null       ],
			xlarge:    ['1281px',   '1680px'   ],
			large:     ['981px',    '1280px'   ],
			medium:    ['737px',    '980px'    ],
			small:     ['481px',    '736px'    ],
			xsmall:    ['361px',    '480px'    ],
			xxsmall:   [null,       '360px'    ]
		});

	// Play initial animations on page load.
		$window.on('load', function() {
			window.setTimeout(function() {
				$body.removeClass('is-preload');
			}, 100);
		});

		$window.scroll(function() {
			var s = $window.scrollTop();
			if (s > 250) {
				$('.scrollup').fadeIn();
			} else {
				$('.scrollup').fadeOut();
			}
			$('.scrollup').click(function () {
				$("html, body").animate({ scrollTop: 0 }, 500);
				return false;
			});
			$("html, body").bind("scroll mousedown DOMMouseScroll mousewheel keyup", function(){
				$('html, body').stop();
			});
		});

	// Hack: Enable IE workarounds.
		if (browser.name == 'ie')
			$body.addClass('is-ie');

	// Mobile?
		if (browser.mobile)
			$body.addClass('is-mobile');

	// Scrolly.
		$('.scrolly')
			.scrolly({
				offset: 100
			});

	// Polyfill: Object fit.
		if (!browser.canUse('object-fit')) {

			$('.image[data-position]').each(function() {

				var $this = $(this),
					$img = $this.children('img');

				// Apply img as background.
					$this
						.css('background-image', 'url("' + $img.attr('src') + '")')
						.css('background-position', $this.data('position'))
						.css('background-size', 'cover')
						.css('background-repeat', 'no-repeat');

				// Hide img.
					$img
						.css('opacity', '0');

			});

			$('.gallery > a').each(function() {

				var $this = $(this),
					$img = $this.children('img');

				// Apply img as background.
					$this
						.css('background-image', 'url("' + $img.attr('src') + '")')
						.css('background-position', 'center')
						.css('background-size', 'cover')
						.css('background-repeat', 'no-repeat');

				// Hide img.
					$img
						.css('opacity', '0');

			});

		}	

	// Gallery.
		$('.gallery')
			.on('click', 'a', function(event) {

				var $a = $(this),
					$gallery = $a.parents('.gallery'),
					$modal = $gallery.children('.modal'),
					$modalImg = $modal.find('img'),
					$modalP = $modal.find('p'),
					href = $a.attr('href');

				// Not an image? Bail.
					if (!href.match(/\.(jpg|JPG|gif|png|PNG|mp4)$/))
						return;

				// Prevent default.
					event.preventDefault();
					event.stopPropagation();

				// Locked? Bail.
					if ($modal[0]._locked)
						return;

				// Lock.
					$modal[0]._locked = true;

				// Set src.
					$modalImg.attr('src', href);					

				// Set visible.
					$modal.addClass('visible');

				// Focus.
					$modal.focus();

				// Delay.
					setTimeout(function() {

						// Unlock.
							$modal[0]._locked = false;

					}, 600);

			})
			.on('click', '.modal', function(event) {

				var $modal = $(this),
					$modalImg = $modal.find('img');
					$modalP = $modal.find('p');

				// Locked? Bail.
					if ($modal[0]._locked)
						return;

				// Already hidden? Bail.
					if (!$modal.hasClass('visible'))
						return;

				// Stop propagation.
					event.stopPropagation();

				// Lock.
					$modal[0]._locked = true;

				// Clear visible, loaded.
					$modal
						.removeClass('loaded')

				// Delay.
					setTimeout(function() {

						$modal
							.removeClass('visible')

						setTimeout(function() {

							// Clear src.
								$modalImg.attr('src', '');								

							// Unlock.
								$modal[0]._locked = false;

							// Focus.
								$body.focus();

						}, 475);

					}, 125);

			})
			.on('keypress', '.modal', function(event) {

				var $modal = $(this);

				// Escape? Hide modal.
					if (event.keyCode == 27)
						$modal.trigger('click');

			})
			.on('mouseup mousedown mousemove', '.modal', function(event) {

				// Stop propagation.
					event.stopPropagation();

			})
			.prepend('<div class="modal" tabIndex="-1"><div class="inner"><img src="" /></div></div>')
				.find('img')
					.on('load', function(event) {

						var $modalImg = $(this),
							$modal = $modalImg.parents('.modal');

						setTimeout(function() {

							// No longer visible? Bail.
								if (!$modal.hasClass('visible'))
									return;

							// Set loaded.
								$modal.addClass('loaded');

						}, 275);

					});
	
})(jQuery);