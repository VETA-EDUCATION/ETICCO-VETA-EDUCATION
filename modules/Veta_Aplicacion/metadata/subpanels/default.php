<?php
$module_name='Veta_Aplicacion';
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
      'popup_module' => 'Veta_Aplicacion',
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
    'prospecto' => 
    array (
      'type' => 'relate',
      'studio' => 'visible',
      'vname' => 'LBL_PROSPECTO',
      'id' => 'LEAD_ID_C',
      'link' => true,
      'width' => '10%',
      'default' => true,
      'widget_class' => 'SubPanelDetailViewLink',
      'target_module' => 'Leads',
      'target_record_key' => 'lead_id_c',
    ),
    'curso' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_CURSO',
      'width' => '10%',
      'default' => true,
    ),
    'tipo_curso' => 
    array (
      'type' => 'enum',
      'studio' => 'visible',
      'vname' => 'LBL_TIPO_CURSO',
      'width' => '10%',
      'default' => true,
    ),
    'campus' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_CAMPUS',
      'width' => '10%',
      'default' => true,
    ),
    'ciudad' => 
    array (
      'type' => 'dynamicenum',
      'studio' => 'visible',
      'vname' => 'LBL_CIUDAD',
      'width' => '10%',
      'default' => true,
    ),
    'estado_aplicacion' => 
    array (
      'type' => 'enum',
      'default' => true,
      'studio' => 'visible',
      'vname' => 'LBL_ESTADO_APLICACION',
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
      'module' => 'Veta_Aplicacion',
      'width' => '4%',
      'default' => true,
    ),
  ),
);