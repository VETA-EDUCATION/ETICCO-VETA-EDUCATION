<?php
$dashletData['Veta_RequerimientoDashlet']['searchFields'] = array (
  'name' => 
  array (
    'default' => '',
  ),
  'fuente' => 
  array (
    'default' => '',
  ),
  'estado' => 
  array (
    'default' => '',
  ),
  'date_entered' => 
  array (
    'default' => '',
  ),
  'assigned_user_id' => 
  array (
    'default' => '',
  ),
);
$dashletData['Veta_RequerimientoDashlet']['columns'] = array (
  'name' => 
  array (
    'width' => '40%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'fuente' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_FUENTE',
    'width' => '10%',
    'default' => true,
  ),
  'campana' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_CAMPANA',
    'id' => 'CAMPAIGN_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
  ),
  'veta_requerimiento_contacts_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_VETA_REQUERIMIENTO_CONTACTS_FROM_CONTACTS_TITLE',
    'id' => 'VETA_REQUERIMIENTO_CONTACTSCONTACTS_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'veta_requerimiento_leads_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_VETA_REQUERIMIENTO_LEADS_FROM_LEADS_TITLE',
    'id' => 'VETA_REQUERIMIENTO_LEADSLEADS_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'date_entered' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => true,
    'name' => 'date_entered',
  ),
  'estado' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_ESTADO',
    'width' => '10%',
  ),
  'fecha_ultimo_contacto' => 
  array (
    'type' => 'date',
    'label' => 'LBL_FECHA_ULTIMO_CONTACTO',
    'width' => '10%',
    'default' => false,
  ),
  'fecha_proximo_contacto' => 
  array (
    'type' => 'date',
    'label' => 'LBL_FECHA_PROXIMO_CONTACTO',
    'width' => '10%',
    'default' => false,
  ),
  'date_modified' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_MODIFIED',
    'name' => 'date_modified',
    'default' => false,
  ),
  'created_by' => 
  array (
    'width' => '8%',
    'label' => 'LBL_CREATED',
    'name' => 'created_by',
    'default' => false,
  ),
  'assigned_user_name' => 
  array (
    'width' => '8%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'name' => 'assigned_user_name',
    'default' => false,
  ),
  'fecha_viaje' => 
  array (
    'type' => 'date',
    'label' => 'LBL_FECHA_VIAJE',
    'width' => '10%',
    'default' => false,
  ),
  'visto_bueno_visas' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_VISTO_BUENO_VISAS',
    'width' => '10%',
  ),
  'presupuesto' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PRESUPUESTO',
    'width' => '10%',
    'default' => false,
  ),
  'visto_bueno_comercial' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_VISTO_BUENO_COMERCIAL',
    'width' => '10%',
  ),
  'referido' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_REFERIDO',
    'width' => '10%',
    'default' => false,
  ),
);
