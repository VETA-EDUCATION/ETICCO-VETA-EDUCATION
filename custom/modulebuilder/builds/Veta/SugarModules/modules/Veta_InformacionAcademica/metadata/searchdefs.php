<?php
$module_name = 'Veta_InformacionAcademica';
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
      'veta_informacionacademica_leads_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_VETA_INFORMACIONACADEMICA_LEADS_FROM_LEADS_TITLE',
        'id' => 'VETA_INFORMACIONACADEMICA_LEADSLEADS_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'veta_informacionacademica_leads_name',
      ),
      'veta_informacionacademica_contacts_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_VETA_INFORMACIONACADEMICA_CONTACTS_FROM_CONTACTS_TITLE',
        'id' => 'VETA_INFORMACIONACADEMICA_CONTACTSCONTACTS_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'veta_informacionacademica_contacts_name',
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
      'nivel_estudios' => 
      array (
        'type' => 'enum',
        'studio' => 'visible',
        'label' => 'LBL_NIVEL_ESTUDIOS',
        'width' => '10%',
        'default' => true,
        'name' => 'nivel_estudios',
      ),
      'fecha_fin' => 
      array (
        'type' => 'date',
        'label' => 'LBL_FECHA_FIN',
        'width' => '10%',
        'default' => true,
        'name' => 'fecha_fin',
      ),
      'veta_informacionacademica_leads_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_VETA_INFORMACIONACADEMICA_LEADS_FROM_LEADS_TITLE',
        'width' => '10%',
        'default' => true,
        'id' => 'VETA_INFORMACIONACADEMICA_LEADSLEADS_IDA',
        'name' => 'veta_informacionacademica_leads_name',
      ),
      'veta_informacionacademica_contacts_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_VETA_INFORMACIONACADEMICA_CONTACTS_FROM_CONTACTS_TITLE',
        'width' => '10%',
        'default' => true,
        'id' => 'VETA_INFORMACIONACADEMICA_CONTACTSCONTACTS_IDA',
        'name' => 'veta_informacionacademica_contacts_name',
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
