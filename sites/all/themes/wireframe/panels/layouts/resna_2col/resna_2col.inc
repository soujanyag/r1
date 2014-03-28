<?php

// Plugin definition
$plugin = array(
  'title' => t('RESNA: Two column responsive stacked'),
  'css' => 'resna_2col.css',
  'category' => t('RESNA: 2 column'),
  'icon' => 'resna_2col.png',
  'theme' => 'panels-resna-2col',
  'regions' => array(
    'center_top' => t('Center Top'),
    'column_one' => t('Column One'),
    'column_two' => t('Column Two'),
    'center_bottom' => t('Center Bottom'),
  ),
);