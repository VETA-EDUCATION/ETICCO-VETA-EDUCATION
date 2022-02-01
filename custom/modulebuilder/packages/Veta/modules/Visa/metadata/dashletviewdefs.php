<?php
$dashletData['Veta_VisaDashlet']['searchFields'] = array (
  'name' => 
  array (
    'default' => '',
  ),
  'estado' => 
  array (
    'default' => '',
  ),
  'fecha_aplicacion' => 
  array (
    'default' => '',
  ),
  'fecha_pago' => 
  array (
    'default' => '',
  ),
  'fecha_otorgada' => 
  array (
    'default' => '',
  ),
  'fecha_firma_acta' => 
  array (
    'default' => '',
  ),
  'fecha_expiracion' => 
  array (
    'default' => '',
  ),
  'fecha_examenes_medicos' => 
  array (
    'default' => '',
  ),
  'fecha_avac' => 
  array (
    'default' => '',
  ),
  'veta_visa_veta_coe_name' => 
  array (
    'default' => '',
  ),
  'veta_visa_opportunities_name' => 
  array (
    'default' => '',
  ),
);
$dashletData['Veta_VisaDashlet']['columns'] = array (
  'name' => 
  array (
    'width' => '40%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'estado' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_ESTADO',
    'width' => '10%',
    'default' => true,
    'name' => 'estado',
  ),
  'veta_visa_opportunities_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_VETA_VISA_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE',
    'id' => 'VETA_VISA_OPPORTUNITIESOPPORTUNITIES_IDA',
    'width' => '10%',
    'default' => true,
    'name' => 'veta_visa_opportunities_name',
  ),
  'veta_visa_veta_coe_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_VETA_VISA_VETA_COE_FROM_VETA_COE_TITLE',
    'id' => 'VETA_VISA_VETA_COEVETA_COE_IDA',
    'width' => '10%',
    'default' => true,
    'name' => 'veta_visa_veta_coe_name',
  ),
  'date_entered' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => true,
    'name' => 'date_entered',
  ),
  'date_modified' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_MODIFIED',
    'name' => 'date_modified',
    'default' => false,
  ),
  'created_by' => 
  array (
    'width' => '8%',
    'label' => 'LBL_CREATED',
    'name' => 'created_by',
    'default' => false,
  ),
  'assigned_user_name' => 
  array (
    'width' => '8%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'name' => 'assigned_user_name',
    'default' => false,
  ),
);
