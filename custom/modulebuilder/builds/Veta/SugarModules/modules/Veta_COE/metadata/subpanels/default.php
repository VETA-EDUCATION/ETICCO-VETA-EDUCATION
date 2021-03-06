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
      'width' => '10%',
      'default' => true,
    ),
    'estudiante' => 
    array (
      'type' => 'relate',
      'studio' => 'visible',
      'vname' => 'LBL_ESTUDIANTE',
      'id' => 'CONTACT_ID_C',
      'link' => true,
      'width' => '7%',
      'default' => true,
      'widget_class' => 'SubPanelDetailViewLink',
      'target_module' => 'Contacts',
      'target_record_key' => 'contact_id_c',
    ),
    'prospecto' => 
    array (
      'type' => 'relate',
      'studio' => 'visible',
      'vname' => 'LBL_PROSPECTO',
      'id' => 'LEAD_ID_C',
      'link' => true,
      'width' => '7%',
      'default' => true,
      'widget_class' => 'SubPanelDetailViewLink',
      'target_module' => 'Leads',
      'target_record_key' => 'lead_id_c',
    ),
    'fecha_expiracion_visa' => 
    array (
      'type' => 'datetimecombo',
      'vname' => 'LBL_FECHA_EXPIRACION_VISA',
      'width' => '7%',
      'default' => true,
    ),
    'estado' => 
    array (
      'type' => 'enum',
      'default' => true,
      'studio' => 'visible',
      'vname' => 'LBL_ESTADO',
      'width' => '7%',
    ),
    'assigned_user_name' => 
    array (
      'link' => true,
      'type' => 'relate',
      'vname' => 'LBL_ASSIGNED_TO_NAME',
      'id' => 'ASSIGNED_USER_ID',
      'width' => '10%',
      'default' => true,
      'widget_class' => 'SubPanelDetailViewLink',
      'target_module' => 'Users',
      'target_record_key' => 'assigned_user_id',
    ),
    'fecha_solicitud' => 
    array (
      'type' => 'datetimecombo',
      'vname' => 'LBL_FECHA_SOLICITUD',
      'width' => '7%',
      'default' => true,
    ),
    'fecha_correccion' => 
    array (
      'type' => 'datetimecombo',
      'vname' => 'LBL_FECHA_CORRECCION',
      'width' => '7%',
      'default' => true,
    ),
    'fecha_correccion2' => 
    array (
      'type' => 'datetimecombo',
      'vname' => 'LBL_FECHA_CORRECCION2',
      'width' => '7%',
      'default' => true,
    ),
    'fecha_envio_estudiante' => 
    array (
      'type' => 'datetimecombo',
      'vname' => 'LBL_FECHA_ENVIO_ESTUDIANTE',
      'width' => '7%',
      'default' => true,
    ),
    'date_entered' => 
    array (
      'type' => 'datetime',
      'vname' => 'LBL_DATE_ENTERED',
      'width' => '7%',
      'default' => true,
    ),
    'date_modified' => 
    array (
      'vname' => 'LBL_DATE_MODIFIED',
      'width' => '7%',
      'default' => true,
    ),
    'edit_button' => 
    array (
      'vname' => 'LBL_EDIT_BUTTON',
      'widget_class' => 'SubPanelEditButton',
      'module' => 'Veta_COE',
      'width' => '4%',
      'default' => true,
    ),
  ),
);