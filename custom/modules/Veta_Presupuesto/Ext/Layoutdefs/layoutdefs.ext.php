<?php 
 //WARNING: The contents of this file are auto-generated


 // created: 2021-09-02 13:15:22
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


// created: 2019-11-30 14:01:33
$layout_defs["Veta_Presupuesto"]["subpanel_setup"]['veta_recibo_veta_presupuesto'] = array (
    'order' => 100,
    'module' => 'Veta_Recibo',
    'subpanel_name' => 'default',
    'sort_order' => 'asc',
    'sort_by' => 'id',
    'title_key' => 'LBL_VETA_RECIBO_VETA_PRESUPUESTO_FROM_VETA_RECIBO_TITLE',
    'get_subpanel_data' => 'veta_recibo_veta_presupuesto',
    'top_buttons' =>
        array (
            /*0 =>
            array (
              'widget_class' => 'SubPanelTopButtonQuickCreate',
            ),
            1 =>
            array (
              'widget_class' => 'SubPanelTopSelectButton',
              'mode' => 'MultiSelect',
            ),*/
        ),
    
);


// created: 2019-11-30 17:29:25
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
            /*0 =>
            array (
              'widget_class' => 'SubPanelTopButtonQuickCreate',
            ),
            1 =>
            array (
              'widget_class' => 'SubPanelTopSelectButton',
              'mode' => 'MultiSelect',
            ),*/
        ),
);

?>