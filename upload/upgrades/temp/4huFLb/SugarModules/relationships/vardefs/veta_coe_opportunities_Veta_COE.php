<?php
// created: 2019-11-23 12:29:59
$dictionary["Veta_COE"]["fields"]["veta_coe_opportunities"] = array (
  'name' => 'veta_coe_opportunities',
  'type' => 'link',
  'relationship' => 'veta_coe_opportunities',
  'source' => 'non-db',
  'module' => 'Opportunities',
  'bean_name' => 'Opportunity',
  'vname' => 'LBL_VETA_COE_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE',
  'id_name' => 'veta_coe_opportunitiesopportunities_ida',
);
$dictionary["Veta_COE"]["fields"]["veta_coe_opportunities_name"] = array (
  'name' => 'veta_coe_opportunities_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_VETA_COE_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE',
  'save' => true,
  'id_name' => 'veta_coe_opportunitiesopportunities_ida',
  'link' => 'veta_coe_opportunities',
  'table' => 'opportunities',
  'module' => 'Opportunities',
  'rname' => 'name',
);
$dictionary["Veta_COE"]["fields"]["veta_coe_opportunitiesopportunities_ida"] = array (
  'name' => 'veta_coe_opportunitiesopportunities_ida',
  'type' => 'link',
  'relationship' => 'veta_coe_opportunities',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_VETA_COE_OPPORTUNITIES_FROM_VETA_COE_TITLE',
);
