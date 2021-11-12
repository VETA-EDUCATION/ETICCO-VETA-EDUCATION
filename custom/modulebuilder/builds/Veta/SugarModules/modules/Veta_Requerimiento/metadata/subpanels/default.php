<?php
$module_name='Veta_Requerimiento';
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
      'popup_module' => 'Veta_Requerimiento',
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
    'fuente' => 
    array (
      'type' => 'enum',
      'studio' => 'visible',
      'vname' => 'LBL_FUENTE',
      'width' => '10%',
      'default' => true,
    ),
    'fecha_viaje' => 
    array (
      'type' => 'date',
      'vname' => 'LBL_FECHA_VIAJE',
      'width' => '10%',
      'default' => true,
    ),
    'date_modified' => 
    array (
      'vname' => 'LBL_DATE_MODIFIED',
      'width' => '45%',
      'default' => true,
    ),
    'visto_bueno_comercial' => 
    array (
      'type' => 'bool',
      'default' => true,
      'vname' => 'LBL_VISTO_BUENO_COMERCIAL',
      'width' => '10%',
    ),
    'visto_bueno_visas' => 
    array (
      'type' => 'bool',
      'default' => true,
      'vname' => 'LBL_VISTO_BUENO_VISAS',
      'width' => '10%',
    ),
    'estado' => 
    array (
      'type' => 'enum',
      'default' => true,
      'studio' => 'visible',
      'vname' => 'LBL_ESTADO',
      'width' => '10%',
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
    'edit_button' => 
    array (
      'vname' => 'LBL_EDIT_BUTTON',
      'widget_class' => 'SubPanelEditButton',
      'module' => 'Veta_Requerimiento',
      'width' => '4%',
      'default' => true,
    ),
    'remove_button' => 
    array (
      'vname' => 'LBL_REMOVE',
      'widget_class' => 'SubPanelRemoveButton',
      'module' => 'Veta_Requerimiento',
      'width' => '5%',
      'default' => true,
    ),
  ),
);