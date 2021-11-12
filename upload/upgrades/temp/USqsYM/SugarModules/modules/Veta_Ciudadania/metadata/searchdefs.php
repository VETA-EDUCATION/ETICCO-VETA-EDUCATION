<?php
$module_name = 'Veta_Ciudadania';
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
      'veta_ciudadania_leads_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_VETA_CIUDADANIA_LEADS_FROM_LEADS_TITLE',
        'id' => 'VETA_CIUDADANIA_LEADSLEADS_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'veta_ciudadania_leads_name',
      ),
      'veta_ciudadania_contacts_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_VETA_CIUDADANIA_CONTACTS_FROM_CONTACTS_TITLE',
        'id' => 'VETA_CIUDADANIA_CONTACTSCONTACTS_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'veta_ciudadania_contacts_name',
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
