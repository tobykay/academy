<?php
/**
 * Initialize the custom theme options.
 */
add_action( 'admin_init', 'custom_theme_options' );

/**
 * Build the custom settings & update OptionTree.
 */
function custom_theme_options() {
  /**
   * Get a copy of the saved settings array. 
   */
  $saved_settings = get_option( 'option_tree_settings', array() );
  
  /**
   * Custom settings array that will eventually be 
   * passes to the OptionTree Settings API Class.
   */
  $custom_settings = array( 
    'contextual_help' => array( 
      'sidebar'       => ''
    ),
    'sections'        => array( 
      array(
        'id'          => 'general',
        'title'       => 'General'
      ),
      array(
        'id'          => 'section_seocial',
        'title'       => 'Social'
      ),
      array(
        'id'          => 'other',
        'title'       => 'Other'
      )
    ),
    'settings'        => array( 
      array(
        'id'          => 'logo_img',
        'label'       => 'Logo image',
        'desc'        => 'This is the logo image',
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'general',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'logo_url',
        'label'       => 'Logo url',
        'desc'        => '',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'general',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'main_color',
        'label'       => 'Main color',
        'desc'        => 'The main site color.',
        'std'         => '',
        'type'        => 'colorpicker',
        'section'     => 'general',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'background_color',
        'label'       => 'Background color',
        'desc'        => 'Pick up a color for the background color',
        'std'         => '',
        'type'        => 'colorpicker',
        'section'     => 'general',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'bg_image',
        'label'       => 'Background image',
        'desc'        => '',
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'general',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'footer_text',
        'label'       => 'Footer text',
        'desc'        => 'HTML tags allowed',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'general',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'facebook',
        'label'       => 'Facebook',
        'desc'        => '',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'section_seocial',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'twitter',
        'label'       => 'Twitter',
        'desc'        => '',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'section_seocial',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'google_plus',
        'label'       => 'Google plus',
        'desc'        => '',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'section_seocial',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'youtube',
        'label'       => 'Youtube',
        'desc'        => '',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'section_seocial',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'pinterest',
        'label'       => 'Pinterest',
        'desc'        => '',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'section_seocial',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'instagram',
        'label'       => 'Instagram',
        'desc'        => '',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'section_seocial',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'linkedin',
        'label'       => 'Linkedin',
        'desc'        => '',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'section_seocial',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'skype',
        'label'       => 'Skype',
        'desc'        => '',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'section_seocial',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'tumblr',
        'label'       => 'Tumblr',
        'desc'        => '',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'section_seocial',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'dribbble',
        'label'       => 'Dribbble',
        'desc'        => '',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'section_seocial',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'flickr',
        'label'       => 'Flickr',
        'desc'        => '',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'section_seocial',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'github',
        'label'       => 'Github',
        'desc'        => '',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'section_seocial',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'fav_icon',
        'label'       => 'Fav icon',
        'desc'        => 'Upload your fav icon. Size: 14px x 14px.',
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'other',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'google_id',
        'label'       => 'Google analytics id',
        'desc'        => 'Please insert only the Google Analytic ID. The tracking ID is a string like UA-000000-01',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'other',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'custom_css',
        'label'       => 'Custom CSS',
        'desc'        => 'Add some custom styles for your theme',
        'std'         => '',
        'type'        => 'textarea-simple',
        'section'     => 'other',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      )
    )
  );
  
  /* allow settings to be filtered before saving */
  $custom_settings = apply_filters( 'option_tree_settings_args', $custom_settings );
  
  /* settings are not the same update the DB */
  if ( $saved_settings !== $custom_settings ) {
    update_option( 'option_tree_settings', $custom_settings ); 
  }
  
}