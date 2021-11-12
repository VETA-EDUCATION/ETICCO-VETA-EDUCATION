<?php
$module_name = 'Veta_LooCorreccion';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'ESTUDIANTE' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_ESTUDIANTE',
    'id' => 'CONTACT_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
  ),
  'PROSPECTO' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_PROSPECTO',
    'id' => 'LEAD_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
  ),
  'FECHA_SOLICITUD' => 
  array (
    'type' => 'date',
    'label' => 'LBL_FECHA_SOLICITUD',
    'width' => '10%',
    'default' => true,
  ),
  'FECHA_CORRECCION' => 
  array (
    'type' => 'date',
    'label' => 'LBL_FECHA_CORRECCION',
    'width' => '10%',
    'default' => true,
  ),
  'VETA_LOOCORRECCION_VETA_LOO_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_VETA_LOOCORRECCION_VETA_LOO_FROM_VETA_LOO_TITLE',
    'id' => 'VETA_LOOCORRECCION_VETA_LOOVETA_LOO_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => false,
  ),
);
;
?>
