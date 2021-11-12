<?php
$dashletData['Veta_VisasDashlet']['searchFields'] = array (
  'name' => 
  array (
    'default' => '',
  ),
  'veta_visas_leads_name' => 
  array (
    'default' => '',
  ),
  'veta_visas_contacts_name' => 
  array (
    'default' => '',
  ),
  'pais' => 
  array (
    'default' => '',
  ),
);
$dashletData['Veta_VisasDashlet']['columns'] = array (
  'name' => 
  array (
    'width' => '40%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'fecha' => 
  array (
    'type' => 'date',
    'label' => 'LBL_FECHA',
    'width' => '10%',
    'default' => true,
    'name' => 'fecha',
  ),
  'fecha_expiracion' => 
  array (
    'type' => 'date',
    'label' => 'LBL_FECHA_EXPIRACION',
    'width' => '10%',
    'default' => true,
    'name' => 'fecha_expiracion',
  ),
  'pais' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PAIS',
    'width' => '10%',
    'default' => true,
    'name' => 'pais',
  ),
  'negada' => 
  array (
    'type' => 'bool',
    'default' => true,
    'label' => 'LBL_NEGADA',
    'width' => '10%',
    'name' => 'negada',
  ),
  'veta_visas_leads_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_VETA_VISAS_LEADS_FROM_LEADS_TITLE',
    'id' => 'VETA_VISAS_LEADSLEADS_IDA',
    'width' => '10%',
    'default' => true,
    'name' => 'veta_visas_leads_name',
  ),
  'veta_visas_contacts_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_VETA_VISAS_CONTACTS_FROM_CONTACTS_TITLE',
    'id' => 'VETA_VISAS_CONTACTSCONTACTS_IDA',
    'width' => '10%',
    'default' => true,
    'name' => 'veta_visas_contacts_name',
  ),
  'date_entered' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => true,
    'name' => 'date_entered',
  ),
  'assigned_user_name' => 
  array (
    'link' => true,
    'type' => 'relate',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'id' => 'ASSIGNED_USER_ID',
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
);
