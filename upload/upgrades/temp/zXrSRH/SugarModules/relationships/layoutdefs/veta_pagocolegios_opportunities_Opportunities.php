<?php
 // created: 2019-11-23 13:44:10
$layout_defs["Opportunities"]["subpanel_setup"]['veta_pagocolegios_opportunities'] = array (
  'order' => 100,
  'module' => 'Veta_PagoColegios',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_VETA_PAGOCOLEGIOS_OPPORTUNITIES_FROM_VETA_PAGOCOLEGIOS_TITLE',
  'get_subpanel_data' => 'veta_pagocolegios_opportunities',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);
