<?php
// created: 2020-01-24 13:23:23
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'name' => 'name',
    'vname' => 'LBL_LIST_OPPORTUNITY_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '40%',
    'default' => true,
  ),
  'sales_stage' => 
  array (
    'name' => 'sales_stage',
    'vname' => 'LBL_LIST_SALES_STAGE',
    'width' => '15%',
    'default' => true,
  ),
  'date_closed' => 
  array (
    'name' => 'date_closed',
    'vname' => 'LBL_LIST_DATE_CLOSED',
    'width' => '15%',
    'default' => true,
  ),
  'amount_usdollar' => 
  array (
    'vname' => 'LBL_LIST_AMOUNT_USDOLLAR',
    'width' => '15%',
    'default' => true,
  ),
  'monto_dolares_australianos_c' => 
  array (
    'type' => 'int',
    'default' => true,
    'vname' => 'LBL_MONTO_DOLARES_AUSTRALIANOS',
    'width' => '10%',
  ),
  'estado_servicio_al_cliente_c' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_ESTADO_SERVICIO_AL_CLIENTE',
    'width' => '10%',
  ),
  'pendiente_cartera_c' => 
  array (
    'type' => 'currency',
    'default' => true,
    'vname' => 'LBL_PENDIENTE_CARTERA',
    'currency_format' => true,
    'width' => '10%',
  ),
  'assigned_user_name' => 
  array (
    'name' => 'assigned_user_name',
    'vname' => 'LBL_LIST_ASSIGNED_TO_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'target_record_key' => 'assigned_user_id',
    'target_module' => 'Employees',
    'width' => '10%',
    'default' => true,
  ),
  'edit_button' => 
  array (
    'vname' => 'LBL_EDIT_BUTTON',
    'widget_class' => 'SubPanelEditButton',
    'module' => 'Opportunities',
    'width' => '4%',
    'default' => true,
  ),
  'currency_id' => 
  array (
    'usage' => 'query_only',
  ),
);