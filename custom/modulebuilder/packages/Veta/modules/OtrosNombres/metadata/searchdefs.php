<?php
$module_name = 'Veta_OtrosNombres';
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
      'veta_otrosnombres_leads_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_VETA_OTROSNOMBRES_LEADS_FROM_LEADS_TITLE',
        'id' => 'VETA_OTROSNOMBRES_LEADSLEADS_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'veta_otrosnombres_leads_name',
      ),
      'veta_otrosnombres_contacts_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_VETA_OTROSNOMBRES_CONTACTS_FROM_CONTACTS_TITLE',
        'id' => 'VETA_OTROSNOMBRES_CONTACTSCONTACTS_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'veta_otrosnombres_contacts_name',
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
