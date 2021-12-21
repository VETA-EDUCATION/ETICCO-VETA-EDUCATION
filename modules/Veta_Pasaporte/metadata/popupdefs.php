<?php
$popupMeta = array (
    'moduleMain' => 'Veta_Pasaporte',
    'varName' => 'Veta_Pasaporte',
    'orderBy' => 'veta_pasaporte.name',
    'whereClauses' => array (
  'name' => 'veta_pasaporte.name',
  'pais' => 'veta_pasaporte.pais',
  'autoridad_emite' => 'veta_pasaporte.autoridad_emite',
  'fecha_emision' => 'veta_pasaporte.fecha_emision',
  'fecha_expiracion' => 'veta_pasaporte.fecha_expiracion',
  'veta_pasaporte_leads_name' => 'veta_pasaporte.veta_pasaporte_leads_name',
  'veta_pasaporte_contacts_name' => 'veta_pasaporte.veta_pasaporte_contacts_name',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'pais',
  5 => 'autoridad_emite',
  6 => 'fecha_emision',
  7 => 'fecha_expiracion',
  8 => 'veta_pasaporte_leads_name',
  9 => 'veta_pasaporte_contacts_name',
),
    'searchdefs' => array (
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
  ),
  'pais' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PAIS',
    'width' => '10%',
    'name' => 'pais',
  ),
  'autoridad_emite' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_AUTORIDAD_EMITE',
    'width' => '10%',
    'name' => 'autoridad_emite',
  ),
  'fecha_emision' => 
  array (
    'type' => 'date',
    'label' => 'LBL_FECHA_EMISION',
    'width' => '10%',
    'name' => 'fecha_emision',
  ),
  'fecha_expiracion' => 
  array (
    'type' => 'date',
    'label' => 'LBL_FECHA_EXPIRACION',
    'width' => '10%',
    'name' => 'fecha_expiracion',
  ),
  'veta_pasaporte_leads_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_VETA_PASAPORTE_LEADS_FROM_LEADS_TITLE',
    'id' => 'VETA_PASAPORTE_LEADSLEADS_IDA',
    'width' => '10%',
    'name' => 'veta_pasaporte_leads_name',
  ),
  'veta_pasaporte_contacts_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_VETA_PASAPORTE_CONTACTS_FROM_CONTACTS_TITLE',
    'id' => 'VETA_PASAPORTE_CONTACTSCONTACTS_IDA',
    'width' => '10%',
    'name' => 'veta_pasaporte_contacts_name',
  ),
),
);
