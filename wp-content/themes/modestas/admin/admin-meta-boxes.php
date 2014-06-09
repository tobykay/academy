<?php
/**
 * Initialize the meta boxes. 
 */
add_action( 'admin_init', '_custom_meta_boxes' );

/**
 * Meta Boxes demo code.
 *
 * You can find all the available option types
 * in demo-theme-options.php.
 *
 * @return    void
 *
 * @access    private
 * @since     2.0
 */
function _custom_meta_boxes() {
  
  /**
   * Create a custom meta boxes array that we pass to 
   * the OptionTree Meta Box API Class.
   */
  $my_meta_box = array(
    'id'          => 'custom_meta_box',
    'title'       => 'Modestas Meta Box',
    'desc'        => '',
    'pages'       => array( 'post' ),
    'context'     => 'normal',
    'priority'    => 'high',
    'fields'      => array(
		
		array(
          'label'       => 'Comments type',
          'id'          => 'comments_type',
          'type'        => 'radio',
          'desc'        => 'What type of comments do you prefer?',
		  'class'		=> 'show_to_all',
          'choices'     => array(
            array(
              'label'       => 'Standard wordpress comments',
              'value'       => 'standard'
            ),
            array(
              'label'       => 'Facebook comments',
              'value'       => 'facebook'
            ),
            array(
              'label'       => 'None',
              'value'       => 'none'
            )
          ),
          'std'         => 'standard'
        ),
	  
      array(
        'label'       => 'Link',
        'id'          => 'link_content',
        'type'        => 'text',
        'desc'        => 'Type your link here.',
        'std'         => '',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => 'post-format-link'
      ),
      array(
        'label'       => 'Link text',
        'id'          => 'link_text',
        'type'        => 'text',
        'desc'        => 'Link text to display',
        'std'         => '',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => 'post-format-link'
      ),
      array(
        'label'       => 'Link target',
        'id'          => 'link_target',
        'type'        => 'checkbox',
		'choices' => array(
			array (
				'label' => 'Open link in a new page',
				'value' => '1'
			)
		),
        'desc'        => 'Check if you want the link to open a new page.',
        'std'         => '',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => 'post-format-link'
      ),
	  
      array(
        'label'       => 'Quote content',
        'id'          => 'quote_content',
        'type'        => 'textarea_simple',
        'desc'        => 'Type your quote content here',
        'std'         => '',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => 'post-format-quote'
      ),
	  
      array(
        'label'       => 'Embed code',
        'id'          => 'embed_code',
        'type'        => 'textarea_simple',
        'desc'        => 'Paste your embed code here',
        'std'         => '',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => 'post-format-video'
      ),
      
      array(
        'label'       => 'Slider',
        'id'          => 'check_slider',
        'type'        => 'checkbox',
		'choices' => array(
			array (
				'label' => 'Slider gallery',
				'value' => '1'
			)
		),
        'desc'        => 'Check if you want slider gallery.',
        'std'         => '',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => 'post-format-image'
      ),
	  array(
        'id'          => 'slides',
        'label'       => 'Slides',
        'desc'        => '',
        'std'         => '',
        'type'        => 'list_item',
        'class'       => 'post-format-image',
        'choices'     => array(),
        'settings'    => array(
          array(
            'label'       => 'Example',
            'id'          => 'examplefield',
            'type'        => 'upload',
            'desc'        => 'Example text',
            'std'         => '',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'class'       => ''
          )
        )
      )
    )
  );
  
  /**
   * Register our meta boxes using the 
   * ot_register_meta_box() function.
   */
  ot_register_meta_box( $my_meta_box );

}