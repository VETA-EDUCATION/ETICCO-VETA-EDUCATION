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
  'VETA_VISAS_CONTACTS_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_VETA_VISAS_CONTACTS_FROM_CONTACTS_TITLE',
    'id' => 'VETA_VISAS_CONTACTSCONTACTS_IDA',
    'width' => '10%',
    'default' => true,
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
  'DATE_MODIFIED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_MODIFIED',
    'width' => '10%',
    'default' => true,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => false,
  ),
);
;
?>
