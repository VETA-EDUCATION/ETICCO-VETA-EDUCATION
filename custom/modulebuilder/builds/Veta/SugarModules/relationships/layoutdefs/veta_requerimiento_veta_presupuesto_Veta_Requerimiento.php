<?php
 // created: 2020-10-14 00:58:35
$layout_defs["Veta_Requerimiento"]["subpanel_setup"]['veta_requerimiento_veta_presupuesto'] = array (
  'order' => 100,
  'module' => 'Veta_Presupuesto',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_VETA_REQUERIMIENTO_VETA_PRESUPUESTO_FROM_VETA_PRESUPUESTO_TITLE',
  'get_subpanel_data' => 'veta_requerimiento_veta_presupuesto',
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
