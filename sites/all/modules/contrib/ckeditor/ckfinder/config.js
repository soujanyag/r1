/*
Copyright (c) 2003-2012, CKSource - Frederico Knabben. All rights reserved.
For licensing, see LICENSE.html or http://ckfinder.com/license
*/

CKFinder.customConfig = function( config )
{
	// Define changes to default configuration here.
	// For the list of available options, check:
	// http://docs.cksource.com/ckfinder_2.x_api/symbols/CKFinder.config.html

	// Sample configuration options:
	// config.uiColor = '#BDE31E';
	// config.language = 'fr';
	// config.removePlugins = 'basket';

// JNET GENERAL

	$config['ResourceType'][] = Array(
'name' => 'General Documents',
'url' => $baseUrl . 'doc',
'directory' => $baseDir . 'doc',
'maxSize' => 2M,
'allowedExtensions' => 'doc,ppt,xls,docx,pptx,xlsx,',
'deniedExtensions' => '');

	$config['ResourceType'][] = Array(
'name' => 'General Images',
'url' => $baseUrl . 'images',
'directory' => $baseDir . 'images',
'maxSize' => 2M,
'allowedExtensions' => 'jpg,png,gif,',
'deniedExtensions' => '');

	$config['ResourceType'][] = Array(
'name' => 'General PDF',
'url' => $baseUrl . 'pdf',
'directory' => $baseDir . 'pdf',
'maxSize' => 2M,
'allowedExtensions' => 'pdf,',
'deniedExtensions' => '');

	$config['ResourceType'][] = Array(
'name' => 'General SWF',
'url' => $baseUrl . 'swf',
'directory' => $baseDir . 'swf',
'maxSize' => 2M,
'allowedExtensions' => 'swf,',
'deniedExtensions' => '');


	$config['ResourceType'][] = Array(
'name' => 'General WPD',
'url' => $baseUrl . 'wpd',
'directory' => $baseDir . 'wpd',
'maxSize' => 2M,
'allowedExtensions' => 'wpd,',
'deniedExtensions' => '');


	$config['ResourceType'][] = Array(
'name' => 'General Video',
'url' => $baseUrl . 'video',
'directory' => $baseDir . 'video',
'maxSize' => 2M,
'allowedExtensions' => 'wmv,',
'deniedExtensions' => '');


// Court Services
	$config['ResourceType'][] = Array(
'name' => 'General Documents',
'url' => $baseUrl . 'court_services/doc',
'directory' => $baseDir . 'court_services/doc',
'maxSize' => 2M,
'allowedExtensions' => 'doc,ppt,xls,docx,pptx,xlsx,',
'deniedExtensions' => '');

	$config['ResourceType'][] = Array(
'name' => 'General Images',
'url' => $baseUrl . 'court_services/images',
'directory' => $baseDir . 'court_services/images',
'maxSize' => 2M,
'allowedExtensions' => 'jpg,png,gif,',
'deniedExtensions' => '');

	$config['ResourceType'][] = Array(
'name' => 'General PDF',
'url' => $baseUrl . 'court_services/pdf',
'directory' => $baseDir . 'court_services/pdf',
'maxSize' => 2M,
'allowedExtensions' => 'pdf,',
'deniedExtensions' => '');

	$config['ResourceType'][] = Array(
'name' => 'General SWF',
'url' => $baseUrl . 'court_services/swf',
'directory' => $baseDir . 'court_services/swf',
'maxSize' => 2M,
'allowedExtensions' => 'swf,',
'deniedExtensions' => '');


	$config['ResourceType'][] = Array(
'name' => 'General WPD',
'url' => $baseUrl . 'court_services/wpd',
'directory' => $baseDir . 'court_services/wpd',
'maxSize' => 2M,
'allowedExtensions' => 'wpd,',
'deniedExtensions' => '');


// Facilities and Security
	$config['ResourceType'][] = Array(
'name' => 'General Documents',
'url' => $baseUrl . 'facilities_security/doc',
'directory' => $baseDir . 'facilities_security/doc',
'maxSize' => 2M,
'allowedExtensions' => 'doc,ppt,xls,docx,pptx,xlsx,',
'deniedExtensions' => '');

	$config['ResourceType'][] = Array(
'name' => 'General Images',
'url' => $baseUrl . 'facilities_security/images',
'directory' => $baseDir . 'facilities_security/images',
'maxSize' => 2M,
'allowedExtensions' => 'jpg,png,gif,',
'deniedExtensions' => '');

	$config['ResourceType'][] = Array(
'name' => 'General PDF',
'url' => $baseUrl . 'facilities_security/pdf',
'directory' => $baseDir . 'facilities_security/pdf',
'maxSize' => 2M,
'allowedExtensions' => 'pdf,',
'deniedExtensions' => '');

	$config['ResourceType'][] = Array(
'name' => 'General SWF',
'url' => $baseUrl . 'facilities_security/swf',
'directory' => $baseDir . 'facilities_security/swf',
'maxSize' => 2M,
'allowedExtensions' => 'swf,',
'deniedExtensions' => '');


	$config['ResourceType'][] = Array(
'name' => 'General WPD',
'url' => $baseUrl . 'facilities_security/wpd',
'directory' => $baseDir . 'facilities_security/wpd',
'maxSize' => 2M,
'allowedExtensions' => 'wpd,',
'deniedExtensions' => '');

// Financial Management
	$config['ResourceType'][] = Array(
'name' => 'General Documents',
'url' => $baseUrl . 'financial_management/doc',
'directory' => $baseDir . 'financial_management/doc',
'maxSize' => 2M,
'allowedExtensions' => 'doc,ppt,xls,docx,pptx,xlsx,',
'deniedExtensions' => '');

	$config['ResourceType'][] = Array(
'name' => 'General Images',
'url' => $baseUrl . 'financial_management/images',
'directory' => $baseDir . 'financial_management/images',
'maxSize' => 2M,
'allowedExtensions' => 'jpg,png,gif,',
'deniedExtensions' => '');

	$config['ResourceType'][] = Array(
'name' => 'General PDF',
'url' => $baseUrl . 'financial_management/pdf',
'directory' => $baseDir . 'financial_management/pdf',
'maxSize' => 2M,
'allowedExtensions' => 'pdf,',
'deniedExtensions' => '');

	$config['ResourceType'][] = Array(
'name' => 'General SWF',
'url' => $baseUrl . 'financial_management/swf',
'directory' => $baseDir . 'financial_management/swf',
'maxSize' => 2M,
'allowedExtensions' => 'swf,',
'deniedExtensions' => '');


	$config['ResourceType'][] = Array(
'name' => 'General WPD',
'url' => $baseUrl . 'financial_management/wpd',
'directory' => $baseDir . 'financial_management/wpd',
'maxSize' => 2M,
'allowedExtensions' => 'wpd,',
'deniedExtensions' => '');

// Human Resources
	$config['ResourceType'][] = Array(
'name' => 'General Documents',
'url' => $baseUrl . 'human_resources/doc',
'directory' => $baseDir . 'human_resources/doc',
'maxSize' => 2M,
'allowedExtensions' => 'doc,ppt,xls,docx,pptx,xlsx,',
'deniedExtensions' => '');

	$config['ResourceType'][] = Array(
'name' => 'General Images',
'url' => $baseUrl . 'human_resources/images',
'directory' => $baseDir . 'human_resources/images',
'maxSize' => 2M,
'allowedExtensions' => 'jpg,png,gif,',
'deniedExtensions' => '');

	$config['ResourceType'][] = Array(
'name' => 'General PDF',
'url' => $baseUrl . 'human_resources/pdf',
'directory' => $baseDir . 'human_resources/pdf',
'maxSize' => 2M,
'allowedExtensions' => 'pdf,',
'deniedExtensions' => '');

	$config['ResourceType'][] = Array(
'name' => 'General SWF',
'url' => $baseUrl . 'human_resources/swf',
'directory' => $baseDir . 'human_resources/swf',
'maxSize' => 2M,
'allowedExtensions' => 'swf,',
'deniedExtensions' => '');


	$config['ResourceType'][] = Array(
'name' => 'General WPD',
'url' => $baseUrl . 'human_resources/wpd',
'directory' => $baseDir . 'human_resources/wpd',
'maxSize' => 2M,
'allowedExtensions' => 'wpd,',
'deniedExtensions' => '');

// Information Technology
	$config['ResourceType'][] = Array(
'name' => 'General Documents',
'url' => $baseUrl . 'information_technology/doc',
'directory' => $baseDir . 'information_technology/doc',
'maxSize' => 2M,
'allowedExtensions' => 'doc,ppt,xls,docx,pptx,xlsx,',
'deniedExtensions' => '');

	$config['ResourceType'][] = Array(
'name' => 'General Images',
'url' => $baseUrl . 'information_technology/images',
'directory' => $baseDir . 'information_technology/images',
'maxSize' => 2M,
'allowedExtensions' => 'jpg,png,gif,',
'deniedExtensions' => '');

	$config['ResourceType'][] = Array(
'name' => 'General PDF',
'url' => $baseUrl . 'information_technology/pdf',
'directory' => $baseDir . 'information_technology/pdf',
'maxSize' => 2M,
'allowedExtensions' => 'pdf,',
'deniedExtensions' => '');

	$config['ResourceType'][] = Array(
'name' => 'General SWF',
'url' => $baseUrl . 'information_technology/swf',
'directory' => $baseDir . 'information_technology/swf',
'maxSize' => 2M,
'allowedExtensions' => 'swf,',
'deniedExtensions' => '');


	$config['ResourceType'][] = Array(
'name' => 'General WPD',
'url' => $baseUrl . 'information_technology/wpd',
'directory' => $baseDir . 'information_technology/wpd',
'maxSize' => 2M,
'allowedExtensions' => 'wpd,',
'deniedExtensions' => '');

// Judicial Conference
	$config['ResourceType'][] = Array(
'name' => 'General Documents',
'url' => $baseUrl . 'judicial_conference/doc',
'directory' => $baseDir . 'judicial_conference/doc',
'maxSize' => 2M,
'allowedExtensions' => 'doc,ppt,xls,docx,pptx,xlsx,',
'deniedExtensions' => '');

	$config['ResourceType'][] = Array(
'name' => 'General Images',
'url' => $baseUrl . 'judicial_conference/images',
'directory' => $baseDir . 'judicial_conference/images',
'maxSize' => 2M,
'allowedExtensions' => 'jpg,png,gif,',
'deniedExtensions' => '');

	$config['ResourceType'][] = Array(
'name' => 'General PDF',
'url' => $baseUrl . 'judicial_conference/pdf',
'directory' => $baseDir . 'judicial_conference/pdf',
'maxSize' => 2M,
'allowedExtensions' => 'pdf,',
'deniedExtensions' => '');

	$config['ResourceType'][] = Array(
'name' => 'General SWF',
'url' => $baseUrl . 'judicial_conference/swf',
'directory' => $baseDir . 'judicial_conference/swf',
'maxSize' => 2M,
'allowedExtensions' => 'swf,',
'deniedExtensions' => '');


	$config['ResourceType'][] = Array(
'name' => 'General WPD',
'url' => $baseUrl . 'judicial_conference/wpd',
'directory' => $baseDir . 'judicial_conference/wpd',
'maxSize' => 2M,
'allowedExtensions' => 'wpd,',
'deniedExtensions' => '');

// Legislation
	$config['ResourceType'][] = Array(
'name' => 'General Documents',
'url' => $baseUrl . 'legislation/doc',
'directory' => $baseDir . 'legislation/doc',
'maxSize' => 2M,
'allowedExtensions' => 'doc,ppt,xls,docx,pptx,xlsx,',
'deniedExtensions' => '');

	$config['ResourceType'][] = Array(
'name' => 'General Images',
'url' => $baseUrl . 'legislation/images',
'directory' => $baseDir . 'legislation/images',
'maxSize' => 2M,
'allowedExtensions' => 'jpg,png,gif,',
'deniedExtensions' => '');

	$config['ResourceType'][] = Array(
'name' => 'General PDF',
'url' => $baseUrl . 'legislation/pdf',
'directory' => $baseDir . 'legislation/pdf',
'maxSize' => 2M,
'allowedExtensions' => 'pdf,',
'deniedExtensions' => '');

	$config['ResourceType'][] = Array(
'name' => 'General SWF',
'url' => $baseUrl . 'legislation/swf',
'directory' => $baseDir . 'legislation/swf',
'maxSize' => 2M,
'allowedExtensions' => 'swf,',
'deniedExtensions' => '');


	$config['ResourceType'][] = Array(
'name' => 'General WPD',
'url' => $baseUrl . 'legislation/wpd',
'directory' => $baseDir . 'legislation/wpd',
'maxSize' => 2M,
'allowedExtensions' => 'wpd,',
'deniedExtensions' => '');

};