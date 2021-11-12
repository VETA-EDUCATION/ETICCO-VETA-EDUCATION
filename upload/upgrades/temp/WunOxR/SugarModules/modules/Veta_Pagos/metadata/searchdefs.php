<?php
$module_name = 'Veta_Pagos';
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
      'veta_pagos_veta_liquidacion_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_VETA_PAGOS_VETA_LIQUIDACION_FROM_VETA_LIQUIDACION_TITLE',
        'id' => 'VETA_PAGOS_VETA_LIQUIDACIONVETA_LIQUIDACION_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'veta_pagos_veta_liquidacion_name',
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
      'medio_pago' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_MEDIO_PAGO',
        'width' => '10%',
        'default' => true,
        'name' => 'medio_pago',
      ),
      'veta_pagos_veta_liquidacion_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_VETA_PAGOS_VETA_LIQUIDACION_FROM_VETA_LIQUIDACION_TITLE',
        'width' => '10%',
        'default' => true,
        'id' => 'VETA_PAGOS_VETA_LIQUIDACIONVETA_LIQUIDACION_IDA',
        'name' => 'veta_pagos_veta_liquidacion_name',
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
