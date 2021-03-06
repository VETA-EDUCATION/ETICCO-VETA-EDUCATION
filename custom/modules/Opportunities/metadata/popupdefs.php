<?php
$popupMeta = array (
    'moduleMain' => 'Opportunity',
    'varName' => 'OPPORTUNITY',
    'orderBy' => 'name',
    'whereClauses' => array (
  'name' => 'opportunities.name',
  'sales_stage' => 'opportunities.sales_stage',
  'lead_source' => 'opportunities.lead_source',
  'contacts_opportunities_1_name' => 'opportunities.contacts_opportunities_1_name',
  'assigned_user_id' => 'opportunities.assigned_user_id',
),
    'searchInputs' => array (
  0 => 'name',
  2 => 'sales_stage',
  3 => 'lead_source',
  4 => 'contacts_opportunities_1_name',
  5 => 'assigned_user_id',
),
    'searchdefs' => array (
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
  ),
  'sales_stage' => 
  array (
    'name' => 'sales_stage',
    'width' => '10%',
  ),
  'lead_source' => 
  array (
    'type' => 'enum',
    'label' => 'LBL_LEAD_SOURCE',
    'width' => '10%',
    'name' => 'lead_source',
  ),
  'contacts_opportunities_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CONTACTS_OPPORTUNITIES_1_FROM_CONTACTS_TITLE',
    'id' => 'CONTACTS_OPPORTUNITIES_1CONTACTS_IDA',
    'width' => '10%',
    'name' => 'contacts_opportunities_1_name',
  ),
  'assigned_user_id' => 
  array (
    'name' => 'assigned_user_id',
    'type' => 'enum',
    'label' => 'LBL_ASSIGNED_TO',
    'function' => 
    array (
      'name' => 'get_user_array',
      'params' => 
      array (
        0 => false,
      ),
    ),
    'width' => '10%',
  ),
),
    'listviewdefs' => array (
  'NAME' => 
  array (
    'width' => '30%',
    'label' => 'LBL_LIST_OPPORTUNITY_NAME',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'SALES_STAGE' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_SALES_STAGE',
    'default' => true,
    'name' => 'sales_stage',
  ),
  'DATE_ENTERED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => true,
    'name' => 'date_entered',
  ),
  'LEAD_SOURCE' => 
  array (
    'type' => 'enum',
    'label' => 'LBL_LEAD_SOURCE',
    'width' => '10%',
    'default' => true,
    'name' => 'lead_source',
  ),
  'AMOUNT_USDOLLAR' => 
  array (
    'type' => 'currency',
    'studio' => 
    array (
      'editview' => false,
      'detailview' => false,
      'quickcreate' => false,
    ),
    'label' => 'LBL_AMOUNT_USDOLLAR',
    'currency_format' => true,
    'width' => '10%',
    'default' => true,
    'name' => 'amount_usdollar',
  ),
  'CONTACTS_OPPORTUNITIES_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CONTACTS_OPPORTUNITIES_1_FROM_CONTACTS_TITLE',
    'id' => 'CONTACTS_OPPORTUNITIES_1CONTACTS_IDA',
    'width' => '10%',
    'default' => true,
    'name' => 'contacts_opportunities_1_name',
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '5%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'default' => true,
    'name' => 'assigned_user_name',
  ),
  'ESTADO_VISAS_C' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_ESTADO_VISAS',
    'width' => '10%',
    'name' => 'estado_visas_c',
  ),
  'ESTADO_SERVICIO_AL_CLIENTE_C' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_ESTADO_SERVICIO_AL_CLIENTE',
    'width' => '10%',
    'name' => 'estado_servicio_al_cliente_c',
  ),
  'ESTADO_PAGO_INSTITUCION_C' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_ESTADO_PAGO_INSTITUCION',
    'width' => '10%',
    'name' => 'estado_pago_institucion_c',
  ),
  'ESTADO_ADMISIONES_C' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_ESTADO_ADMISIONES',
    'width' => '10%',
    'name' => 'estado_admisiones_c',
  ),
  'ESTADO_CARTERA_C' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_ESTADO_CARTERA',
    'width' => '10%',
    'name' => 'estado_cartera_c',
  ),
),
);
