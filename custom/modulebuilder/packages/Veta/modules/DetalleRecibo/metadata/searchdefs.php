<?php
$module_name = 'Veta_DetalleRecibo';
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
      'institucion' => 
      array (
        'type' => 'relate',
        'studio' => 'visible',
        'label' => 'LBL_INSTITUCION',
        'id' => 'VETA_COLLEGE_ID_C',
        'link' => true,
        'width' => '10%',
        'default' => true,
        'name' => 'institucion',
      ),
      'veta_detallerecibo_veta_recibo_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_VETA_DETALLERECIBO_VETA_RECIBO_FROM_VETA_RECIBO_TITLE',
        'id' => 'VETA_DETALLERECIBO_VETA_RECIBOVETA_RECIBO_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'veta_detallerecibo_veta_recibo_name',
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
      'institucion' => 
      array (
        'type' => 'relate',
        'studio' => 'visible',
        'label' => 'LBL_INSTITUCION',
        'link' => true,
        'width' => '10%',
        'default' => true,
        'id' => 'VETA_COLLEGE_ID_C',
        'name' => 'institucion',
      ),
      'veta_detallerecibo_veta_recibo_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_VETA_DETALLERECIBO_VETA_RECIBO_FROM_VETA_RECIBO_TITLE',
        'width' => '10%',
        'default' => true,
        'id' => 'VETA_DETALLERECIBO_VETA_RECIBOVETA_RECIBO_IDA',
        'name' => 'veta_detallerecibo_veta_recibo_name',
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
