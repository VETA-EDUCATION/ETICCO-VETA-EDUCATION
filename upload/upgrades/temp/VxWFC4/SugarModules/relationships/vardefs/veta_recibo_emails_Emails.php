<?php
// created: 2019-11-30 15:21:08
$dictionary["Email"]["fields"]["veta_recibo_emails"] = array (
  'name' => 'veta_recibo_emails',
  'type' => 'link',
  'relationship' => 'veta_recibo_emails',
  'source' => 'non-db',
  'module' => 'Veta_Recibo',
  'bean_name' => 'Veta_Recibo',
  'vname' => 'LBL_VETA_RECIBO_EMAILS_FROM_VETA_RECIBO_TITLE',
  'id_name' => 'veta_recibo_emailsveta_recibo_ida',
);
$dictionary["Email"]["fields"]["veta_recibo_emails_name"] = array (
  'name' => 'veta_recibo_emails_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_VETA_RECIBO_EMAILS_FROM_VETA_RECIBO_TITLE',
  'save' => true,
  'id_name' => 'veta_recibo_emailsveta_recibo_ida',
  'link' => 'veta_recibo_emails',
  'table' => 'veta_recibo',
  'module' => 'Veta_Recibo',
  'rname' => 'name',
);
$dictionary["Email"]["fields"]["veta_recibo_emailsveta_recibo_ida"] = array (
  'name' => 'veta_recibo_emailsveta_recibo_ida',
  'type' => 'link',
  'relationship' => 'veta_recibo_emails',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_VETA_RECIBO_EMAILS_FROM_EMAILS_TITLE',
);
