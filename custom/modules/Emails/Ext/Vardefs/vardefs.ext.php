<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2021-09-02 13:15:23
$dictionary["Email"]["fields"]["veta_visa_activities_emails"] = array (
  'name' => 'veta_visa_activities_emails',
  'type' => 'link',
  'relationship' => 'veta_visa_activities_emails',
  'source' => 'non-db',
  'module' => 'Veta_Visa',
  'bean_name' => 'Veta_Visa',
  'vname' => 'LBL_VETA_VISA_ACTIVITIES_EMAILS_FROM_VETA_VISA_TITLE',
);


// created: 2021-09-02 13:15:24
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


// created: 2021-09-02 13:15:21
$dictionary["Email"]["fields"]["veta_liquidacion_activities_emails"] = array (
  'name' => 'veta_liquidacion_activities_emails',
  'type' => 'link',
  'relationship' => 'veta_liquidacion_activities_emails',
  'source' => 'non-db',
  'module' => 'Veta_Liquidacion',
  'bean_name' => 'Veta_Liquidacion',
  'vname' => 'LBL_VETA_LIQUIDACION_ACTIVITIES_EMAILS_FROM_VETA_LIQUIDACION_TITLE',
);


// created: 2021-09-02 13:15:24
$dictionary["Email"]["fields"]["veta_coe_activities_emails"] = array (
  'name' => 'veta_coe_activities_emails',
  'type' => 'link',
  'relationship' => 'veta_coe_activities_emails',
  'source' => 'non-db',
  'module' => 'Veta_COE',
  'bean_name' => 'Veta_COE',
  'vname' => 'LBL_VETA_COE_ACTIVITIES_EMAILS_FROM_VETA_COE_TITLE',
);


// created: 2021-09-02 13:15:21
$dictionary["Email"]["fields"]["veta_aplicacion_activities_emails"] = array (
  'name' => 'veta_aplicacion_activities_emails',
  'type' => 'link',
  'relationship' => 'veta_aplicacion_activities_emails',
  'source' => 'non-db',
  'module' => 'Veta_Aplicacion',
  'bean_name' => 'Veta_Aplicacion',
  'vname' => 'LBL_VETA_APLICACION_ACTIVITIES_EMAILS_FROM_VETA_APLICACION_TITLE',
);


// created: 2021-09-02 13:15:22
$dictionary["Email"]["fields"]["veta_pagocolegios_activities_emails"] = array (
  'name' => 'veta_pagocolegios_activities_emails',
  'type' => 'link',
  'relationship' => 'veta_pagocolegios_activities_emails',
  'source' => 'non-db',
  'module' => 'Veta_PagoColegios',
  'bean_name' => 'Veta_PagoColegios',
  'vname' => 'LBL_VETA_PAGOCOLEGIOS_ACTIVITIES_EMAILS_FROM_VETA_PAGOCOLEGIOS_TITLE',
);


// created: 2021-09-02 13:15:22
$dictionary["Email"]["fields"]["veta_loo_activities_emails"] = array (
  'name' => 'veta_loo_activities_emails',
  'type' => 'link',
  'relationship' => 'veta_loo_activities_emails',
  'source' => 'non-db',
  'module' => 'Veta_Loo',
  'bean_name' => 'Veta_Loo',
  'vname' => 'LBL_VETA_LOO_ACTIVITIES_EMAILS_FROM_VETA_LOO_TITLE',
);


// created: 2021-09-02 13:15:22
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


// created: 2021-05-04 17:11:25
$dictionary["Email"]["fields"]["veta_requerimiento_activities_1_emails"] = array (
  'name' => 'veta_requerimiento_activities_1_emails',
  'type' => 'link',
  'relationship' => 'veta_requerimiento_activities_1_emails',
  'source' => 'non-db',
  'module' => 'Veta_Requerimiento',
  'bean_name' => 'Veta_Requerimiento',
  'vname' => 'LBL_VETA_REQUERIMIENTO_ACTIVITIES_1_EMAILS_FROM_VETA_REQUERIMIENTO_TITLE',
);

?>