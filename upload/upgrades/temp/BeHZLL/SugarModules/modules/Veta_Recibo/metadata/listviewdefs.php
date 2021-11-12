<?php
$module_name = 'Veta_Recibo';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
  ),
  'VETA_RECIBO_VETA_PRESUPUESTO_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_VETA_RECIBO_VETA_PRESUPUESTO_FROM_VETA_PRESUPUESTO_TITLE',
    'id' => 'VETA_RECIBO_VETA_PRESUPUESTOVETA_PRESUPUESTO_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'VETA_RECIBO_LEADS_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_VETA_RECIBO_LEADS_FROM_LEADS_TITLE',
    'id' => 'VETA_RECIBO_LEADSLEADS_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'VETA_RECIBO_CONTACTS_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_VETA_RECIBO_CONTACTS_FROM_CONTACTS_TITLE',
    'id' => 'VETA_RECIBO_CONTACTSCONTACTS_IDA',
    'width' => '10%',
    'default' => true,
  ),
);
;
?>
