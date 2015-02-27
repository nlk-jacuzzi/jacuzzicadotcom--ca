<?php
if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_page-home-options',
		'title' => 'Page – Home Options',
		'fields' => array (
			array (
				'key' => 'field_53a0afa9f3fd0',
				'label' => 'Hero Section',
				'name' => 'nlk_hero_section',
				'type' => 'repeater',
				'instructions' => 'Only the first two options created will be used for the site but they can be reordered as needed.',
				'sub_fields' => array (
					array (
						'key' => 'field_53a0aff9f3fd1',
						'label' => 'Background Image',
						'name' => 'nlk_background_image',
						'type' => 'image',
						'column_width' => '',
						'save_format' => 'object',
						'preview_size' => 'large',
						'library' => 'all',
					),
					array (
						'key' => 'field_53a0b010f3fd2',
						'label' => 'Hero Title',
						'name' => 'nlk_hero_title',
						'type' => 'text',
						'column_width' => '',
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => '',
					),
					array (
						'key' => 'field_53a0b019f3fd3',
						'label' => 'Button Text',
						'name' => 'nlk_button_text',
						'type' => 'text',
						'column_width' => '',
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => '',
					),
					array (
						'key' => 'field_53a0b025f3fd4',
						'label' => 'Button Link',
						'name' => 'nlk_button_link',
						'type' => 'text',
						'column_width' => '',
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => '',
					),
				),
				'row_min' => '',
				'row_limit' => '',
				'layout' => 'row',
				'button_label' => 'Add Hero',
			),
			array (
				'key' => 'field_53a0b071f3fzz',
				'label' => 'Hide Callout Section',
				'name' => 'nlk_hide_callout',
				'type' => 'true_false',
				'message' => 'Yes',
				'default_value' => 0,
			),
			array (
				'key' => 'field_53a0b055f3fd5',
				'label' => 'Callout Section',
				'name' => 'nlk_callout_section',
				'type' => 'repeater',
				'instructions' => 'Only the first two options will be used but they can be reordered as needed.',
				'sub_fields' => array (
					array (
						'key' => 'field_53a0b071f3fd6',
						'label' => 'Background Image',
						'name' => 'nlk_background_image',
						'type' => 'image',
						'column_width' => '',
						'save_format' => 'object',
						'preview_size' => 'medium',
						'library' => 'all',
					),
					array (
						'key' => 'field_53a0b086f3fd7',
						'label' => 'Box Title',
						'name' => 'nlk_box_title',
						'type' => 'text',
						'column_width' => '',
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => '',
					),
					array (
						'key' => 'field_53a0b098f3fd8',
						'label' => 'Box Caption',
						'name' => 'nlk_box_caption',
						'type' => 'text',
						'column_width' => '',
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => '',
					),
					array (
						'key' => 'field_53a0b0a3f3fd9',
						'label' => 'Button Text',
						'name' => 'nlk_button_text',
						'type' => 'text',
						'column_width' => '',
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => '',
					),
					array (
						'key' => 'field_53a0b0bdf3fda',
						'label' => 'Button Link',
						'name' => 'nlk_button_link',
						'type' => 'text',
						'column_width' => '',
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => '',
					),
				),
				'row_min' => '',
				'row_limit' => '',
				'layout' => 'row',
				'button_label' => 'Add Row',
			),
			array (
				'key' => 'field_53a0b0a3f3faa',
				'label' => 'Video Embed ID',
				'name' => 'nlk_video_embed',
				'type' => 'text',
				'column_width' => '',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_53a0b0a3f3fbb',
				'label' => 'Video Title',
				'name' => 'nlk_video_title',
				'type' => 'text',
				'column_width' => '',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_53a0d55a8d8d8',
				'label' => 'Accordion Section',
				'name' => 'nlk_accordion_section',
				'type' => 'repeater',
				'sub_fields' => array (
					array (
						'key' => 'field_53a0d58b8d8d9',
						'label' => 'Title',
						'name' => 'nlk_accordion_title',
						'type' => 'text',
						'column_width' => '',
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => '',
					),
					array (
						'key' => 'field_53a0d5a28d8da',
						'label' => 'Content',
						'name' => 'nlk_accordion_content',
						'type' => 'textarea',
						'column_width' => '',
						'default_value' => '',
						'placeholder' => '',
						'maxlength' => '',
						'rows' => '',
						'formatting' => 'html',
					),
				),
				'row_min' => '',
				'row_limit' => '',
				'layout' => 'table',
				'button_label' => 'Add Item',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'page-home.php',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => array (
				0 => 'the_content',
				1 => 'excerpt',
				2 => 'discussion',
				3 => 'comments',
				4 => 'author',
				5 => 'format',
				6 => 'featured_image',
				7 => 'categories',
				8 => 'tags',
				9 => 'send-trackbacks',
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_social-options',
		'title' => 'Social Options',
		'fields' => array (
			array (
				'key' => 'field_53a1ed1928784',
				'label' => 'Pinterest Link',
				'name' => 'nlk_pinterest_link',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_53a1ed0c28783',
				'label' => 'Facebook Link',
				'name' => 'nlk_facebook_link',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_53a1ed3328785',
				'label' => 'Instagram Link',
				'name' => 'nlk_instagram_link',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_53a1ed3b28786',
				'label' => 'Youtube Link',
				'name' => 'nlk_youtube_link',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_53a1ed9528787',
				'label' => 'Houzz Link',
				'name' => 'nlk_houzz_link',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_53a1eda028788',
				'label' => 'Twitter Link',
				'name' => 'nlk_twitter_link',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'page-home.php',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'side',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}
?>