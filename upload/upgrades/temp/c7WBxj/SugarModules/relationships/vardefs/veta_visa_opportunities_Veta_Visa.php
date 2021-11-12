<?php
// created: 2019-11-02 19:30:45
$dictionary["Veta_Visa"]["fields"]["veta_visa_opportunities"] = array (
  'name' => 'veta_visa_opportunities',
  'type' => 'link',
  'relationship' => 'veta_visa_opportunities',
  'source' => 'non-db',
  'module' => 'Opportunities',
  'bean_name' => 'Opportunity',
  'vname' => 'LBL_VETA_VISA_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE',
  'id_name' => 'veta_visa_opportunitiesopportunities_ida',
);
$dictionary["Veta_Visa"]["fields"]["veta_visa_opportunities_name"] = array (
  'name' => 'veta_visa_opportunities_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_VETA_VISA_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE',
  'save' => true,
  'id_name' => 'veta_visa_opportunitiesopportunities_ida',
  'link' => 'veta_visa_opportunities',
  'table' => 'opportunities',
  'module' => 'Opportunities',
  'rname' => 'name',
);
$dictionary["Veta_Visa"]["fields"]["veta_visa_opportunitiesopportunities_ida"] = array (
  'name' => 'veta_visa_opportunitiesopportunities_ida',
  'type' => 'link',
  'relationship' => 'veta_visa_opportunities',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_VETA_VISA_OPPORTUNITIES_FROM_VETA_VISA_TITLE',
);
