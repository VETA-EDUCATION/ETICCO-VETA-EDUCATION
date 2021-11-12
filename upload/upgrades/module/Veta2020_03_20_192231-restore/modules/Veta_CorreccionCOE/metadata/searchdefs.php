<?php
$module_name = 'Veta_CorreccionCOE';
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
      'veta_correccioncoe_veta_coe_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_VETA_CORRECCIONCOE_VETA_COE_FROM_VETA_COE_TITLE',
        'id' => 'VETA_CORRECCIONCOE_VETA_COEVETA_COE_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'veta_correccioncoe_veta_coe_name',
      ),
      'date_entered' => 
      array (
        'type' => 'datetime',
        'label' => 'LBL_DATE_ENTERED',
        'width' => '10%',
        'default' => true,
        'name' => 'date_entered',
      ),
      'fecha_correccion' => 
      array (
        'type' => 'datetimecombo',
        'label' => 'LBL_FECHA_CORRECCION',
        'width' => '10%',
        'default' => true,
        'name' => 'fecha_correccion',
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
