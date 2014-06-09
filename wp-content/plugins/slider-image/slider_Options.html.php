<?php
if (function_exists('current_user_can'))
    if (!current_user_can('manage_options')) {
        die('Access Denied');
    }
if (!function_exists('current_user_can')) {
    die('Access Denied');
}
function      html_showStyles($param_values, $op_type)
{
    ?>
<div class="wrap">
<div id="poststuff">
	<!--	<?php $path_site = plugins_url("Front_images", __FILE__); ?>
		<input type="hidden" id="type" name="type" value="<?php echo isset($_POST['type']) ? $_POST['type'] : '1'; ?>"/>
 
          <script>
            function change_type(type) {
                type = (type == '' ? 3 : type);
                document.getElementById('type').value = type;
                for ($i = 2; $i < 9; $i++) {
                    if ($i == type) {
                        document.getElementById('fieldset_' + $i).style.display = '';
                        document.getElementById('div_' + $i).style.background = '#C5C5C5';
                    }
                    else {
                        document.getElementById('fieldset_' + $i).style.display = 'none';
                        document.getElementById('div_' + $i).style.background = '#F4F4F4';
                    }
                }
            }
            window.onload = function() { change_type(<?php echo isset($_POST['type']) ? $_POST['type'] : '2'; ?>); };            
          </script>
-->
		<div id="post-body-content" class="slider-options">
			<div id="post-body-heading">
				<h3>General Options</h3>
				<a onclick="document.getElementById('adminForm').submit()" class="save-slider-options button-primary">Save</a>
				<script>
						jQuery(document).ready(function ($) {
								
								jQuery("#slideup<?php echo $key; ?>").click(function () {
									window.parent.uploadID = jQuery(this).prev('input');
									formfield = jQuery('.upload').attr('name');
									tb_show('', 'media-upload.php?type=image&amp;TB_iframe=true');
									return false;
								});
								window.send_to_editor = function (html) {
									imgurl = jQuery('img', html).attr('src');
									window.parent.uploadID.val(imgurl);
									tb_remove();
								};
							});
							
				</script>		
			</div>
			<div id="slider-options-list">
			<form action="admin.php?page=Options_slider_styles&task=save" method="post" id="adminForm" name="adminForm">
		
			<div class="options-block" id="options-block-title">
				<div class="has-background">
					<label for="title-container-width">Title Width</label>
					<div class="slider-container">
						<input name="params[slider_title_width]" id="title-container-width" data-slider-range="1,100"  type="text" data-slider="true"  data-slider-highlight="true" value="<?php echo $param_values['slider_title_width']; ?>" />
						<span><?php echo $param_values['slider_title_width']; ?>%</span>
					</div>
					<div style="clear:both;"></div>
				</div>
				<!--<div>
					<label for="params[slider_title_height]">Title height</label>
					<div class="slider-container">
						<input name="params[slider_title_height]" id="title-container-height" data-slider-range="1,100" type="text" data-slider="true"  data-slider-highlight="true" value="<?php echo $param_values['slider_title_height']; ?>" />
						<span><?php echo $param_values['slider_title_height']; ?>%</span>
					</div>
				</div>-->
				<div>
					<label for="slider_title_has_margin">Title Has Margin</label>	
					<input type="hidden" value="off" name="params[slider_title_has_margin]" />					
					<input type="checkbox" id="slider_title_has_margin"  <?php if($param_values['slider_title_has_margin']  == 'on'){ echo 'checked="checked"'; } ?>  name="params[slider_title_has_margin]"  value="on" />
				</div>
				<div class="has-background">
					<label for="slider_title_font_size">Title Font Size</label>
					<input type="text" name="params[slider_title_font_size]" id="slider_title_font_size" value="<?php echo $param_values['slider_title_font_size']; ?>" class="text" />
					<span>px</span>
				</div>
				<div>
					<label for="slider_title_color">Title Text Color</label>
						<input name="params[slider_title_color]" type="text" class="color" id="slider_title_color" value="#<?php echo $param_values['slider_title_color']; ?>" size="10" />
				</div>
				<div  class="has-background">
					<label for="slider_title_text_align">Title Text Align</label>
					<select id="slider_title_text_align" name="params[slider_title_text_align]">
						  <option <?php if($param_values['slider_title_text_align'] == 'justify'){ echo 'justify'; } ?> value="justify">Full width</option>
						  <option <?php if($param_values['slider_title_text_align'] == 'center'){ echo 'selected'; } ?> value="center">Center</option>
						  <option <?php if($param_values['slider_title_text_align'] == 'left'){ echo 'selected'; } ?> value="left">Left</option>
						  <option <?php if($param_values['slider_title_text_align'] == 'right'){ echo 'selected'; } ?> value="right">Right</option>
					</select>
				</div>
				<div>
					<label for="title-background-transparency">Title Background Transparency</label>
					<div class="slider-container">
						<input name="params[slider_title_background_transparency]" id="title-background-transparency" data-slider-highlight="true"  data-slider-values="0,10,20,30,40,50,60,70,80,90,100" type="text" data-slider="true" value="<?php echo $param_values['slider_title_background_transparency']; ?>" />
						<span><?php echo $param_values['slider_title_background_transparency']; ?>%</span>
					</div>
				</div>
				<div class="has-background">
					<label for="slider_title_background_color">Title Background Color</label>
					<input name="params[slider_title_background_color]" type="text" class="color" id="slider_title_background_color" value="#<?php echo $param_values['slider_title_background_color']; ?>" size="10" />
				</div>
				<div>
					<label for="slider_title_border_size">Title Border Size</label>
					<input type="text" name="params[slider_title_border_size]" id="slider_title_border_size" value="<?php echo $param_values['slider_title_border_size']; ?>" class="text" />
					<span>px</span>
				</div>
				<div class="has-background">
					<label for="slider_title_border_color">Title Border Color</label>
					<input name="params[slider_title_border_color]" type="text" class="color" id="slider_title_border_color" value="#<?php echo $param_values['slider_title_border_color']; ?>" size="10">
				</div>
				<div>
					<label for="slider_title_border_radius">Title Border Radius</label>
					<input type="text" name="params[slider_title_border_radius]" id="slider_title_border_radius" value="<?php echo $param_values['slider_title_border_radius']; ?>" class="text" />
					<span>px</span>
				</div>
				<div class="has-height has-background">
					<label for="">Title Position</label>
						<div>
						<table class="bws_position_table">
							<tbody>
							  <tr>
								<td><input type="radio" value="left-top" id="slideshow_title_top-left" name="params[slider_title_position]" <?php if($param_values['slider_title_position'] == 'left-top'){ echo 'checked="checked"'; } ?> /></td>
								<td><input type="radio" value="center-top" id="slideshow_title_top-center" name="params[slider_title_position]" <?php if($param_values['slider_title_position'] == 'center-top'){ echo 'checked="checked"'; } ?> /></td>
								<td><input type="radio" value="right-top" id="slideshow_title_top-right" name="params[slider_title_position]"  <?php if($param_values['slider_title_position'] == 'right-top'){ echo 'checked="checked"'; } ?> /></td>
							  </tr>
							  <tr>
								<td><input type="radio" value="left-middle" id="slideshow_title_middle-left" name="params[slider_title_position]" <?php if($param_values['slider_title_position'] == 'left-middle'){ echo 'checked="checked"'; } ?> /></td>
								<td><input type="radio" value="center-middle" id="slideshow_title_middle-center" name="params[slider_title_position]" <?php if($param_values['slider_title_position'] == 'center-middle'){ echo 'checked="checked"'; } ?> /></td>
								<td><input type="radio" value="right-middle" id="slideshow_title_middle-right" name="params[slider_title_position]" <?php if($param_values['slider_title_position'] == 'right-middle'){ echo 'checked="checked"'; } ?> /></td>
							  </tr>
							  <tr>
								<td><input type="radio" value="left-bottom" id="slideshow_title_bottom-left" name="params[slider_title_position]" <?php if($param_values['slider_title_position'] == 'left-bottom'){ echo 'checked="checked"'; } ?> /></td>
								<td><input type="radio" value="center-bottom" id="slideshow_title_bottom-center" name="params[slider_title_position]" <?php if($param_values['slider_title_position'] == 'center-bottom'){ echo 'checked="checked"'; } ?> /></td>
								<td><input type="radio" value="right-bottom" id="slideshow_title_bottom-right" name="params[slider_title_position]" <?php if($param_values['slider_title_position'] == 'right-bottom'){ echo 'checked="checked"'; } ?> /></td>
							  </tr>
							</tbody>	
						</table>
						</div>
				</div>
			</div>
			<div class="options-block" id="options-block-description">
				<div class="has-background">
					<label for="description-container-width">Description Width</label>
					<div class="slider-container">
						<input name="params[slider_description_width]" id="description-container-width" data-slider-range="1,100"  type="text" data-slider="true"  data-slider-highlight="true" value="<?php echo $param_values['slider_description_width']; ?>" />
						<span><?php echo $param_values['slider_description_width']; ?>%</span>
					</div>
					<div style="clear:both;"></div>
				</div>
				<!--<div>
					<label for="params[slider_description_height]">description height</label>
					<div class="slider-container">
						<input name="params[slider_description_height]" id="description-container-height" data-slider-range="1,100" type="text" data-slider="true"  data-slider-highlight="true" value="<?php echo $param_values['slider_description_height']; ?>" />
						<span><?php echo $param_values['slider_description_height']; ?>%</span>
					</div>
				</div>-->
				<div>
					<label for="slider_description_has_margin">Description Has Margin</label>
						<input type="hidden" value="off" name="params[slider_description_has_margin]" />
						<input type="checkbox" id="slider_description_has_margin"  <?php if($param_values['slider_description_has_margin']  == 'on'){ echo 'checked="checked"'; } ?>  name="params[slider_description_has_margin]" value="on" />
				</div>
				<div class="has-background">
					<label for="slider_description_font_size">Description Font Size</label>
					<input type="text" name="params[slider_description_font_size]" id="slider_description_font_size" value="<?php echo $param_values['slider_description_font_size']; ?>" class="text" />
					<span>px</span>
				</div>
				<div>
					<label for="slider_description_color">Description Text Color</label>
					<input name="params[slider_description_color]" type="text" class="color" id="slider_description_color" value="#<?php echo $param_values['slider_description_color']; ?>" size="10" />
				</div>
				<div  class="has-background">
					<label for="slider_description_text_align">Description Text Align</label>
					<select id="slider_description_text_align" name="params[slider_description_text_align]">	
					  <option <?php if($param_values['slider_description_text_align'] == 'justify'){ echo 'justify'; } ?> value="justify">Full width</option>
					  <option <?php if($param_values['slider_description_text_align'] == 'center'){ echo 'center'; } ?> value="center">Center</option>
					  <option <?php if($param_values['slider_description_text_align'] == 'left'){ echo 'left'; } ?> value="left">Left</option>
					  <option <?php if($param_values['slider_description_text_align'] == 'right'){ echo 'right'; } ?> value="right">Right</option>
					</select>
				</div>
				<div>
					<label for="description-background-transparency">Description Background Transparency</label>
					<div class="slider-container">
						<input name="params[slider_description_background_transparency]" id="description-background-transparency" data-slider-highlight="true"  data-slider-values="0,10,20,30,40,50,60,70,80,90,100" type="text" data-slider="true" value="<?php echo $param_values['slider_description_background_transparency']; ?>" />
						<span><?php echo $param_values['slider_description_background_transparency']; ?>%</span>
					</div>
				</div>
				<div class="has-background">
					<label for="slider_description_background_color">Description Background Color</label>
						<input name="params[slider_description_background_color]" type="text" class="color" id="slider_description_background_color" value="#<?php echo $param_values['slider_description_background_color']; ?>" size="10">
				</div>
				<div>
					<label for="slider_description_border_size">Description Border Size</label>
					<input type="text" name="params[slider_description_border_size]" id="slider_description_border_size" value="<?php echo $param_values['slider_description_border_size']; ?>" class="text" />
					<span>px</span>
				</div>
				<div class="has-background">
					<label for="slider_description_border_color">Description Border Color</label>
					<input name="params[slider_description_border_color]" type="text" class="color" id="slider_description_border_color" value="#<?php echo $param_values['slider_description_border_color']; ?>" size="10">
				</div>
				<div>
					<label for="slider_description_border_radius">Description Border Radius</label>
					<input type="text" name="params[slider_description_border_radius]" id="slider_description_border_radius" value="<?php echo $param_values['slider_description_border_radius']; ?>" class="text" />
					<span>px</span>
				</div>
				<div class="has-height has-background">
					<label for="params[slider_description_position]">Description Position</label>
						<div>
						<table class="bws_position_table">
							<tbody>
							  <tr>
								<td><input type="radio" value="left-top" id="slideshow_description_top-left" name="params[slider_description_position]" <?php if($param_values['slider_description_position'] == 'left-top'){ echo 'checked="checked"'; } ?> /></td>
								<td><input type="radio" value="center-top" id="slideshow_description_top-center" name="params[slider_description_position]" <?php if($param_values['slider_description_position'] == 'center-top'){ echo 'checked="checked"'; } ?> /></td>
								<td><input type="radio" value="right-top" id="slideshow_description_top-right" name="params[slider_description_position]"  <?php if($param_values['slider_description_position'] == 'right-top'){ echo 'checked="checked"'; } ?> /></td>
							  </tr>
							  <tr>
								<td><input type="radio" value="left-middle" id="slideshow_description_middle-left" name="params[slider_description_position]" <?php if($param_values['slider_description_position'] == 'left-middle'){ echo 'checked="checked"'; } ?> /></td>
								<td><input type="radio" value="center-middle" id="slideshow_description_middle-center" name="params[slider_description_position]" <?php if($param_values['slider_description_position'] == 'center-middle'){ echo 'checked="checked"'; } ?> /></td>
								<td><input type="radio" value="right-middle" id="slideshow_description_middle-right" name="params[slider_description_position]" <?php if($param_values['slider_description_position'] == 'right-middle'){ echo 'checked="checked"'; } ?> /></td>
							  </tr>
							  <tr>
								<td><input type="radio" value="left-bottom" id="slideshow_description_bottom-left" name="params[slider_description_position]" <?php if($param_values['slider_description_position'] == 'left-bottom'){ echo 'checked="checked"'; } ?> /></td>
								<td><input type="radio" value="center-bottom" id="slideshow_description_bottom-center" name="params[slider_description_position]" <?php if($param_values['slider_description_position'] == 'center-bottom'){ echo 'checked="checked"'; } ?> /></td>
								<td><input type="radio" value="right-bottom" id="slideshow_description_bottom-right" name="params[slider_description_position]" <?php if($param_values['slider_description_position'] == 'right-bottom'){ echo 'checked="checked"'; } ?> /></td>
							  </tr>
							</tbody>	
						</table>
						</div>
				</div>
			</div>
			<div class="options-block" id="options-block-slider">
				<div>
					<label for="slider_crop_image">Image Behaviour</label>
					<select id="slider_crop_image" name="params[slider_crop_image]">
						  <option <?php if($param_values['slider_crop_image'] == 'crop'){ echo 'selected'; } ?> value="crop">Natural</option>
						  <option <?php if($param_values['slider_crop_image'] == 'resize'){ echo 'selected'; } ?> value="resize">Resize</option>
					</select>
				</div>
				<div class="has-background">
					<label for="slider_slider_background_color">Slider Background Color</label>
						<input name="params[slider_slider_background_color]" type="text" class="color" id="slider_slider_background_color" value="#<?php echo $param_values['slider_slider_background_color']; ?>" size="10">
				</div>
			
				<div>
					<label for="slider_slideshow_border_size">Slideshow Border Size</label>
					<input type="text" name="params[slider_slideshow_border_size]" id="slider_slideshow_border_size" value="<?php echo $param_values['slider_slideshow_border_size']; ?>" class="text" />
				</div>
				<div class="has-background">
					<label for="slider_slideshow_border_color">Slideshow Border Color</label>
						<input name="params[slider_slideshow_border_color]" type="text" class="color" id="slider_slideshow_border_color" value="#<?php echo $param_values['slider_slideshow_border_color']; ?>" size="10">
				</div>
				<div>
					<label for="slider_slideshow_border_radius">Slideshow Border radius</label>
					<input type="text" name="params[slider_slideshow_border_radius]" id="slider_slideshow_border_radius" value="<?php echo $param_values['slider_slideshow_border_radius']; ?>" class="text" />
				</div>
			</div>
			<div class="options-block" id="options-block-navigation">
				<div>
					<label for="slider_show_arrows">Show Navigation Arrows </label>
					<input type="hidden" value="off" name="params[slider_show_arrows]" />		
					<input type="checkbox" id="slider_show_arrows" <?php if($param_values['slider_show_arrows']  == 'on'){ echo 'checked="checked"'; } ?> name="params[slider_show_arrows]" value="on" />
				</div>
				<div class="has-background">
					<label for="slider_dots_position">Navigation Dots Position / Hide Dots</label>
					<select id="slider_dots_position" name="params[slider_dots_position]">
						  <option <?php if($param_values['slider_dots_position'] == 'none'){ echo 'selected'; } ?> value="none">Dont Show</option>
						  <option <?php if($param_values['slider_dots_position'] == 'top'){ echo 'selected'; } ?> value="top">Top</option>
						  <option <?php if($param_values['slider_dots_position'] == 'bottom'){ echo 'selected'; } ?> value="bottom">Bottom</option>
					</select>
				</div>
				<div>
					<label for="slider_dots_color">Navigation Dots Color</label>
					<input type="text" class="color" name="params[slider_dots_color]" id="slider_dots_color" value="<?php echo $param_values['slider_dots_color']; ?>" class="text" />
				</div>
				<div class="has-background">
					<label for="slider_active_dot_color">Navigation Active Dot Color</label>
					<input type="text" class="color" name="params[slider_active_dot_color]" id="slider_active_dot_color" value="<?php echo $param_values['slider_active_dot_color']; ?>" class="text" />
				</div>
				<div class="has-height" style="padding-top:20px;">
					<label for="">Navigation Type</label>
				</div>
			</div>
				<div class="has-height" style="clear:both;padding:10px 0px 0px 80px;">
					<div>
					<ul id="arrows-type">
						<li <?php if($param_values['slider_navigation_type'] == 1){ echo 'class="active"'; } ?>>
							<div class="image-block">
								<img src="<?php echo $path_site; ?>/arrows/arrows.simple.png" alt="" />
							</div>
							<input type="radio" name="params[slider_navigation_type]" value="1" <?php if($param_values['slider_navigation_type'] == 1){ echo 'checked="checked"'; } ?>>
						</li>
						<li <?php if($param_values['slider_navigation_type'] == 2){ echo 'class="active"'; } ?>>
							<div class="image-block">
								<img src="<?php echo $path_site; ?>/arrows/arrows.circle.shadow.png" alt="" />
							</div>
							<input type="radio" name="params[slider_navigation_type]" value="2" <?php if($param_values['slider_navigation_type'] == 2){ echo 'checked="checked"'; } ?>>
						</li>
						<li <?php if($param_values['slider_navigation_type'] == 3){ echo 'class="active"'; } ?>>
							<div class="image-block">
								<img src="<?php echo $path_site; ?>/arrows/arrows.circle.simple.dark.png" alt="" />
							</div>
							<input type="radio" name="params[slider_navigation_type]" value="3" <?php if($param_values['slider_navigation_type'] == 3){ echo 'checked="checked"'; } ?>>
						</li>
						
						<li <?php if($param_values['slider_navigation_type'] == 4){ echo 'class="active"'; } ?>>
							<div class="image-block">
								<img src="<?php echo $path_site; ?>/arrows/arrows.cube.dark.png" alt="" />
							</div>
							<input type="radio" name="params[slider_navigation_type]" value="4" <?php if($param_values['slider_navigation_type'] == 4){ echo 'checked="checked"'; } ?>>
						</li>
						<li <?php if($param_values['slider_navigation_type'] == 5 ){ echo 'class="active"'; } ?>>
							<div class="image-block">
								<img src="<?php echo $path_site; ?>/arrows/arrows.light.blue.png" alt="" />
							</div>
							<input type="radio" name="params[slider_navigation_type]" value="5" <?php if($param_values['slider_navigation_type'] == 5){ echo 'checked="checked"'; } ?>>
						</li>
						<li <?php if($param_values['slider_navigation_type'] == 6){ echo 'class="active"'; } ?>>
							<div class="image-block">
								<img src="<?php echo $path_site; ?>/arrows/arrows.light.cube.png" alt="" />
							</div>
							<input type="radio" name="params[slider_navigation_type]" value="6" <?php if($param_values['slider_navigation_type'] == 6){ echo 'checked="checked"'; } ?>>
						</li>
						<li <?php if($param_values['slider_navigation_type'] == 7){ echo 'class="active"'; } ?>>
							<div class="image-block">
								<img src="<?php echo $path_site; ?>/arrows/arrows.light.transparent.circle.png" alt="" />
							</div>
							<input type="radio" name="params[slider_navigation_type]" value="7" <?php if($param_values['slider_navigation_type'] == 7){ echo 'checked="checked"'; } ?>>
						</li>
						<li <?php if($param_values['slider_navigation_type'] == 8){ echo 'class="active"'; } ?>>
							<div class="image-block">
								<img src="<?php echo $path_site; ?>/arrows/arrows.png" alt="" />
							</div>
							<input type="radio" name="params[slider_navigation_type]" value="8" <?php if($param_values['slider_navigation_type'] == 8){ echo 'checked="checked"'; } ?>>
						</li>
						<li <?php if($param_values['slider_navigation_type'] == 9){ echo 'class="active"'; } ?>>
							<div class="image-block">
								<img src="<?php echo $path_site; ?>/arrows/arrows.circle.blue.png" alt="" />
							</div>
							<input type="radio" name="params[slider_navigation_type]" value="9" <?php if($param_values['slider_navigation_type'] == 9){ echo 'checked="checked"'; } ?>>
						</li>	
						<li <?php if($param_values['slider_navigation_type'] == 10){ echo 'class="active"'; } ?>>
							<div class="image-block">
								<img src="<?php echo $path_site; ?>/arrows/arrows.circle.green.png" alt="" />
							</div>
							<input type="radio" name="params[slider_navigation_type]" value="10" <?php if($param_values['slider_navigation_type'] == 10){ echo 'checked="checked"'; } ?>>
						</li>
						<li <?php if($param_values['slider_navigation_type'] == 11){ echo 'class="active"'; } ?>>
							<div class="image-block">
								<img src="<?php echo $path_site; ?>/arrows/arrows.blue.retro.png" alt="" />
							</div>
							<input type="radio" name="params[slider_navigation_type]" value="11" <?php if($param_values['slider_navigation_type'] == 11){ echo 'checked="checked"'; } ?>>
						</li>
						<li <?php if($param_values['slider_navigation_type'] == 12){ echo 'class="active"'; } ?>>
							<div class="image-block">
								<img src="<?php echo $path_site; ?>/arrows/arrows.green.retro.png" alt="" />
							</div>
							<input type="radio" name="params[slider_navigation_type]" value="12" <?php if($param_values['slider_navigation_type'] == 12){ echo 'checked="checked"'; } ?>>
						</li>	
						<li <?php if($param_values['slider_navigation_type'] == 13){ echo 'class="active"'; } ?>>
								<div class="image-block">
									<img src="<?php echo $path_site; ?>/arrows/arrows.red.circle.png" alt="" />
								</div>
								<input type="radio" name="params[slider_navigation_type]" value="13" <?php if($param_values['slider_navigation_type'] == 13){ echo 'checked="checked"'; } ?>>
						</li>	
						<li class="color" <?php if($param_values['slider_navigation_type'] == 14){ echo 'class="active"'; } ?>>
								<div class="image-block">
									<img src="<?php echo $path_site; ?>/arrows/arrows.triangle.white.png" alt="" />
								</div>
								<input type="radio" name="params[slider_navigation_type]" value="14" <?php if($param_values['slider_navigation_type'] == 14){ echo 'checked="checked"'; } ?>>
						</li>	
						<li <?php if($param_values['slider_navigation_type'] == 15){ echo 'class="active"'; } ?>>
								<div class="image-block">
									<img src="<?php echo $path_site; ?>/arrows/arrows.ancient.png" alt="" />
								</div>
								<input type="radio" name="params[slider_navigation_type]" value="15" <?php if($param_values['slider_navigation_type'] == 15){ echo 'checked="checked"'; } ?>>
						</li>
						<li <?php if($param_values['slider_navigation_type'] == 16){ echo 'class="active"'; } ?>>
								<div class="image-block">
									<img src="<?php echo $path_site; ?>/arrows/arrows.black.out.png" alt="" />
								</div>
								<input type="radio" name="params[slider_navigation_type]" value="16" <?php if($param_values['slider_navigation_type'] == 16){ echo 'checked="checked"'; } ?>>
						</li>							
					</ul>
					</div>
				</div>

			<div id="post-body-footer">
				
				<a onclick="document.getElementById('adminForm').submit()" class="save-slider-options button-primary">Save</a>
				<div class="clear"></div>
				<script>
						jQuery(document).ready(function ($) {
								
								jQuery("#slideup<?php echo $key; ?>").click(function () {
									window.parent.uploadID = jQuery(this).prev('input');
									formfield = jQuery('.upload').attr('name');
									tb_show('', 'media-upload.php?type=image&amp;TB_iframe=true');
									return false;
								});
								window.send_to_editor = function (html) {
									imgurl = jQuery('img', html).attr('src');
									window.parent.uploadID.val(imgurl);
									tb_remove();
								};
							});
							
				</script>		
			</div>
			</form>
		</div>
	</div>
</div>
</div>
<input type="hidden" name="option" value=""/>
<input type="hidden" name="task" value=""/>
<input type="hidden" name="controller" value="options"/>
<input type="hidden" name="op_type" value="styles"/>
<input type="hidden" name="boxchecked" value="0"/>

<?php
}