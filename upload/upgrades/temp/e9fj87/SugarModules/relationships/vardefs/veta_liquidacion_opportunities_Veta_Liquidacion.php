<?php
// created: 2019-12-02 08:33:50
$dictionary["Veta_Liquidacion"]["fields"]["veta_liquidacion_opportunities"] = array (
  'name' => 'veta_liquidacion_opportunities',
  'type' => 'link',
  'relationship' => 'veta_liquidacion_opportunities',
  'source' => 'non-db',
  'module' => 'Opportunities',
  'bean_name' => 'Opportunity',
  'vname' => 'LBL_VETA_LIQUIDACION_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE',
  'id_name' => 'veta_liquidacion_opportunitiesopportunities_ida',
);
$dictionary["Veta_Liquidacion"]["fields"]["veta_liquidacion_opportunities_name"] = array (
  'name' => 'veta_liquidacion_opportunities_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_VETA_LIQUIDACION_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE',
  'save' => true,
  'id_name' => 'veta_liquidacion_opportunitiesopportunities_ida',
  'link' => 'veta_liquidacion_opportunities',
  'table' => 'opportunities',
  'module' => 'Opportunities',
  'rname' => 'name',
);
$dictionary["Veta_Liquidacion"]["fields"]["veta_liquidacion_opportunitiesopportunities_ida"] = array (
  'name' => 'veta_liquidacion_opportunitiesopportunities_ida',
  'type' => 'link',
  'relationship' => 'veta_liquidacion_opportunities',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_VETA_LIQUIDACION_OPPORTUNITIES_FROM_VETA_LIQUIDACION_TITLE',
);
