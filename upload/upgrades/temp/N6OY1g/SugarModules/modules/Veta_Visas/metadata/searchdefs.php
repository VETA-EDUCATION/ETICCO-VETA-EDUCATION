<?php
$module_name = 'Veta_Visas';
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
      'veta_visas_leads_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_VETA_VISAS_LEADS_FROM_LEADS_TITLE',
        'id' => 'VETA_VISAS_LEADSLEADS_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'veta_visas_leads_name',
      ),
      'veta_visas_contacts_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_VETA_VISAS_CONTACTS_FROM_CONTACTS_TITLE',
        'id' => 'VETA_VISAS_CONTACTSCONTACTS_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'veta_visas_contacts_name',
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
      'pais' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_PAIS',
        'width' => '10%',
        'default' => true,
        'name' => 'pais',
      ),
      'negada' => 
      array (
        'type' => 'bool',
        'default' => true,
        'label' => 'LBL_NEGADA',
        'width' => '10%',
        'name' => 'negada',
      ),
      'veta_visas_leads_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_VETA_VISAS_LEADS_FROM_LEADS_TITLE',
        'width' => '10%',
        'default' => true,
        'id' => 'VETA_VISAS_LEADSLEADS_IDA',
        'name' => 'veta_visas_leads_name',
      ),
      'veta_visas_contacts_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_VETA_VISAS_CONTACTS_FROM_CONTACTS_TITLE',
        'width' => '10%',
        'default' => true,
        'id' => 'VETA_VISAS_CONTACTSCONTACTS_IDA',
        'name' => 'veta_visas_contacts_name',
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
