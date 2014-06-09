/*global jQuery:false, root:false, App:false*/

var page = 1;
var $loadMore = jQuery('.load-more');
var $noMore = jQuery('.no-more');

var AppAjax = {
	
	start: function() {
		
		AppAjax.bind();
		
	},
	
	bind: function() {
		
		$loadMore.bind('click', function(e) {
			
			e.preventDefault();
			
			jQuery(this).addClass('loading');
			
			AppAjax.loadMore(jQuery(this));
			
		});
		
	},
	
	loadMore: function($element) {
		
		jQuery.ajax({

			type: "POST",

			url: root.ajax,
			
			dataType: 'json',

			data: 'action=get_my_option&page=' + page + '&' + $element.attr('data-filter'),

			success: function(data) {
				
				page++;
				
				jQuery('#container').append(data.html);
				
				if(data.total === 6) {
					$loadMore.appendTo(jQuery('#container'));
				}else{
					$loadMore.hide();
					$noMore.appendTo(jQuery('#container')).show();
				}
				
				App.bind();
				App.slides();
				App.lightbox();
				App.containerSize(true);
				
				$loadMore.removeClass('loading');

			}

		});
		
	}
	
};

AppAjax.start();