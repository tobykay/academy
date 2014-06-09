AdminBoxes = {
	
	start: function() {
		
		AdminBoxes.onFormatChange();
		AdminBoxes.checkFormats(jQuery('#post-formats-select .post-format:checked').attr('id'));
		
	},
	
	hideAllBoxes: function() {
		
		jQuery('#custom_meta_box .format-settings').hide();
		jQuery('#custom_meta_box .show_to_all').closest('.format-settings').show();
		
	},
	
	onFormatChange: function() {
		jQuery('#post-formats-select .post-format').change(function() {
			AdminBoxes.checkFormats(jQuery(this).attr('id'));
		});
	},
	
	checkFormats: function(format) {
		
		AdminBoxes.hideAllBoxes();
		
		if(jQuery('#custom_meta_box .' + format).length) {
			
			jQuery('#custom_meta_box .' + format).closest('.format-settings').show();
			
		}
	}
};

jQuery(document).ready(function() {
    
	AdminBoxes.start();
	
});