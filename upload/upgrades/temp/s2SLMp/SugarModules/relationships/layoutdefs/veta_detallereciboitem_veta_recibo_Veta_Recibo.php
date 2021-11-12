<?php
 // created: 2019-12-15 13:44:45
$layout_defs["Veta_Recibo"]["subpanel_setup"]['veta_detallereciboitem_veta_recibo'] = array (
  'order' => 100,
  'module' => 'Veta_DetalleReciboItem',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_VETA_DETALLERECIBOITEM_VETA_RECIBO_FROM_VETA_DETALLERECIBOITEM_TITLE',
  'get_subpanel_data' => 'veta_detallereciboitem_veta_recibo',
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
