<?php
// created: 2019-11-02 17:11:43
$dictionary["Case"]["fields"]["opportunities_cases_1"] = array (
  'name' => 'opportunities_cases_1',
  'type' => 'link',
  'relationship' => 'opportunities_cases_1',
  'source' => 'non-db',
  'module' => 'Opportunities',
  'bean_name' => 'Opportunity',
  'vname' => 'LBL_OPPORTUNITIES_CASES_1_FROM_OPPORTUNITIES_TITLE',
  'id_name' => 'opportunities_cases_1opportunities_ida',
);
$dictionary["Case"]["fields"]["opportunities_cases_1_name"] = array (
  'name' => 'opportunities_cases_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_OPPORTUNITIES_CASES_1_FROM_OPPORTUNITIES_TITLE',
  'save' => true,
  'id_name' => 'opportunities_cases_1opportunities_ida',
  'link' => 'opportunities_cases_1',
  'table' => 'opportunities',
  'module' => 'Opportunities',
  'rname' => 'name',
);
$dictionary["Case"]["fields"]["opportunities_cases_1opportunities_ida"] = array (
  'name' => 'opportunities_cases_1opportunities_ida',
  'type' => 'link',
  'relationship' => 'opportunities_cases_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_OPPORTUNITIES_CASES_1_FROM_CASES_TITLE',
);
