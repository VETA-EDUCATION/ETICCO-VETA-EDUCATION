<?php
$module_name='Veta_COE';
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
      'popup_module' => 'Veta_COE',
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
    'estudiante' => 
    array (
      'type' => 'relate',
      'studio' => 'visible',
      'vname' => 'LBL_ESTUDIANTE',
      'id' => 'CONTACT_ID_C',
      'link' => true,
      'width' => '10%',
      'default' => true,
      'widget_class' => 'SubPanelDetailViewLink',
      'target_module' => 'Contacts',
      'target_record_key' => 'contact_id_c',
    ),
    'date_modified' => 
    array (
      'vname' => 'LBL_DATE_MODIFIED',
      'width' => '45%',
      'default' => true,
    ),
    'fecha_solicitud' => 
    array (
      'type' => 'date',
      'vname' => 'LBL_FECHA_SOLICITUD',
      'width' => '10%',
      'default' => true,
    ),
    'fecha_envio_estudiante' => 
    array (
      'type' => 'date',
      'vname' => 'LBL_FECHA_ENVIO_ESTUDIANTE',
      'width' => '10%',
      'default' => true,
    ),
    'fecha_correccion' => 
    array (
      'type' => 'date',
      'vname' => 'LBL_FECHA_CORRECCION',
      'width' => '10%',
      'default' => true,
    ),
    'fecha_correccion2' => 
    array (
      'type' => 'date',
      'vname' => 'LBL_FECHA_CORRECCION2',
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
    'edit_button' => 
    array (
      'vname' => 'LBL_EDIT_BUTTON',
      'widget_class' => 'SubPanelEditButton',
      'module' => 'Veta_COE',
      'width' => '4%',
      'default' => true,
    ),
    'remove_button' => 
    array (
      'vname' => 'LBL_REMOVE',
      'widget_class' => 'SubPanelRemoveButton',
      'module' => 'Veta_COE',
      'width' => '5%',
      'default' => true,
    ),
  ),
);