<?php
// created: 2022-01-28 10:25:08
$dictionary["Opportunity"]["fields"]["veta_recibo_opportunities"] = array (
  'name' => 'veta_recibo_opportunities',
  'type' => 'link',
  'relationship' => 'veta_recibo_opportunities',
  'source' => 'non-db',
  'module' => 'Veta_Recibo',
  'bean_name' => 'Veta_Recibo',
  'vname' => 'LBL_VETA_RECIBO_OPPORTUNITIES_FROM_VETA_RECIBO_TITLE',
  'id_name' => 'veta_recibo_opportunitiesveta_recibo_ida',
);
$dictionary["Opportunity"]["fields"]["veta_recibo_opportunities_name"] = array (
  'name' => 'veta_recibo_opportunities_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_VETA_RECIBO_OPPORTUNITIES_FROM_VETA_RECIBO_TITLE',
  'save' => true,
  'id_name' => 'veta_recibo_opportunitiesveta_recibo_ida',
  'link' => 'veta_recibo_opportunities',
  'table' => 'veta_recibo',
  'module' => 'Veta_Recibo',
  'rname' => 'name',
);
$dictionary["Opportunity"]["fields"]["veta_recibo_opportunitiesveta_recibo_ida"] = array (
  'name' => 'veta_recibo_opportunitiesveta_recibo_ida',
  'type' => 'link',
  'relationship' => 'veta_recibo_opportunities',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_VETA_RECIBO_OPPORTUNITIES_FROM_VETA_RECIBO_TITLE',
);
