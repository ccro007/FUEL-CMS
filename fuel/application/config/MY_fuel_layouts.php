<?php 
/*
|--------------------------------------------------------------------------
| MY Custom Layouts
|--------------------------------------------------------------------------
|
| specify the name of the layouts and their fields associated with them
*/


/*$config['layouts']['main'] = array(
	'parts' => $config['layouts_path'].'main'
);*/

// main layout fields
$config['layout_fields']['main'] =  array(
	'copy' => array('type' => 'copy', 'label' => lang('layout_field_main_copy')),
	'Sections' => array('type' => 'fieldset', 'label' => 'Sections', 'class' => 'collapsible'),
	'sections' => array(
					'display_label' => FALSE,
					'type' => 'template', 
					'label' => 'Page sections', 
					'fields' => array(
							'layout' => array('type' => 'select', 'options' => array('img_right' => 'Image Right', 'img_left' => 'Image Left', 'img_right_50' => 'Image Right 50%', 'img_left_50' => 'Image Left 50%')),
							'title' => '',
							'action' => '',
							'content' => array('type' => 'textarea'),
							'image' => array('type' => 'asset', 'multiple' => FALSE, 'img_styles' => 'float: left; width: 100px;'),
							// 'images' => array('type' => 'template', 'repeatable' => TRUE, 'view' => '_admin/fields/images', 'limit' => 3, 'fields' => 
							// 										array('image' => array('type' => 'asset', 'multiple' => TRUE))
							// 										),
						),
					
					'view' => '_admin/fields/section', 
//					'post_process' =>  array($custom_fields, 'section_post_process'), 
					//'js' => array('jquery.repeatable'),
					'class' => 'repeatable',
					'add_extra' => FALSE,
					'repeatable' => TRUE,
					//'fieldset' => 'Sections',
					),
	'Header' => array('type' => 'fieldset', 'label' => 'Header', 'class' => 'collapsible'),
	'page_title' => array('label' => lang('layout_field_page_title')),
	'meta_description' => array('label' => lang('layout_field_meta_description')),
	'meta_keywords' => array('label' => lang('layout_field_meta_keywords')),
	'Body' => array('type' => 'fieldset', 'label' => 'Body', 'class' => 'collapsible'),
	'body' => array('label' => lang('layout_field_body'), 'type' => 'textarea', 'description' => lang('layout_field_body_description')),
	'body_class' => array('label' => lang('layout_field_body_class')),
	// 'nested' => array('type' => 'nested', 'display_label' => FALSE, 'fields' => array(
	// 													'test1' => array('type' => 'textarea'),
	// 													'test2' => array('type' => 'enum', ''),
	// 												)),

	);
	$config['layout_fields']['testing'] = $config['layout_fields']['main'];



/* End of file MY_fuel_layouts.php */
/* Location: ./application/config/MY_fuel_layouts.php */

