<?php
// created: 2019-10-15 14:09:43
$dictionary["Case"]["fields"]["veta_visa_cases"] = array (
  'name' => 'veta_visa_cases',
  'type' => 'link',
  'relationship' => 'veta_visa_cases',
  'source' => 'non-db',
  'module' => 'Veta_Visa',
  'bean_name' => 'Veta_Visa',
  'vname' => 'LBL_VETA_VISA_CASES_FROM_VETA_VISA_TITLE',
  'id_name' => 'veta_visa_casesveta_visa_ida',
);
$dictionary["Case"]["fields"]["veta_visa_cases_name"] = array (
  'name' => 'veta_visa_cases_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_VETA_VISA_CASES_FROM_VETA_VISA_TITLE',
  'save' => true,
  'id_name' => 'veta_visa_casesveta_visa_ida',
  'link' => 'veta_visa_cases',
  'table' => 'veta_visa',
  'module' => 'Veta_Visa',
  'rname' => 'name',
);
$dictionary["Case"]["fields"]["veta_visa_casesveta_visa_ida"] = array (
  'name' => 'veta_visa_casesveta_visa_ida',
  'type' => 'link',
  'relationship' => 'veta_visa_cases',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_VETA_VISA_CASES_FROM_CASES_TITLE',
);
