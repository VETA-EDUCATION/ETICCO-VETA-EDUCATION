<?php
$module_name='Veta_Loo';
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
      'popup_module' => 'Veta_Loo',
    ),
  ),
  'where' => '',
  'list_fields' => 
  array (
    'name' => 
    array (
      'type' => 'name',
      'link' => true,
      'width' => '15%',
      'vname' => 'LBL_NAME',
      'default' => true,
      'widget_class' => 'SubPanelDetailViewLink',
      'target_module' => NULL,
      'target_record_key' => NULL,
    ),
    'estado_loo' => 
    array (
      'type' => 'enum',
      'studio' => 'visible',
      'vname' => 'LBL_ESTADO_LOO',
      'width' => '8%',
      'default' => true,
    ),
    'fecha_admisiones' => 
    array (
      'type' => 'datetimecombo',
      'vname' => 'LBL_FECHA_ADMISIONES',
      'width' => '8%',
      'default' => true,
    ),
    'fecha_recepcion' => 
    array (
      'type' => 'datetimecombo',
      'vname' => 'LBL_FECHA_RECEPCION',
      'width' => '8%',
      'default' => true,
    ),
    'fecha_recepcion2' => 
    array (
      'type' => 'datetimecombo',
      'vname' => 'LBL_FECHA_RECEPCION2',
      'width' => '8%',
      'default' => true,
    ),
    'fecha_envio' => 
    array (
      'type' => 'datetimecombo',
      'vname' => 'LBL_FECHA_ENVIO',
      'width' => '8%',
      'default' => true,
    ),
    'fecha_firma' => 
    array (
      'type' => 'datetimecombo',
      'vname' => 'LBL_FECHA_FIRMA',
      'width' => '8%',
      'default' => true,
    ),
    'date_entered' => 
    array (
      'type' => 'datetime',
      'vname' => 'LBL_DATE_ENTERED',
      'width' => '8%',
      'default' => true,
    ),
    'date_modified' => 
    array (
      'vname' => 'LBL_DATE_MODIFIED',
      'width' => '8%',
      'default' => true,
    ),
    'assigned_user_name' => 
    array (
      'link' => true,
      'type' => 'relate',
      'vname' => 'LBL_ASSIGNED_TO_NAME',
      'id' => 'ASSIGNED_USER_ID',
      'width' => '8%',
      'default' => true,
      'widget_class' => 'SubPanelDetailViewLink',
      'target_module' => 'Users',
      'target_record_key' => 'assigned_user_id',
    ),
    'edit_button' => 
    array (
      'vname' => 'LBL_EDIT_BUTTON',
      'widget_class' => 'SubPanelEditButton',
      'module' => 'Veta_Loo',
      'width' => '4%',
      'default' => true,
    ),
  ),
);