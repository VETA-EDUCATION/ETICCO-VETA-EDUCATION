<?php
$module_name = 'Veta_Abono';
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
      'veta_abono_veta_recibo_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_VETA_ABONO_VETA_RECIBO_FROM_VETA_RECIBO_TITLE',
        'id' => 'VETA_ABONO_VETA_RECIBOVETA_RECIBO_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'veta_abono_veta_recibo_name',
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
      'veta_abono_veta_recibo_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_VETA_ABONO_VETA_RECIBO_FROM_VETA_RECIBO_TITLE',
        'width' => '10%',
        'default' => true,
        'id' => 'VETA_ABONO_VETA_RECIBOVETA_RECIBO_IDA',
        'name' => 'veta_abono_veta_recibo_name',
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
