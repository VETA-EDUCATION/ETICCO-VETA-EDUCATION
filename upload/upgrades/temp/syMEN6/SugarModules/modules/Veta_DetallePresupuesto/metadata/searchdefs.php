<?php
$module_name = 'Veta_DetallePresupuesto';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'current_user_only' => 
      array (
        'name' => 'current_user_only',
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
        'default' => true,
        'width' => '10%',
      ),
    ),
    'advanced_search' => 
    array (
      'veta_detallepresupuesto_veta_presupuesto_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_VETA_DETALLEPRESUPUESTO_VETA_PRESUPUESTO_FROM_VETA_PRESUPUESTO_TITLE',
        'id' => 'VETA_DETALLEPRESUPUESTO_VETA_PRESUPUESTOVETA_PRESUPUESTO_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'veta_detallepresupuesto_veta_presupuesto_name',
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
