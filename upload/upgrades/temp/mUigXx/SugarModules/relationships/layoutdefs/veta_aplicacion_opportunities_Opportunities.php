<?php
 // created: 2019-11-29 18:55:43
$layout_defs["Opportunities"]["subpanel_setup"]['veta_aplicacion_opportunities'] = array (
  'order' => 100,
  'module' => 'Veta_Aplicacion',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_VETA_APLICACION_OPPORTUNITIES_FROM_VETA_APLICACION_TITLE',
  'get_subpanel_data' => 'veta_aplicacion_opportunities',
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
