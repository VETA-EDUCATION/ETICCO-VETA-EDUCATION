<?php
 // created: 2020-10-14 00:58:27
$layout_defs["Veta_Loo"]["subpanel_setup"]['veta_liquidacion_veta_loo'] = array (
  'order' => 100,
  'module' => 'Veta_Liquidacion',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_VETA_LIQUIDACION_VETA_LOO_FROM_VETA_LIQUIDACION_TITLE',
  'get_subpanel_data' => 'veta_liquidacion_veta_loo',
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
