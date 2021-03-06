<?php
$module_name='Veta_Pagos';
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
      'popup_module' => 'Veta_Pagos',
    ),
  ),
  'where' => '',
  'list_fields' => 
  array (
    'name' => 
    array (
      'vname' => 'LBL_NAME',
      'widget_class' => 'SubPanelDetailViewLink',
      'width' => '15%',
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
    'fecha_expiracion_visa' => 
    array (
      'type' => 'datetimecombo',
      'vname' => 'LBL_FECHA_EXPIRACION_VISA',
      'width' => '10%',
      'default' => true,
    ),
    'medio_pago' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_MEDIO_PAGO',
      'width' => '10%',
      'default' => true,
    ),
    'monto' => 
    array (
      'type' => 'currency',
      'vname' => 'LBL_MONTO',
      'currency_format' => true,
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
      'width' => '10%',
      'default' => true,
    ),
    'edit_button' => 
    array (
      'vname' => 'LBL_EDIT_BUTTON',
      'widget_class' => 'SubPanelEditButton',
      'module' => 'Veta_Pagos',
      'width' => '4%',
      'default' => true,
    ),
  ),
);