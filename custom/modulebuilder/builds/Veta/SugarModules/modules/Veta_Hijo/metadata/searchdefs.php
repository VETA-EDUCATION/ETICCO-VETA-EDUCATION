<?php
$module_name = 'Veta_Hijo';
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
      'veta_hijo_contacts_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_VETA_HIJO_CONTACTS_FROM_CONTACTS_TITLE',
        'id' => 'VETA_HIJO_CONTACTSCONTACTS_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'veta_hijo_contacts_name',
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
