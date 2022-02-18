<?php
$module_name = 'Veta_DetallePresupuesto';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'name' => 
      array (
        'type' => 'name',
        'link' => true,
        'label' => 'LBL_NAME',
        'width' => '10%',
        'default' => true,
        'name' => 'name',
      ),
      'institucion' => 
      array (
        'type' => 'relate',
        'studio' => 'visible',
        'label' => 'LBL_INSTITUCION',
        'id' => 'VETA_COLLEGE_ID1_C',
        'link' => true,
        'width' => '10%',
        'default' => true,
        'name' => 'institucion',
      ),
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
      'name' => 
      array (
        'type' => 'name',
        'link' => true,
        'label' => 'LBL_NAME',
        'width' => '10%',
        'default' => true,
        'name' => 'name',
      ),
      'institucion' => 
      array (
        'type' => 'relate',
        'studio' => 'visible',
        'label' => 'LBL_INSTITUCION',
        'link' => true,
        'width' => '10%',
        'default' => true,
        'id' => 'VETA_COLLEGE_ID1_C',
        'name' => 'institucion',
      ),
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
