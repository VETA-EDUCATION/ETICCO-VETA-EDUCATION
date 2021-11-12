<?php
 // created: 2019-11-30 15:21:10
$layout_defs["Veta_Aplicacion"]["subpanel_setup"]['veta_loo_veta_aplicacion'] = array (
  'order' => 100,
  'module' => 'Veta_Loo',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_VETA_LOO_VETA_APLICACION_FROM_VETA_LOO_TITLE',
  'get_subpanel_data' => 'veta_loo_veta_aplicacion',
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
