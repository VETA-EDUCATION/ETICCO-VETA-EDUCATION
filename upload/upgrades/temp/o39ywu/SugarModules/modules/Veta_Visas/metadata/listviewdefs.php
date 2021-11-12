<?php
$module_name = 'Veta_Visas';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'PAIS' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PAIS',
    'width' => '10%',
    'default' => true,
  ),
  'FECHA' => 
  array (
    'type' => 'date',
    'label' => 'LBL_FECHA',
    'width' => '10%',
    'default' => true,
  ),
  'FECHA_EXPIRACION' => 
  array (
    'type' => 'date',
    'label' => 'LBL_FECHA_EXPIRACION',
    'width' => '10%',
    'default' => true,
  ),
  'NEGADA' => 
  array (
    'type' => 'bool',
    'default' => true,
    'label' => 'LBL_NEGADA',
    'width' => '10%',
  ),
  'VETA_VISAS_LEADS_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_VETA_VISAS_LEADS_FROM_LEADS_TITLE',
    'id' => 'VETA_VISAS_LEADSLEADS_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'VETA_VISAS_CONTACTS_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_VETA_VISAS_CONTACTS_FROM_CONTACTS_TITLE',
    'id' => 'VETA_VISAS_CONTACTSCONTACTS_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'DATE_MODIFIED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_MODIFIED',
    'width' => '10%',
    'default' => true,
  ),
  'MODIFIED_BY_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_MODIFIED_NAME',
    'id' => 'MODIFIED_USER_ID',
    'width' => '10%',
    'default' => false,
  ),
  'CREATED_BY_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CREATED',
    'id' => 'CREATED_BY',
    'width' => '10%',
    'default' => false,
  ),
  'DATE_ENTERED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => false,
  ),
);
;
?>
