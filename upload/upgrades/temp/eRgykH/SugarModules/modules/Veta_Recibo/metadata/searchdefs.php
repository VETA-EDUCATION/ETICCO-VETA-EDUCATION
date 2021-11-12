<?php
$module_name = 'Veta_Recibo';
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
      'veta_recibo_leads_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_VETA_RECIBO_LEADS_FROM_LEADS_TITLE',
        'id' => 'VETA_RECIBO_LEADSLEADS_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'veta_recibo_leads_name',
      ),
      'veta_recibo_contacts_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_VETA_RECIBO_CONTACTS_FROM_CONTACTS_TITLE',
        'id' => 'VETA_RECIBO_CONTACTSCONTACTS_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'veta_recibo_contacts_name',
      ),
      'veta_recibo_veta_presupuesto_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_VETA_RECIBO_VETA_PRESUPUESTO_FROM_VETA_PRESUPUESTO_TITLE',
        'id' => 'VETA_RECIBO_VETA_PRESUPUESTOVETA_PRESUPUESTO_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'veta_recibo_veta_presupuesto_name',
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
