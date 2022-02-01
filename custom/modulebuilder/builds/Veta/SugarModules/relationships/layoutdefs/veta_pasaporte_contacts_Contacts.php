<?php
 // created: 2022-01-28 10:25:04
$layout_defs["Contacts"]["subpanel_setup"]['veta_pasaporte_contacts'] = array (
  'order' => 100,
  'module' => 'Veta_Pasaporte',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_VETA_PASAPORTE_CONTACTS_FROM_VETA_PASAPORTE_TITLE',
  'get_subpanel_data' => 'veta_pasaporte_contacts',
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
