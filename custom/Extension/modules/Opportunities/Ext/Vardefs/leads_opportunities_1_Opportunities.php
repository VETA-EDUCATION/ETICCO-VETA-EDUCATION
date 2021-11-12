<?php
// created: 2019-12-07 16:06:28
$dictionary["Opportunity"]["fields"]["leads_opportunities_1"] = array (
  'name' => 'leads_opportunities_1',
  'type' => 'link',
  'relationship' => 'leads_opportunities_1',
  'source' => 'non-db',
  'module' => 'Leads',
  'bean_name' => 'Lead',
  'vname' => 'LBL_LEADS_OPPORTUNITIES_1_FROM_LEADS_TITLE',
  'id_name' => 'leads_opportunities_1leads_ida',
);
$dictionary["Opportunity"]["fields"]["leads_opportunities_1_name"] = array (
  'name' => 'leads_opportunities_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_LEADS_OPPORTUNITIES_1_FROM_LEADS_TITLE',
  'save' => true,
  'id_name' => 'leads_opportunities_1leads_ida',
  'link' => 'leads_opportunities_1',
  'table' => 'leads',
  'module' => 'Leads',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["Opportunity"]["fields"]["leads_opportunities_1leads_ida"] = array (
  'name' => 'leads_opportunities_1leads_ida',
  'type' => 'link',
  'relationship' => 'leads_opportunities_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_LEADS_OPPORTUNITIES_1_FROM_OPPORTUNITIES_TITLE',
);
