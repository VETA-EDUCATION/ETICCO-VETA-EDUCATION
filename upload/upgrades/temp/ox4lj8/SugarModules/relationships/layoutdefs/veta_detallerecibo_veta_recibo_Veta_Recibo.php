<?php
 // created: 2019-11-28 15:18:04
$layout_defs["Veta_Recibo"]["subpanel_setup"]['veta_detallerecibo_veta_recibo'] = array (
  'order' => 100,
  'module' => 'Veta_DetalleRecibo',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_VETA_DETALLERECIBO_VETA_RECIBO_FROM_VETA_DETALLERECIBO_TITLE',
  'get_subpanel_data' => 'veta_detallerecibo_veta_recibo',
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
