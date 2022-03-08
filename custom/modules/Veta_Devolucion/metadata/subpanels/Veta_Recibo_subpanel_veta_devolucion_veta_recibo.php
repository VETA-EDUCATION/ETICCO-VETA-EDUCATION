<?php
// created: 2022-03-07 23:18:42
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'vname' => 'LBL_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '45%',
    'default' => true,
  ),
  'monedadevolucion_c' => 
  array (
    'type' => 'dynamicenum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_MONEDADEVOLUCION',
    'width' => '10%',
  ),
  'cantidaddevolucion_c' => 
  array (
    'type' => 'decimal',
    'default' => true,
    'vname' => 'LBL_CANTIDADDEVOLUCION',
    'width' => '10%',
  ),
  'monto' => 
  array (
    'type' => 'currency',
    'default' => true,
    'vname' => 'LBL_MONTO',
    'currency_format' => true,
    'width' => '10%',
  ),
  'modified_by_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_MODIFIED_NAME',
    'id' => 'MODIFIED_USER_ID',
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'Users',
    'target_record_key' => 'modified_user_id',
  ),
  'created_by_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_CREATED',
    'id' => 'CREATED_BY',
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'Users',
    'target_record_key' => 'created_by',
  ),
  'date_entered' => 
  array (
    'type' => 'datetime',
    'vname' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => true,
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
    'module' => 'Veta_Devolucion',
    'width' => '4%',
    'default' => true,
  ),
);