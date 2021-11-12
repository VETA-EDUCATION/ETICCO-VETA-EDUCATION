<?php
$popupMeta = array (
    'moduleMain' => 'Veta_Requerimiento',
    'varName' => 'Veta_Requerimiento',
    'orderBy' => 'veta_requerimiento.name',
    'whereClauses' => array (
  'name' => 'veta_requerimiento.name',
  'assigned_user_id' => 'veta_requerimiento.assigned_user_id',
  'fuente' => 'veta_requerimiento.fuente',
  'fecha_viaje' => 'veta_requerimiento.fecha_viaje',
  'estado' => 'veta_requerimiento.estado',
  'campana' => 'veta_requerimiento.campana',
  'veta_requerimiento_contacts_name' => 'veta_requerimiento.veta_requerimiento_contacts_name',
  'veta_requerimiento_leads_name' => 'veta_requerimiento.veta_requerimiento_leads_name',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'assigned_user_id',
  5 => 'fuente',
  6 => 'fecha_viaje',
  7 => 'estado',
  8 => 'campana',
  9 => 'veta_requerimiento_contacts_name',
  10 => 'veta_requerimiento_leads_name',
),
    'searchdefs' => array (
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
  ),
  'assigned_user_id' => 
  array (
    'name' => 'assigned_user_id',
    'label' => 'LBL_ASSIGNED_TO',
    'type' => 'enum',
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
  'fuente' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_FUENTE',
    'width' => '10%',
    'name' => 'fuente',
  ),
  'fecha_viaje' => 
  array (
    'type' => 'date',
    'label' => 'LBL_FECHA_VIAJE',
    'width' => '10%',
    'name' => 'fecha_viaje',
  ),
  'estado' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_ESTADO',
    'width' => '10%',
    'name' => 'estado',
  ),
  'campana' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_CAMPANA',
    'id' => 'CAMPAIGN_ID_C',
    'link' => true,
    'width' => '10%',
    'name' => 'campana',
  ),
  'veta_requerimiento_contacts_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_VETA_REQUERIMIENTO_CONTACTS_FROM_CONTACTS_TITLE',
    'id' => 'VETA_REQUERIMIENTO_CONTACTSCONTACTS_IDA',
    'width' => '10%',
    'name' => 'veta_requerimiento_contacts_name',
  ),
  'veta_requerimiento_leads_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_VETA_REQUERIMIENTO_LEADS_FROM_LEADS_TITLE',
    'id' => 'VETA_REQUERIMIENTO_LEADSLEADS_IDA',
    'width' => '10%',
    'name' => 'veta_requerimiento_leads_name',
  ),
),
);
