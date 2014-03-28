<?php

/**
 * @file
 * This file is empty by default because the base theme chain (Alpha & Omega) provides
 * all the basic functionality. However, in case you wish to customize the output that Drupal
 * generates through Alpha & Omega this file is a good place to do so.
 * 
 * Alpha comes with a neat solution for keeping this file as clean as possible while the code
 * for your subtheme grows. Please read the README.txt in the /preprocess and /process subfolders
 * for more information on this topic.
 */
 
 $attrs = array(
 	'href' => 'http://fonts.googleapis.com/css?family=Raleway:400,300,600,700',
	'rel' => 'stylesheet',
	'media' => 'screen',
 );
 
 drupal_add_html_head_link($attrs);
 
  $attrs = array(
 	'href' => 'http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css',
	'rel' => 'stylesheet',
	'media' => 'all',
 );
 
  drupal_add_html_head_link($attrs);
  
  function wireframe_css_alter(&$css){
	  
	  unset($css['sites/all/themes/omega/omega/css/omega-text.css']);
	  unset($css['modules/system/system.menus.css']);
	  unset($css['sites/all/modules/contrib/tb_megamenu/css/default.css']);
  };
  
  function wireframe_form_search_block_form_alter(&$form, &$form_state, $form_id) {
  	$form['actions']['submit']['#value'] = '' ;
	$form['search_block_form']['#attributes']['placeholder'] = 'Search RESNA...';
	$form['search_block_form']['#size'] = 30;
};



function wireframe_block_view_alter(&$data, $block) {
//	$block_id = $block->module . '_' . $block->delta;
//	
//	switch($block_id){
//		case 'nicer_menus_1':
//			//krumo($data['content']['#markup']);
//			$qp =  qp($data['content']['#markup']);
//			$qp->find('ul')->addClass('marcus');
//			$data['content']['#markup'] = $qp->top()->find('body')->innerHTML();
//		
//		break;
//	}
	
}


function wireframe_preprocess_block(&$vars){
	 $block_id = $vars['block']->module . '-' . $vars['block']->delta;
	 $classes = &$vars['classes_array'];
	 $title_classes = &$vars['title_attributes_array']['class'];
	 $content_classes = &$vars['content_attributes_array']['class'];
	 
	 /* Add global classes to all blocks */
	 $vars['attributes_array']['id'] = $block_id;
	  $content_classes[] = 'block-content';
	  
	  switch($block_id){
		case 'menu_block-1':
			$title_classes[] = 'list-group__item';
			$title_classes[] = 'list-group__heading';
			
			
			$ul = qp($vars['content'], 'ul');
			$ul->find('li')->addClass('list-group__item')->top()->find('ul');
			
			$vars['content'] = $ul->contents()->unwrap()->top()->find('body')->innerhtml();
	    break;

//		case 'block-21':
//			$title_classes[] = 'panel__heading';
//	    break;

	  }
	  
	  if(in_array('panel', $classes)){
		  $title_classes[] = 'panel__heading';
	  };
}