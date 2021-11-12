<?php
// created: 2019-12-15 13:44:45
$dictionary["Veta_ServicioCliente"]["fields"]["veta_serviciocliente_opportunities"] = array (
  'name' => 'veta_serviciocliente_opportunities',
  'type' => 'link',
  'relationship' => 'veta_serviciocliente_opportunities',
  'source' => 'non-db',
  'module' => 'Opportunities',
  'bean_name' => 'Opportunity',
  'vname' => 'LBL_VETA_SERVICIOCLIENTE_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE',
  'id_name' => 'veta_serviciocliente_opportunitiesopportunities_ida',
);
$dictionary["Veta_ServicioCliente"]["fields"]["veta_serviciocliente_opportunities_name"] = array (
  'name' => 'veta_serviciocliente_opportunities_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_VETA_SERVICIOCLIENTE_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE',
  'save' => true,
  'id_name' => 'veta_serviciocliente_opportunitiesopportunities_ida',
  'link' => 'veta_serviciocliente_opportunities',
  'table' => 'opportunities',
  'module' => 'Opportunities',
  'rname' => 'name',
);
$dictionary["Veta_ServicioCliente"]["fields"]["veta_serviciocliente_opportunitiesopportunities_ida"] = array (
  'name' => 'veta_serviciocliente_opportunitiesopportunities_ida',
  'type' => 'link',
  'relationship' => 'veta_serviciocliente_opportunities',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_VETA_SERVICIOCLIENTE_OPPORTUNITIES_FROM_VETA_SERVICIOCLIENTE_TITLE',
);
