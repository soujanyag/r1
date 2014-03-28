<?php

/**
 * @file
 * This template is used to print a single field in a view.
 *
 * It is not actually used in default Views, as this is registered as a theme
 * function which has better performance. For single overrides, the template is
 * perfectly okay.
 *
 * Variables available:
 * - $view: The view object
 * - $field: The field handler object that can process the input
 * - $row: The raw SQL result that can be used
 * - $output: The processed output that will normally be used.
 *
 * When fetching output from the $row, this construct should be used:
 * $data = $row->{$field->field_alias}
 *
 * The above will guarantee that you'll always get the correct data,
 * regardless of any changes in the aliasing that might happen if
 * the view is modified.
 */
?>
<?php 
$int_url = $row->_field_data['nid']['entity']->field_ss_link_url;
if (isset($int_url) && $int_url[LANGUAGE_NONE][0]['nid'] != '') {
    $internal_url_nid = $int_url[LANGUAGE_NONE][0]['nid'];
    $internal_url = "node/".$internal_url_nid;
    print l($output, $internal_url, array('html' => TRUE));
}else if($row->_field_data['nid']['entity']->field_ss_external_link[LANGUAGE_NONE][0]['url'] != ""){
    $ext_url = $row->_field_data['nid']['entity']->field_ss_external_link[LANGUAGE_NONE][0]['url'];
    print l($output, $ext_url, array('html' => TRUE, 'attributes' => array('target' => '_blank')));
}
?>