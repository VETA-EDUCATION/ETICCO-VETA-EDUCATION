<?php
$module_name = 'Veta_SolvenciaEconomica';
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
      'veta_solvenciaeconomica_leads_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_VETA_SOLVENCIAECONOMICA_LEADS_FROM_LEADS_TITLE',
        'id' => 'VETA_SOLVENCIAECONOMICA_LEADSLEADS_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'veta_solvenciaeconomica_leads_name',
      ),
      'veta_solvenciaeconomica_contacts_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_VETA_SOLVENCIAECONOMICA_CONTACTS_FROM_CONTACTS_TITLE',
        'id' => 'VETA_SOLVENCIAECONOMICA_CONTACTSCONTACTS_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'veta_solvenciaeconomica_contacts_name',
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
      'veta_solvenciaeconomica_leads_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_VETA_SOLVENCIAECONOMICA_LEADS_FROM_LEADS_TITLE',
        'width' => '10%',
        'default' => true,
        'id' => 'VETA_SOLVENCIAECONOMICA_LEADSLEADS_IDA',
        'name' => 'veta_solvenciaeconomica_leads_name',
      ),
      'veta_solvenciaeconomica_contacts_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_VETA_SOLVENCIAECONOMICA_CONTACTS_FROM_CONTACTS_TITLE',
        'width' => '10%',
        'default' => true,
        'id' => 'VETA_SOLVENCIAECONOMICA_CONTACTSCONTACTS_IDA',
        'name' => 'veta_solvenciaeconomica_contacts_name',
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
