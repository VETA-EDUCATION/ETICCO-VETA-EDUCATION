<?php
$module_name='Veta_DetalleReciboItem';
$subpanel_layout = array (
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopCreateButton',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'popup_module' => 'Veta_DetalleReciboItem',
    ),
  ),
  'where' => '',
  'list_fields' => 
  array (
    'name' => 
    array (
      'vname' => 'LBL_NAME',
      'widget_class' => 'SubPanelDetailViewLink',
      'width' => '45%',
      'default' => true,
    ),
    'monto' => 
    array (
      'type' => 'currency',
      'default' => true,
      'vname' => 'LBL_MONTO',
      'currency_format' => true,
      'width' => '10%',
    ),
    'detalle_recibo' => 
    array (
      'type' => 'relate',
      'studio' => 'visible',
      'vname' => 'LBL_DETALLE_RECIBO',
      'id' => 'VETA_DETALLERECIBO_ID_C',
      'link' => true,
      'width' => '10%',
      'default' => true,
      'widget_class' => 'SubPanelDetailViewLink',
      'target_module' => 'Veta_DetalleRecibo',
      'target_record_key' => 'veta_detallerecibo_id_c',
    ),
    'date_modified' => 
    array (
      'vname' => 'LBL_DATE_MODIFIED',
      'width' => '45%',
      'default' => true,
    ),
    'edit_button' => 
    array (
      'vname' => 'LBL_EDIT_BUTTON',
      'widget_class' => 'SubPanelEditButton',
      'module' => 'Veta_DetalleReciboItem',
      'width' => '4%',
      'default' => true,
    ),
  ),
);