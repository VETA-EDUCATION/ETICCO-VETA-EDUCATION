<?php
$module_name = 'Veta_Devolucion';
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
      'veta_devolucion_veta_recibo_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_VETA_DEVOLUCION_VETA_RECIBO_FROM_VETA_RECIBO_TITLE',
        'id' => 'VETA_DEVOLUCION_VETA_RECIBOVETA_RECIBO_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'veta_devolucion_veta_recibo_name',
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
      'veta_devolucion_veta_recibo_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_VETA_DEVOLUCION_VETA_RECIBO_FROM_VETA_RECIBO_TITLE',
        'width' => '10%',
        'default' => true,
        'id' => 'VETA_DEVOLUCION_VETA_RECIBOVETA_RECIBO_IDA',
        'name' => 'veta_devolucion_veta_recibo_name',
      ),
      'date_entered' => 
      array (
        'type' => 'datetime',
        'label' => 'LBL_DATE_ENTERED',
        'width' => '10%',
        'default' => true,
        'name' => 'date_entered',
      ),
      'created_by' => 
      array (
        'type' => 'assigned_user_name',
        'label' => 'LBL_CREATED',
        'width' => '10%',
        'default' => true,
        'name' => 'created_by',
      ),
      'modified_user_id' => 
      array (
        'type' => 'assigned_user_name',
        'label' => 'LBL_MODIFIED',
        'width' => '10%',
        'default' => true,
        'name' => 'modified_user_id',
      ),
      'date_modified' => 
      array (
        'type' => 'datetime',
        'label' => 'LBL_DATE_MODIFIED',
        'width' => '10%',
        'default' => true,
        'name' => 'date_modified',
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
