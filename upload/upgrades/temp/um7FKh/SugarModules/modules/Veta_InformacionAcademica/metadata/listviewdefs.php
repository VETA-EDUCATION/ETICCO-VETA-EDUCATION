<?php
$module_name = 'Veta_InformacionAcademica';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'FECHA_INICIO' => 
  array (
    'type' => 'date',
    'label' => 'LBL_FECHA_INICIO',
    'width' => '10%',
    'default' => true,
  ),
  'FECHA_FIN' => 
  array (
    'type' => 'date',
    'label' => 'LBL_FECHA_FIN',
    'width' => '10%',
    'default' => true,
  ),
  'NIVEL_ESTUDIOS' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_NIVEL_ESTUDIOS',
    'width' => '10%',
    'default' => true,
  ),
  'VETA_INFORMACIONACADEMICA_LEADS_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_VETA_INFORMACIONACADEMICA_LEADS_FROM_LEADS_TITLE',
    'id' => 'VETA_INFORMACIONACADEMICA_LEADSLEADS_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'VETA_INFORMACIONACADEMICA_CONTACTS_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_VETA_INFORMACIONACADEMICA_CONTACTS_FROM_CONTACTS_TITLE',
    'id' => 'VETA_INFORMACIONACADEMICA_CONTACTSCONTACTS_IDA',
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
