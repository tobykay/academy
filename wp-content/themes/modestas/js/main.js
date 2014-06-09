/*global jQuery:false*/

var $window = jQuery(window);

var App = {
	
	start: function() {
		App.slides();
		App.lightbox();
		App.bind();
		App.mobile();
		App.onResize();
		App.onReady();
		
	},
	
	onReady: function() {
		
		jQuery(document).ready(function() {
			App.containerSize();
		});
		
	},
	
	onResize: function() {
		
		jQuery(window).resize(function() {
			
			App.containerSize();
			
		});
		
	},
	
	bind: function() {
		
		jQuery('.ago').unbind();
		
		jQuery('.ago').bind({
			mouseover: function() {
				jQuery(this).closest('.date-box').find('.date').stop(true,true).fadeIn(300);
			},
			mouseout: function() {
				jQuery(this).closest('.date-box').find('.date').stop(true,true).fadeOut(300);
			},
		});
		
	},
	
	mobile: function() {
		
		jQuery('#mobile-menu').bind('click', function(e) {
			e.preventDefault();
			jQuery('#secondary').toggleClass('visible');
		});
		
	},
	
	slides: function() {
		
		if(jQuery('.slides').length) {
			
			jQuery('.slides').each(function() {
				jQuery(this).owlCarousel({

					navigation:true,

					singleItem : true,

					autoHeight : true

				});
			});
		}
		
	},
	
	lightbox: function() {
		
		jQuery('.lightbox-link').magnificPopup({ 
			type: 'image',
			gallery: {enabled:true}
		});
		
		jQuery('.gallery').each(function() {
			jQuery(this).magnificPopup({
				delegate: 'a',
				type: 'image',
				gallery: {
					enabled:true
				}
			});
		});
		
		jQuery('.slides').each(function() {
			jQuery(this).magnificPopup({
				delegate: 'a.slide',
				type: 'image',
				gallery: {
					enabled:true
				}
			});
		});
		
	},
	
	containerSize: function(footer) {
		
		//jQuery('#container').height(jQuery(document).height()/* + (jQuery(document).height() > jQuery('#container').height() && !footer ? jQuery('#footer').height() : 0)*/);
		if(jQuery('#container').height() < jQuery('#sidebar').height()) {
			jQuery('#sidebar').height(jQuery(document).height() + jQuery('#footer').height());
			jQuery('#container').height(jQuery('#sidebar').height());
		}
		
	}
	
};

App.start();