<?php

// Plugin definition
$plugin = array(
  'title' => t('RESNA: Three column responsive stacked'),
  'css' => 'resna_3col.css',
  'category' => t('RESNA: 3 column'),
  'icon' => 'resna_3col.png',
  'theme' => 'panels-resna-3col',
  'regions' => array(
    'center_top' => t('Center Top'),
    'column_one' => t('Column One'),
    'column_two' => t('Column Two'),
    'column_three' => t('Column Three'),
    'center_bottom' => t('Center Bottom'),
  ),
);