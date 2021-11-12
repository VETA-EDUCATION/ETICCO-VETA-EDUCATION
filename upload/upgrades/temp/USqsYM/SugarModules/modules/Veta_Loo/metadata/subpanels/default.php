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
      'width' => '45%',
      'vname' => 'LBL_NAME',
      'default' => true,
      'widget_class' => 'SubPanelDetailViewLink',
      'target_module' => NULL,
      'target_record_key' => NULL,
    ),
    'fecha_recepcion' => 
    array (
      'type' => 'date',
      'vname' => 'LBL_FECHA_RECEPCION',
      'width' => '10%',
      'default' => true,
    ),
    'fecha_recepcion2' => 
    array (
      'type' => 'date',
      'vname' => 'LBL_FECHA_RECEPCION2',
      'width' => '10%',
      'default' => true,
    ),
    'fecha_admisiones' => 
    array (
      'type' => 'date',
      'vname' => 'LBL_FECHA_ADMISIONES',
      'width' => '10%',
      'default' => true,
    ),
    'fecha_envio' => 
    array (
      'type' => 'date',
      'vname' => 'LBL_FECHA_ENVIO',
      'width' => '10%',
      'default' => true,
    ),
    'fecha_firma' => 
    array (
      'type' => 'date',
      'vname' => 'LBL_FECHA_FIRMA',
      'width' => '10%',
      'default' => true,
    ),
    'estado' => 
    array (
      'type' => 'enum',
      'default' => true,
      'studio' => 'visible',
      'vname' => 'LBL_ESTADO',
      'width' => '10%',
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
      'module' => 'Veta_Loo',
      'width' => '4%',
      'default' => true,
    ),
    'remove_button' => 
    array (
      'vname' => 'LBL_REMOVE',
      'widget_class' => 'SubPanelRemoveButton',
      'module' => 'Veta_Loo',
      'width' => '5%',
      'default' => true,
    ),
  ),
);