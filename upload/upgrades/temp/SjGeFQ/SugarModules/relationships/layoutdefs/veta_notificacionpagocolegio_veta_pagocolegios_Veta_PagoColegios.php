<?php
 // created: 2019-11-23 21:03:30
$layout_defs["Veta_PagoColegios"]["subpanel_setup"]['veta_notificacionpagocolegio_veta_pagocolegios'] = array (
  'order' => 100,
  'module' => 'Veta_NotificacionPagoColegio',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_VETA_NOTIFICACIONPAGOCOLEGIO_VETA_PAGOCOLEGIOS_FROM_VETA_NOTIFICACIONPAGOCOLEGIO_TITLE',
  'get_subpanel_data' => 'veta_notificacionpagocolegio_veta_pagocolegios',
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
