<?php
$module_name = 'Veta_Pasaporte';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      0 => 'name',
      1 => 
      array (
        'name' => 'current_user_only',
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
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
      'fecha_emision' => 
      array (
        'type' => 'date',
        'label' => 'LBL_FECHA_EMISION',
        'width' => '10%',
        'default' => true,
        'name' => 'fecha_emision',
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
      'autoridad_emite' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_AUTORIDAD_EMITE',
        'width' => '10%',
        'default' => true,
        'name' => 'autoridad_emite',
      ),
      'veta_pasaporte_leads_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_VETA_PASAPORTE_LEADS_FROM_LEADS_TITLE',
        'id' => 'VETA_PASAPORTE_LEADSLEADS_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'veta_pasaporte_leads_name',
      ),
      'veta_pasaporte_contacts_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_VETA_PASAPORTE_CONTACTS_FROM_CONTACTS_TITLE',
        'id' => 'VETA_PASAPORTE_CONTACTSCONTACTS_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'veta_pasaporte_contacts_name',
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
