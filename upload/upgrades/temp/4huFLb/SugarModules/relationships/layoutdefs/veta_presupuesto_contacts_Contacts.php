<?php
 // created: 2019-11-23 12:29:59
$layout_defs["Contacts"]["subpanel_setup"]['veta_presupuesto_contacts'] = array (
  'order' => 100,
  'module' => 'Veta_Presupuesto',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_VETA_PRESUPUESTO_CONTACTS_FROM_VETA_PRESUPUESTO_TITLE',
  'get_subpanel_data' => 'veta_presupuesto_contacts',
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
