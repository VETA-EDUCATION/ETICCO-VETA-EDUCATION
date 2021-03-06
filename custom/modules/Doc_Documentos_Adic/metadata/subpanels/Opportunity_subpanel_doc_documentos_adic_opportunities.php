<?php
// created: 2021-08-08 14:32:36
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'vname' => 'LBL_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '45%',
    'default' => true,
  ),
  'date_modified' => 
  array (
    'type' => 'datetime',
    'vname' => 'LBL_DATE_MODIFIED',
    'width' => '45%',
    'default' => true,
  ),
  'url' => 
  array (
    'type' => 'url',
    'vname' => 'LBL_URL',
    'width' => '10%',
    'default' => true,
  ),
  'estadodocumento' => 
  array (
    'type' => 'dynamicenum',
    'studio' => 'visible',
    'vname' => 'LBL_ESTADODOCUMENTO',
    'width' => '10%',
    'default' => true,
  ),
  'edit_button' => 
  array (
    'vname' => 'LBL_EDIT_BUTTON',
    'widget_class' => 'SubPanelEditButton',
    'module' => 'Doc_Documentos_Adic',
    'width' => '4%',
    'default' => true,
  ),
  'ayuda' => 
  array (
    'type' => 'varchar',
    'vname' => 'LBL_AYUDA',
    'width' => '10%',
    'default' => true,
  ),
  'fechacargado' => 
  array (
    'type' => 'datetimecombo',
    'vname' => 'LBL_FECHACARGADO',
    'width' => '10%',
    'default' => true,
  ),
  'fechaaprobado' => 
  array (
    'type' => 'datetimecombo',
    'vname' => 'LBL_FECHAAPROBADO',
    'width' => '10%',
    'default' => true,
  ),
  'observaciones' => 
  array (
    'type' => 'varchar',
    'vname' => 'LBL_OBSERVACIONES',
    'width' => '10%',
    'default' => true,
  ),
  'recursos' => 
  array (
    'type' => 'varchar',
    'vname' => 'LBL_RECURSOS',
    'width' => '10%',
    'default' => true,
  ),
  'solicitadopor' => 
  array (
    'type' => 'dynamicenum',
    'studio' => 'visible',
    'vname' => 'LBL_SOLICITADOPOR',
    'width' => '10%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'vname' => 'LBL_REMOVE',
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'Doc_Documentos_Adic',
    'width' => '5%',
    'default' => true,
  ),
);