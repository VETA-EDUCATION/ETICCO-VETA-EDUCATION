<?php
$module_name = 'Veta_Presupuesto';
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
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_PAIS',
    'width' => '10%',
  ),
  'DEPARTAMENTO' => 
  array (
    'type' => 'dynamicenum',
    'studio' => 'visible',
    'label' => 'LBL_DEPARTAMENTO',
    'width' => '10%',
    'default' => true,
  ),
  'CIUDAD' => 
  array (
    'type' => 'dynamicenum',
    'studio' => 'visible',
    'label' => 'LBL_CIUDAD',
    'width' => '10%',
    'default' => true,
  ),
  'PRIMER_PAGO' => 
  array (
    'type' => 'currency',
    'default' => true,
    'label' => 'LBL_PRIMER_PAGO',
    'currency_format' => true,
    'width' => '10%',
  ),
  'SUBTOTAL' => 
  array (
    'type' => 'currency',
    'default' => true,
    'label' => 'LBL_SUBTOTAL',
    'currency_format' => true,
    'width' => '10%',
  ),
  'GRAN_TOTAL' => 
  array (
    'type' => 'currency',
    'default' => true,
    'label' => 'LBL_GRAN_TOTAL',
    'currency_format' => true,
    'width' => '10%',
  ),
  'VETA_PRESUPUESTO_LEADS_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_VETA_PRESUPUESTO_LEADS_FROM_LEADS_TITLE',
    'id' => 'VETA_PRESUPUESTO_LEADSLEADS_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'VETA_PRESUPUESTO_CONTACTS_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_VETA_PRESUPUESTO_CONTACTS_FROM_CONTACTS_TITLE',
    'id' => 'VETA_PRESUPUESTO_CONTACTSCONTACTS_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
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
);
;
?>
