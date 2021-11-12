<?php
$module_name = 'Veta_Ciudadania';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'VETA_CIUDADANIA_CONTACTS_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_VETA_CIUDADANIA_CONTACTS_FROM_CONTACTS_TITLE',
    'id' => 'VETA_CIUDADANIA_CONTACTSCONTACTS_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'VETA_CIUDADANIA_LEADS_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_VETA_CIUDADANIA_LEADS_FROM_LEADS_TITLE',
    'id' => 'VETA_CIUDADANIA_LEADSLEADS_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'DATE_ENTERED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => true,
  ),
  'DATE_MODIFIED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_MODIFIED',
    'width' => '10%',
    'default' => false,
  ),
);
;
?>
