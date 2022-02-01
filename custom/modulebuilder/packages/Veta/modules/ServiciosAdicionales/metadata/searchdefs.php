<?php
$module_name = 'Veta_ServiciosAdicionales';
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
      'veta_serviciosadicionales_leads_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_VETA_SERVICIOSADICIONALES_LEADS_FROM_LEADS_TITLE',
        'id' => 'VETA_SERVICIOSADICIONALES_LEADSLEADS_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'veta_serviciosadicionales_leads_name',
      ),
      'veta_serviciosadicionales_contacts_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_VETA_SERVICIOSADICIONALES_CONTACTS_FROM_CONTACTS_TITLE',
        'id' => 'VETA_SERVICIOSADICIONALES_CONTACTSCONTACTS_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'veta_serviciosadicionales_contacts_name',
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
      'recoger_aeropuerto' => 
      array (
        'type' => 'bool',
        'default' => true,
        'label' => 'LBL_RECOGER_AEROPUERTO',
        'width' => '10%',
        'name' => 'recoger_aeropuerto',
      ),
      'convivencia_con_mascotas' => 
      array (
        'type' => 'bool',
        'default' => true,
        'label' => 'LBL_CONVIVENCIA_CON_MASCOTAS',
        'width' => '10%',
        'name' => 'convivencia_con_mascotas',
      ),
      'convivencia_ninos' => 
      array (
        'type' => 'bool',
        'default' => true,
        'label' => 'LBL_CONVIVENCIA_NINOS',
        'width' => '10%',
        'name' => 'convivencia_ninos',
      ),
      'convivencia_fumadores' => 
      array (
        'type' => 'bool',
        'default' => true,
        'label' => 'LBL_CONVIVENCIA_FUMADORES',
        'width' => '10%',
        'name' => 'convivencia_fumadores',
      ),
      'hijos_viajan' => 
      array (
        'type' => 'bool',
        'default' => true,
        'label' => 'LBL_HIJOS_VIAJAN',
        'width' => '10%',
        'name' => 'hijos_viajan',
      ),
      'veta_serviciosadicionales_leads_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_VETA_SERVICIOSADICIONALES_LEADS_FROM_LEADS_TITLE',
        'width' => '10%',
        'default' => true,
        'id' => 'VETA_SERVICIOSADICIONALES_LEADSLEADS_IDA',
        'name' => 'veta_serviciosadicionales_leads_name',
      ),
      'veta_serviciosadicionales_contacts_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_VETA_SERVICIOSADICIONALES_CONTACTS_FROM_CONTACTS_TITLE',
        'width' => '10%',
        'default' => true,
        'id' => 'VETA_SERVICIOSADICIONALES_CONTACTSCONTACTS_IDA',
        'name' => 'veta_serviciosadicionales_contacts_name',
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
