<?php
 // created: 2019-12-17 13:18:46
$layout_defs["Veta_Liquidacion"]["subpanel_setup"]['veta_coe_veta_liquidacion'] = array (
  'order' => 100,
  'module' => 'Veta_COE',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_VETA_COE_VETA_LIQUIDACION_FROM_VETA_COE_TITLE',
  'get_subpanel_data' => 'veta_coe_veta_liquidacion',
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
