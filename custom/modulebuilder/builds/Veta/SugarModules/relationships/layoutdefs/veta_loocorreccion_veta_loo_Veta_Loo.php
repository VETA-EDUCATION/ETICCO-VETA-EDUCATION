<?php
 // created: 2022-01-28 10:25:04
$layout_defs["Veta_Loo"]["subpanel_setup"]['veta_loocorreccion_veta_loo'] = array (
  'order' => 100,
  'module' => 'Veta_LooCorreccion',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_VETA_LOOCORRECCION_VETA_LOO_FROM_VETA_LOOCORRECCION_TITLE',
  'get_subpanel_data' => 'veta_loocorreccion_veta_loo',
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
