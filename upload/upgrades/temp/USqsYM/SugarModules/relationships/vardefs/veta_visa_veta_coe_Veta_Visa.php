<?php
// created: 2019-10-17 10:45:51
$dictionary["Veta_Visa"]["fields"]["veta_visa_veta_coe"] = array (
  'name' => 'veta_visa_veta_coe',
  'type' => 'link',
  'relationship' => 'veta_visa_veta_coe',
  'source' => 'non-db',
  'module' => 'Veta_COE',
  'bean_name' => 'Veta_COE',
  'vname' => 'LBL_VETA_VISA_VETA_COE_FROM_VETA_COE_TITLE',
  'id_name' => 'veta_visa_veta_coeveta_coe_ida',
);
$dictionary["Veta_Visa"]["fields"]["veta_visa_veta_coe_name"] = array (
  'name' => 'veta_visa_veta_coe_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_VETA_VISA_VETA_COE_FROM_VETA_COE_TITLE',
  'save' => true,
  'id_name' => 'veta_visa_veta_coeveta_coe_ida',
  'link' => 'veta_visa_veta_coe',
  'table' => 'veta_coe',
  'module' => 'Veta_COE',
  'rname' => 'name',
);
$dictionary["Veta_Visa"]["fields"]["veta_visa_veta_coeveta_coe_ida"] = array (
  'name' => 'veta_visa_veta_coeveta_coe_ida',
  'type' => 'link',
  'relationship' => 'veta_visa_veta_coe',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_VETA_VISA_VETA_COE_FROM_VETA_VISA_TITLE',
);
