<?php
$searchdefs ['Cases'] = 
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
      'estudiante_c' => 
      array (
        'type' => 'relate',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_ESTUDIANTE',
        'id' => 'CONTACT_ID_C',
        'link' => true,
        'width' => '10%',
        'name' => 'estudiante_c',
      ),
      'current_user_only' => 
      array (
        'name' => 'current_user_only',
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
        'default' => true,
        'width' => '10%',
      ),
      'open_only' => 
      array (
        'name' => 'open_only',
        'label' => 'LBL_OPEN_ITEMS',
        'type' => 'bool',
        'default' => true,
        'width' => '10%',
      ),
      'favorites_only' => 
      array (
        'name' => 'favorites_only',
        'label' => 'LBL_FAVORITES_FILTER',
        'type' => 'bool',
        'default' => true,
        'width' => '10%',
      ),
    ),
    'advanced_search' => 
    array (
      'case_number' => 
      array (
        'name' => 'case_number',
        'default' => true,
        'width' => '10%',
      ),
      'estudiante_c' => 
      array (
        'type' => 'relate',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_ESTUDIANTE',
        'link' => true,
        'width' => '10%',
        'id' => 'CONTACT_ID_C',
        'name' => 'estudiante_c',
      ),
      'prospecto_c' => 
      array (
        'type' => 'relate',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_PROSPECTO',
        'id' => 'LEAD_ID_C',
        'link' => true,
        'width' => '10%',
        'name' => 'prospecto_c',
      ),
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'type' => 
      array (
        'type' => 'enum',
        'label' => 'LBL_TYPE',
        'width' => '10%',
        'default' => true,
        'name' => 'type',
      ),
      'state' => 
      array (
        'type' => 'enum',
        'default' => true,
        'label' => 'LBL_STATE',
        'width' => '10%',
        'name' => 'state',
      ),
      'status' => 
      array (
        'name' => 'status',
        'default' => true,
        'width' => '10%',
      ),
      'assigned_user_id' => 
      array (
        'name' => 'assigned_user_id',
        'type' => 'enum',
        'label' => 'LBL_ASSIGNED_TO',
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
      'priority' => 
      array (
        'name' => 'priority',
        'default' => true,
        'width' => '10%',
      ),
      'created_by' => 
      array (
        'type' => 'assigned_user_name',
        'label' => 'LBL_CREATED',
        'width' => '10%',
        'default' => true,
        'name' => 'created_by',
      ),
      'opportunities_cases_1_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_OPPORTUNITIES_CASES_1_FROM_OPPORTUNITIES_TITLE',
        'id' => 'OPPORTUNITIES_CASES_1OPPORTUNITIES_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'opportunities_cases_1_name',
      ),
      'veta_visa_cases_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_VETA_VISA_CASES_FROM_VETA_VISA_TITLE',
        'id' => 'VETA_VISA_CASESVETA_VISA_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'veta_visa_cases_name',
      ),
      'veta_requerimiento_cases_1_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_VETA_REQUERIMIENTO_CASES_1_FROM_VETA_REQUERIMIENTO_TITLE',
        'id' => 'VETA_REQUERIMIENTO_CASES_1VETA_REQUERIMIENTO_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'veta_requerimiento_cases_1_name',
      ),
      'veta_loo_cases_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_VETA_LOO_CASES_FROM_VETA_LOO_TITLE',
        'id' => 'VETA_LOO_CASESVETA_LOO_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'veta_loo_cases_name',
      ),
      'veta_liquidacion_cases_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_VETA_LIQUIDACION_CASES_FROM_VETA_LIQUIDACION_TITLE',
        'id' => 'VETA_LIQUIDACION_CASESVETA_LIQUIDACION_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'veta_liquidacion_cases_name',
      ),
      'veta_aplicacion_cases_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_VETA_APLICACION_CASES_FROM_VETA_APLICACION_TITLE',
        'id' => 'VETA_APLICACION_CASESVETA_APLICACION_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'veta_aplicacion_cases_name',
      ),
      'veta_coe_cases_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_VETA_COE_CASES_FROM_VETA_COE_TITLE',
        'id' => 'VETA_COE_CASESVETA_COE_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'veta_coe_cases_name',
      ),
      'leads_cases_1_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_LEADS_CASES_1_FROM_LEADS_TITLE',
        'id' => 'LEADS_CASES_1LEADS_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'leads_cases_1_name',
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
