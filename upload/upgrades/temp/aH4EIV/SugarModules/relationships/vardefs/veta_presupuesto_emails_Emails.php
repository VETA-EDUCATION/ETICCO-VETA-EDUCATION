<?php
// created: 2019-12-19 13:16:52
$dictionary["Email"]["fields"]["veta_presupuesto_emails"] = array (
  'name' => 'veta_presupuesto_emails',
  'type' => 'link',
  'relationship' => 'veta_presupuesto_emails',
  'source' => 'non-db',
  'module' => 'Veta_Presupuesto',
  'bean_name' => 'Veta_Presupuesto',
  'vname' => 'LBL_VETA_PRESUPUESTO_EMAILS_FROM_VETA_PRESUPUESTO_TITLE',
  'id_name' => 'veta_presupuesto_emailsveta_presupuesto_ida',
);
$dictionary["Email"]["fields"]["veta_presupuesto_emails_name"] = array (
  'name' => 'veta_presupuesto_emails_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_VETA_PRESUPUESTO_EMAILS_FROM_VETA_PRESUPUESTO_TITLE',
  'save' => true,
  'id_name' => 'veta_presupuesto_emailsveta_presupuesto_ida',
  'link' => 'veta_presupuesto_emails',
  'table' => 'veta_presupuesto',
  'module' => 'Veta_Presupuesto',
  'rname' => 'name',
);
$dictionary["Email"]["fields"]["veta_presupuesto_emailsveta_presupuesto_ida"] = array (
  'name' => 'veta_presupuesto_emailsveta_presupuesto_ida',
  'type' => 'link',
  'relationship' => 'veta_presupuesto_emails',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_VETA_PRESUPUESTO_EMAILS_FROM_EMAILS_TITLE',
);
