<?php
 // created: 2022-01-28 10:24:57
$layout_defs["Veta_Aplicacion"]["subpanel_setup"]['veta_aplicacion_cases'] = array (
  'order' => 100,
  'module' => 'Cases',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_VETA_APLICACION_CASES_FROM_CASES_TITLE',
  'get_subpanel_data' => 'veta_aplicacion_cases',
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
