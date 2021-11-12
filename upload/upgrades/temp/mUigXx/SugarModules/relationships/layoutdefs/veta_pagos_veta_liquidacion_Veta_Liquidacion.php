<?php
 // created: 2019-11-29 18:55:43
$layout_defs["Veta_Liquidacion"]["subpanel_setup"]['veta_pagos_veta_liquidacion'] = array (
  'order' => 100,
  'module' => 'Veta_Pagos',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_VETA_PAGOS_VETA_LIQUIDACION_FROM_VETA_PAGOS_TITLE',
  'get_subpanel_data' => 'veta_pagos_veta_liquidacion',
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
