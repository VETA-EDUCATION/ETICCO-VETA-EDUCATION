<?php
$module_name = 'Veta_InformacionLaboral';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
    ),
    'advanced_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'empresa' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_EMPRESA',
        'width' => '10%',
        'default' => true,
        'name' => 'empresa',
      ),
      'fecha_inicio' => 
      array (
        'type' => 'date',
        'label' => 'LBL_FECHA_INICIO',
        'width' => '10%',
        'default' => true,
        'name' => 'fecha_inicio',
      ),
      'fecha_retiro' => 
      array (
        'type' => 'date',
        'label' => 'LBL_FECHA_RETIRO',
        'width' => '10%',
        'default' => true,
        'name' => 'fecha_retiro',
      ),
      'veta_informacionlaboral_leads_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_VETA_INFORMACIONLABORAL_LEADS_FROM_LEADS_TITLE',
        'id' => 'VETA_INFORMACIONLABORAL_LEADSLEADS_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'veta_informacionlaboral_leads_name',
      ),
      'veta_informacionlaboral_contacts_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_VETA_INFORMACIONLABORAL_CONTACTS_FROM_CONTACTS_TITLE',
        'id' => 'VETA_INFORMACIONLABORAL_CONTACTSCONTACTS_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'veta_informacionlaboral_contacts_name',
      ),
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '3',
    'maxColumnsBasic' => '4',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
);
;
?>
