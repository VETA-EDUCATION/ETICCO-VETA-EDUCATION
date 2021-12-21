<?php
$viewdefs ['Cases'] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
          3 => 'FIND_DUPLICATES',
        ),
      ),
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => true,
      'tabDefs' => 
      array (
        'LBL_CASE_INFORMATION' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
        'LBL_DETAILVIEW_PANEL1' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_AOP_CASE_UPDATES' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'lbl_case_information' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'case_number',
            'label' => 'LBL_CASE_NUMBER',
          ),
          1 => 'priority',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'state',
            'comment' => 'The state of the case (i.e. open/closed)',
            'label' => 'LBL_STATE',
          ),
          1 => 'status',
        ),
        2 => 
        array (
          0 => 'type',
          1 => 
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'name',
            'label' => 'LBL_SUBJECT',
          ),
        ),
        4 => 
        array (
          0 => 'description',
        ),
        5 => 
        array (
          0 => 'resolution',
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'date_entered',
            'customCode' => '{$fields.date_entered.value} {$APP.LBL_BY} {$fields.created_by_name.value}',
          ),
          1 => 
          array (
            'name' => 'date_modified',
            'label' => 'LBL_DATE_MODIFIED',
            'customCode' => '{$fields.date_modified.value} {$APP.LBL_BY} {$fields.modified_by_name.value}',
          ),
        ),
      ),
      'lbl_detailview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'leads_cases_1_name',
            'label' => 'LBL_LEADS_CASES_1_FROM_LEADS_TITLE',
          ),
          1 => 
          array (
            'name' => 'estudiante_c',
            'studio' => 'visible',
            'label' => 'LBL_ESTUDIANTE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'veta_aplicacion_cases_name',
            'label' => 'LBL_VETA_APLICACION_CASES_FROM_VETA_APLICACION_TITLE',
          ),
          1 => 
          array (
            'name' => 'veta_loo_cases_name',
            'label' => 'LBL_VETA_LOO_CASES_FROM_VETA_LOO_TITLE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'veta_liquidacion_cases_name',
            'label' => 'LBL_VETA_LIQUIDACION_CASES_FROM_VETA_LIQUIDACION_TITLE',
          ),
          1 => 
          array (
            'name' => 'veta_coe_cases_name',
            'label' => 'LBL_VETA_COE_CASES_FROM_VETA_COE_TITLE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'veta_visa_cases_name',
            'label' => 'LBL_VETA_VISA_CASES_FROM_VETA_VISA_TITLE',
          ),
          1 => 
          array (
            'name' => 'opportunities_cases_1_name',
            'label' => 'LBL_OPPORTUNITIES_CASES_1_FROM_OPPORTUNITIES_TITLE',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'veta_requerimiento_cases_1_name',
            'label' => 'LBL_VETA_REQUERIMIENTO_CASES_1_FROM_VETA_REQUERIMIENTO_TITLE',
          ),
          1 => '',
        ),
      ),
      'LBL_AOP_CASE_UPDATES' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'aop_case_updates_threaded',
            'studio' => 'visible',
            'label' => 'LBL_AOP_CASE_UPDATES_THREADED',
          ),
        ),
      ),
    ),
  ),
);
;
?>
