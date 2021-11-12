<?php
$module_name='Veta_Visa';
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
      'popup_module' => 'Veta_Visa',
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
    'estado' => 
    array (
      'type' => 'enum',
      'studio' => 'visible',
      'vname' => 'LBL_ESTADO',
      'width' => '10%',
      'default' => true,
    ),
    'fecha_aplicacion' => 
    array (
      'type' => 'date',
      'vname' => 'LBL_FECHA_APLICACION',
      'width' => '10%',
      'default' => true,
    ),
    'fecha_pago' => 
    array (
      'type' => 'date',
      'vname' => 'LBL_FECHA_PAGO',
      'width' => '10%',
      'default' => true,
    ),
    'fecha_otorgada' => 
    array (
      'type' => 'date',
      'vname' => 'LBL_FECHA_OTORGADA',
      'width' => '10%',
      'default' => true,
    ),
    'fecha_expiracion' => 
    array (
      'type' => 'date',
      'vname' => 'LBL_FECHA_EXPIRACION',
      'width' => '10%',
      'default' => true,
    ),
    'fecha_firma_acta' => 
    array (
      'type' => 'date',
      'vname' => 'LBL_FECHA_FIRMA_ACTA',
      'width' => '10%',
      'default' => true,
    ),
    'fecha_examenes_medicos' => 
    array (
      'type' => 'date',
      'vname' => 'LBL_FECHA_EXAMENES_MEDICOS',
      'width' => '10%',
      'default' => true,
    ),
    'fecha_avac' => 
    array (
      'type' => 'date',
      'vname' => 'LBL_FECHA_AVAC',
      'width' => '10%',
      'default' => true,
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
      'module' => 'Veta_Visa',
      'width' => '4%',
      'default' => true,
    ),
  ),
);