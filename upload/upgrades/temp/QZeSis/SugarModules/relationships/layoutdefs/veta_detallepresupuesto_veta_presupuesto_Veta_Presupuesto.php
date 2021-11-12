<?php
 // created: 2019-12-10 15:06:56
$layout_defs["Veta_Presupuesto"]["subpanel_setup"]['veta_detallepresupuesto_veta_presupuesto'] = array (
  'order' => 100,
  'module' => 'Veta_DetallePresupuesto',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_VETA_DETALLEPRESUPUESTO_VETA_PRESUPUESTO_FROM_VETA_DETALLEPRESUPUESTO_TITLE',
  'get_subpanel_data' => 'veta_detallepresupuesto_veta_presupuesto',
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
