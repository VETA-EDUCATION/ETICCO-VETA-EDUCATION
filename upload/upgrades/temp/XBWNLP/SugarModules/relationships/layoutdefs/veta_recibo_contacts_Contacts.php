<?php
 // created: 2019-11-24 13:21:04
$layout_defs["Contacts"]["subpanel_setup"]['veta_recibo_contacts'] = array (
  'order' => 100,
  'module' => 'Veta_Recibo',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_VETA_RECIBO_CONTACTS_FROM_VETA_RECIBO_TITLE',
  'get_subpanel_data' => 'veta_recibo_contacts',
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
