<?php
 // created: 2019-11-02 20:13:02
$layout_defs["Veta_Recibo"]["subpanel_setup"]['veta_abono_veta_recibo'] = array (
  'order' => 100,
  'module' => 'Veta_Abono',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_VETA_ABONO_VETA_RECIBO_FROM_VETA_ABONO_TITLE',
  'get_subpanel_data' => 'veta_abono_veta_recibo',
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
