<?php
 // created: 2019-12-02 08:33:48
$layout_defs["Veta_Presupuesto"]["subpanel_setup"]['veta_presupuesto_emails'] = array (
  'order' => 100,
  'module' => 'Emails',
  'subpanel_name' => 'ForQueues',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_VETA_PRESUPUESTO_EMAILS_FROM_EMAILS_TITLE',
  'get_subpanel_data' => 'veta_presupuesto_emails',
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
