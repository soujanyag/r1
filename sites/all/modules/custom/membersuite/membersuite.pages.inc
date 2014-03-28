<?php

/**
 * Callback for utilities/%ctools_js/node/%node
 * @param type $nid
 * @return type
 */
function _nt_utilities_view_node($nid = NULL) {
  $output = array();

  ctools_include('modal');
  ctools_include('ajax');

  // No webform or no components.
  $node = node_load($nid);
  $output[] = ctools_modal_command_display($node->title, node_view($node));
  print ajax_render($output);
  exit;
}