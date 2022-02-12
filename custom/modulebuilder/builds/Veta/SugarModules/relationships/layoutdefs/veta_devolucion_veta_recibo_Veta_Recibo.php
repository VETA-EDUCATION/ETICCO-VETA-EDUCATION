<?php
 // created: 2022-01-28 10:24:58
$layout_defs["Veta_Recibo"]["subpanel_setup"]['veta_devolucion_veta_recibo'] = array (
  'order' => 100,
  'module' => 'Veta_Devolucion',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_VETA_DEVOLUCION_VETA_RECIBO_FROM_VETA_DEVOLUCION_TITLE',
  'get_subpanel_data' => 'veta_devolucion_veta_recibo',
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
