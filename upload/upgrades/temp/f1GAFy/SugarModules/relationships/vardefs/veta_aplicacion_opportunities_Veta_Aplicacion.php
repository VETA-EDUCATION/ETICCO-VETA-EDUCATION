<?php
// created: 2019-11-23 19:25:02
$dictionary["Veta_Aplicacion"]["fields"]["veta_aplicacion_opportunities"] = array (
  'name' => 'veta_aplicacion_opportunities',
  'type' => 'link',
  'relationship' => 'veta_aplicacion_opportunities',
  'source' => 'non-db',
  'module' => 'Opportunities',
  'bean_name' => 'Opportunity',
  'vname' => 'LBL_VETA_APLICACION_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE',
  'id_name' => 'veta_aplicacion_opportunitiesopportunities_ida',
);
$dictionary["Veta_Aplicacion"]["fields"]["veta_aplicacion_opportunities_name"] = array (
  'name' => 'veta_aplicacion_opportunities_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_VETA_APLICACION_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE',
  'save' => true,
  'id_name' => 'veta_aplicacion_opportunitiesopportunities_ida',
  'link' => 'veta_aplicacion_opportunities',
  'table' => 'opportunities',
  'module' => 'Opportunities',
  'rname' => 'name',
);
$dictionary["Veta_Aplicacion"]["fields"]["veta_aplicacion_opportunitiesopportunities_ida"] = array (
  'name' => 'veta_aplicacion_opportunitiesopportunities_ida',
  'type' => 'link',
  'relationship' => 'veta_aplicacion_opportunities',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_VETA_APLICACION_OPPORTUNITIES_FROM_VETA_APLICACION_TITLE',
);
