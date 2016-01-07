<?php

/* ----------------------------------------------------------------------------------- */
/* Initializes all the theme settings option fields for posts area. */
/* ----------------------------------------------------------------------------------- */

$options = array(
    
    /* ----------------------------------------------------------------------------------- */
    /* After Textarea */
    /* ----------------------------------------------------------------------------------- */
     /* Post Media */
    array('name' => __('Media', 'tfuse'),
        'id' => TF_THEME_PREFIX . '_media',
        'type' => 'metabox',
        'context' => 'normal'
    ),
    // Single Image Position
    array('name' => __('Image Alignment', 'tfuse'),
        'desc' => __('Select your preferred image  alignment', 'tfuse'),
        'id' => TF_THEME_PREFIX . '_single_img_position',
        'value' => '',
        'options' => array(
            '' => array($url . 'full_width.png', __('Don\'t apply an alignment', 'tfuse')),
            'alignleft' => array($url . 'left_off.png', __('Align to the left', 'tfuse')),
            'alignright' => array($url . 'right_off.png', __('Align to the right', 'tfuse'))
            ),
        'type' => 'images',
        'divider' => true
    ), 
    array('name' => __('Image Position','tfuse'),
        'desc' => __('Select post image position.','tfuse'),
        'id' => TF_THEME_PREFIX . '_img_pos',
        'value' => '',
        'options' => array('after' => __('After Title','tfuse'),'before' => __('Before Title','tfuse')),
        'type' => 'select'
    ),
    array('name' => __('Post Settings', 'tfuse'),
        'id' => TF_THEME_PREFIX . '_settings',
        'type' => 'metabox',
        'context' => 'normal'
    ),
    array('name' => __('Select Game','tfuse'),
        'desc' => __('Select game post for this post by starting typing game post title.','tfuse'),
        'id' => TF_THEME_PREFIX . '_game_select',
        'value' => '',
        'type' => 'multi',
        'limit' => 1,
        'subtype' => 'game'
    ),
		
		
		array('name' => __('Press Author','tfuse'),
				'desc' => __('Press author name','tfuse'),
				'id' => TF_THEME_PREFIX . '_press_author',
				'value' => '',
				'type' => 'text'
		),
		array('name' => __('Source','tfuse'),
				'desc' => __('press source','tfuse'),
				'id' => TF_THEME_PREFIX . '_press_source',
				'value' => '',
				'type' => 'text'
		),
	/* Content Options */
    array('name' => __('Content Options','tfuse'),
        'id' => TF_THEME_PREFIX . '_content_option',
        'type' => 'metabox',
        'context' => 'normal'
    ),
    array('name' => __('Hide Title','tfuse'),
        'desc' => __('Hide Title.','tfuse'),
        'id' => TF_THEME_PREFIX . '_hide_title',
        'value' => '',
        'type' => 'checkbox',
        'divider' => true
    ),
	array('name' => __('Is Arabic','tfuse'),
			'desc' => __('Is Content Arabic?','tfuse'),
			'id' => TF_THEME_PREFIX . '_is_arabic',
			'value' => '',
			'type' => 'checkbox',
			'divider' => true
	),
    array('name' => __('Shortcodes on Top','tfuse'),
        'desc' => __('In this textarea you can input your prefered custom shotcodes.','tfuse'),
        'id' => TF_THEME_PREFIX . '_content_on_top',
        'value' => '',
        'type' => 'textarea'
    ),
    array('name' => __('Shortcodes before Content','tfuse'),
        'desc' => __('In this textarea you can input your prefered custom shotcodes.','tfuse'),
        'id' => TF_THEME_PREFIX . '_content_top',
        'value' => '',
        'type' => 'textarea'
    ),
    array('name' => __('Shortcodes after Content','tfuse'),
        'desc' => __('In this textarea you can input your prefered custom shotcodes.','tfuse'),
        'id' => TF_THEME_PREFIX . '_content_bottom',
        'value' => '',
        'type' => 'textarea'
    )
);

?>