<?php
 // created: 2022-01-28 10:24:56
$layout_defs["Veta_Aplicacion"]["subpanel_setup"]['veta_coe_veta_aplicacion'] = array (
  'order' => 100,
  'module' => 'Veta_COE',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_VETA_COE_VETA_APLICACION_FROM_VETA_COE_TITLE',
  'get_subpanel_data' => 'veta_coe_veta_aplicacion',
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
