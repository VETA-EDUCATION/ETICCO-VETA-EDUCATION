<?php
 // created: 2022-01-28 10:25:07
$layout_defs["Contacts"]["subpanel_setup"]['veta_serviciosadicionales_contacts'] = array (
  'order' => 100,
  'module' => 'Veta_ServiciosAdicionales',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_VETA_SERVICIOSADICIONALES_CONTACTS_FROM_VETA_SERVICIOSADICIONALES_TITLE',
  'get_subpanel_data' => 'veta_serviciosadicionales_contacts',
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
