<?php
$module_name = 'Veta_Pasaporte';
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
  'AUTORIDAD_EMITE' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_AUTORIDAD_EMITE',
    'width' => '10%',
    'default' => true,
  ),
  'FECHA_EMISION' => 
  array (
    'type' => 'date',
    'label' => 'LBL_FECHA_EMISION',
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
  'VETA_PASAPORTE_LEADS_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_VETA_PASAPORTE_LEADS_FROM_LEADS_TITLE',
    'id' => 'VETA_PASAPORTE_LEADSLEADS_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'VETA_PASAPORTE_CONTACTS_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_VETA_PASAPORTE_CONTACTS_FROM_CONTACTS_TITLE',
    'id' => 'VETA_PASAPORTE_CONTACTSCONTACTS_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'DESCRIPTION' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
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
  'MODIFIED_BY_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_MODIFIED_NAME',
    'id' => 'MODIFIED_USER_ID',
    'width' => '10%',
    'default' => false,
  ),
  'DATE_MODIFIED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_MODIFIED',
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
