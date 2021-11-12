<?php
 // created: 2019-11-24 13:21:07
$layout_defs["Opportunities"]["subpanel_setup"]['veta_liquidacion_opportunities'] = array (
  'order' => 100,
  'module' => 'Veta_Liquidacion',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_VETA_LIQUIDACION_OPPORTUNITIES_FROM_VETA_LIQUIDACION_TITLE',
  'get_subpanel_data' => 'veta_liquidacion_opportunities',
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
