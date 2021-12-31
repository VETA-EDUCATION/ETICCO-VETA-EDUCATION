<?php
$module_name = 'Veta_OtrosNombres';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'VETA_OTROSNOMBRES_LEADS_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_VETA_OTROSNOMBRES_LEADS_FROM_LEADS_TITLE',
    'id' => 'VETA_OTROSNOMBRES_LEADSLEADS_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'VETA_OTROSNOMBRES_CONTACTS_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_VETA_OTROSNOMBRES_CONTACTS_FROM_CONTACTS_TITLE',
    'id' => 'VETA_OTROSNOMBRES_CONTACTSCONTACTS_IDA',
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
