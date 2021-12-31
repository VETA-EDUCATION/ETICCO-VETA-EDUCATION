<?php
$module_name = 'Veta_Presupuesto';
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
      'veta_presupuesto_leads_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_VETA_PRESUPUESTO_LEADS_FROM_LEADS_TITLE',
        'id' => 'VETA_PRESUPUESTO_LEADSLEADS_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'veta_presupuesto_leads_name',
      ),
      'veta_presupuesto_contacts_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_VETA_PRESUPUESTO_CONTACTS_FROM_CONTACTS_TITLE',
        'id' => 'VETA_PRESUPUESTO_CONTACTSCONTACTS_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'veta_presupuesto_contacts_name',
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
      'tipo_visa' => 
      array (
        'type' => 'relate',
        'studio' => 'visible',
        'label' => 'LBL_TIPO_VISA',
        'id' => 'VETA_TIPOSVISA_ID_C',
        'link' => true,
        'width' => '10%',
        'default' => true,
        'name' => 'tipo_visa',
      ),
      'veta_presupuesto_leads_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_VETA_PRESUPUESTO_LEADS_FROM_LEADS_TITLE',
        'width' => '10%',
        'default' => true,
        'id' => 'VETA_PRESUPUESTO_LEADSLEADS_IDA',
        'name' => 'veta_presupuesto_leads_name',
      ),
      'veta_presupuesto_contacts_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_VETA_PRESUPUESTO_CONTACTS_FROM_CONTACTS_TITLE',
        'width' => '10%',
        'default' => true,
        'id' => 'VETA_PRESUPUESTO_CONTACTSCONTACTS_IDA',
        'name' => 'veta_presupuesto_contacts_name',
      ),
      'assigned_user_id' => 
      array (
        'name' => 'assigned_user_id',
        'label' => 'LBL_ASSIGNED_TO',
        'type' => 'enum',
        'function' => 
        array (
          'name' => 'get_user_array',
          'params' => 
          array (
            0 => false,
          ),
        ),
        'default' => true,
        'width' => '10%',
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
