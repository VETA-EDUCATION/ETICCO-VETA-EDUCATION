<?php
$listViewDefs ['Cases'] = 
array (
  'CASE_NUMBER' => 
  array (
    'width' => '5%',
    'label' => 'LBL_LIST_NUMBER',
    'default' => true,
  ),
  'ESTUDIANTE_C' => 
  array (
    'type' => 'relate',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_ESTUDIANTE',
    'id' => 'CONTACT_ID_C',
    'link' => true,
    'width' => '10%',
  ),
  'NAME' => 
  array (
    'width' => '25%',
    'label' => 'LBL_LIST_SUBJECT',
    'link' => true,
    'default' => true,
  ),
  'PRIORITY' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_PRIORITY',
    'default' => true,
  ),
  'STATUS' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_STATUS',
    'default' => true,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '10%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
  ),
  'DATE_ENTERED' => 
  array (
    'width' => '10%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => true,
  ),
  'VETA_LOO_CASES_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_VETA_LOO_CASES_FROM_VETA_LOO_TITLE',
    'id' => 'VETA_LOO_CASESVETA_LOO_IDA',
    'width' => '10%',
    'default' => false,
  ),
  'VETA_VISA_CASES_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_VETA_VISA_CASES_FROM_VETA_VISA_TITLE',
    'id' => 'VETA_VISA_CASESVETA_VISA_IDA',
    'width' => '10%',
    'default' => false,
  ),
  'VETA_APLICACION_CASES_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_VETA_APLICACION_CASES_FROM_VETA_APLICACION_TITLE',
    'id' => 'VETA_APLICACION_CASESVETA_APLICACION_IDA',
    'width' => '10%',
    'default' => false,
  ),
  'VETA_LIQUIDACION_CASES_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_VETA_LIQUIDACION_CASES_FROM_VETA_LIQUIDACION_TITLE',
    'id' => 'VETA_LIQUIDACION_CASESVETA_LIQUIDACION_IDA',
    'width' => '10%',
    'default' => false,
  ),
  'VETA_COE_CASES_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_VETA_COE_CASES_FROM_VETA_COE_TITLE',
    'id' => 'VETA_COE_CASESVETA_COE_IDA',
    'width' => '10%',
    'default' => false,
  ),
  'LEADS_CASES_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_LEADS_CASES_1_FROM_LEADS_TITLE',
    'id' => 'LEADS_CASES_1LEADS_IDA',
    'width' => '10%',
    'default' => false,
  ),
  'OPPORTUNITIES_CASES_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_OPPORTUNITIES_CASES_1_FROM_OPPORTUNITIES_TITLE',
    'id' => 'OPPORTUNITIES_CASES_1OPPORTUNITIES_IDA',
    'width' => '10%',
    'default' => false,
  ),
  'VETA_REQUERIMIENTO_CASES_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_VETA_REQUERIMIENTO_CASES_1_FROM_VETA_REQUERIMIENTO_TITLE',
    'id' => 'VETA_REQUERIMIENTO_CASES_1VETA_REQUERIMIENTO_IDA',
    'width' => '10%',
    'default' => false,
  ),
);
;
?>
