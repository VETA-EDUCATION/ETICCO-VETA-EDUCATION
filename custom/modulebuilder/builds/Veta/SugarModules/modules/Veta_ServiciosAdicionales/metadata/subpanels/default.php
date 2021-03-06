<?php
$module_name='Veta_ServiciosAdicionales';
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
      'popup_module' => 'Veta_ServiciosAdicionales',
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
    'recoger_aeropuerto' => 
    array (
      'type' => 'bool',
      'default' => true,
      'vname' => 'LBL_RECOGER_AEROPUERTO',
      'width' => '10%',
    ),
    'tiempo_acomodacion' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_TIEMPO_ACOMODACION',
      'width' => '10%',
      'default' => true,
    ),
    'afecciones_acomodacion' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_AFECCIONES_ACOMODACION',
      'width' => '10%',
      'default' => true,
    ),
    'convivencia_con_mascotas' => 
    array (
      'type' => 'bool',
      'default' => true,
      'vname' => 'LBL_CONVIVENCIA_CON_MASCOTAS',
      'width' => '10%',
    ),
    'convivencia_fumadores' => 
    array (
      'type' => 'bool',
      'default' => true,
      'vname' => 'LBL_CONVIVENCIA_FUMADORES',
      'width' => '10%',
    ),
    'convivencia_ninos' => 
    array (
      'type' => 'bool',
      'default' => true,
      'vname' => 'LBL_CONVIVENCIA_NINOS',
      'width' => '10%',
    ),
    'otra_convivencia' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_OTRA_CONVIVENCIA',
      'width' => '10%',
      'default' => true,
    ),
    'nombre_tutor' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_NOMBRE_TUTOR',
      'width' => '10%',
      'default' => true,
    ),
    'email_tutor' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_EMAIL_TUTOR',
      'width' => '10%',
      'default' => true,
    ),
    'parentezco_tutor' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_PARENTEZCO_TUTOR',
      'width' => '10%',
      'default' => true,
    ),
    'hijos_viajan' => 
    array (
      'type' => 'bool',
      'default' => true,
      'vname' => 'LBL_HIJOS_VIAJAN',
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
      'module' => 'Veta_ServiciosAdicionales',
      'width' => '4%',
      'default' => true,
    ),
    'remove_button' => 
    array (
      'vname' => 'LBL_REMOVE',
      'widget_class' => 'SubPanelRemoveButton',
      'module' => 'Veta_ServiciosAdicionales',
      'width' => '5%',
      'default' => true,
    ),
  ),
);