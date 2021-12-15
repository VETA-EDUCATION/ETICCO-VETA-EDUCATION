<?php
// created: 2020-10-14 00:58:34
$dictionary["Veta_Recibo"]["fields"]["veta_recibo_opportunities"] = array (
  'name' => 'veta_recibo_opportunities',
  'type' => 'link',
  'relationship' => 'veta_recibo_opportunities',
  'source' => 'non-db',
  'module' => 'Opportunities',
  'bean_name' => 'Opportunity',
  'vname' => 'LBL_VETA_RECIBO_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE',
  'id_name' => 'veta_recibo_opportunitiesopportunities_idb',
);
$dictionary["Veta_Recibo"]["fields"]["veta_recibo_opportunities_name"] = array (
  'name' => 'veta_recibo_opportunities_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_VETA_RECIBO_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE',
  'save' => true,
  'id_name' => 'veta_recibo_opportunitiesopportunities_idb',
  'link' => 'veta_recibo_opportunities',
  'table' => 'opportunities',
  'module' => 'Opportunities',
  'rname' => 'name',
);
$dictionary["Veta_Recibo"]["fields"]["veta_recibo_opportunitiesopportunities_idb"] = array (
  'name' => 'veta_recibo_opportunitiesopportunities_idb',
  'type' => 'link',
  'relationship' => 'veta_recibo_opportunities',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_VETA_RECIBO_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE',
);
