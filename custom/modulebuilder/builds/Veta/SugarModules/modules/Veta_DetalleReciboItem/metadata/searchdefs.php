<?php
$module_name = 'Veta_DetalleReciboItem';
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
      'veta_detallereciboitem_veta_detallerecibo_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_VETA_DETALLERECIBOITEM_VETA_DETALLERECIBO_FROM_VETA_DETALLERECIBO_TITLE',
        'id' => 'VETA_DETALLERECIBOITEM_VETA_DETALLERECIBOVETA_DETALLERECIBO_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'veta_detallereciboitem_veta_detallerecibo_name',
      ),
      'veta_detallereciboitem_veta_recibo_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_VETA_DETALLERECIBOITEM_VETA_RECIBO_FROM_VETA_RECIBO_TITLE',
        'id' => 'VETA_DETALLERECIBOITEM_VETA_RECIBOVETA_RECIBO_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'veta_detallereciboitem_veta_recibo_name',
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
      'veta_detallereciboitem_veta_detallerecibo_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_VETA_DETALLERECIBOITEM_VETA_DETALLERECIBO_FROM_VETA_DETALLERECIBO_TITLE',
        'width' => '10%',
        'default' => true,
        'id' => 'VETA_DETALLERECIBOITEM_VETA_DETALLERECIBOVETA_DETALLERECIBO_IDA',
        'name' => 'veta_detallereciboitem_veta_detallerecibo_name',
      ),
      'veta_detallereciboitem_veta_recibo_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_VETA_DETALLERECIBOITEM_VETA_RECIBO_FROM_VETA_RECIBO_TITLE',
        'width' => '10%',
        'default' => true,
        'id' => 'VETA_DETALLERECIBOITEM_VETA_RECIBOVETA_RECIBO_IDA',
        'name' => 'veta_detallereciboitem_veta_recibo_name',
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
