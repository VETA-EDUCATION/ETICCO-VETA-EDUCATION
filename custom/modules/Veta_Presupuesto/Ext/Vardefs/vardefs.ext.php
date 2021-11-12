<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2021-09-02 13:15:22
$dictionary["Veta_Presupuesto"]["fields"]["veta_detallepresupuesto_veta_presupuesto"] = array (
  'name' => 'veta_detallepresupuesto_veta_presupuesto',
  'type' => 'link',
  'relationship' => 'veta_detallepresupuesto_veta_presupuesto',
  'source' => 'non-db',
  'module' => 'Veta_DetallePresupuesto',
  'bean_name' => 'Veta_DetallePresupuesto',
  'side' => 'right',
  'vname' => 'LBL_VETA_DETALLEPRESUPUESTO_VETA_PRESUPUESTO_FROM_VETA_DETALLEPRESUPUESTO_TITLE',
);


// created: 2021-09-02 13:15:22
$dictionary["Veta_Presupuesto"]["fields"]["veta_presupuesto_contacts"] = array (
  'name' => 'veta_presupuesto_contacts',
  'type' => 'link',
  'relationship' => 'veta_presupuesto_contacts',
  'source' => 'non-db',
  'module' => 'Contacts',
  'bean_name' => 'Contact',
  'vname' => 'LBL_VETA_PRESUPUESTO_CONTACTS_FROM_CONTACTS_TITLE',
  'id_name' => 'veta_presupuesto_contactscontacts_ida',
);
$dictionary["Veta_Presupuesto"]["fields"]["veta_presupuesto_contacts_name"] = array (
  'name' => 'veta_presupuesto_contacts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_VETA_PRESUPUESTO_CONTACTS_FROM_CONTACTS_TITLE',
  'save' => true,
  'id_name' => 'veta_presupuesto_contactscontacts_ida',
  'link' => 'veta_presupuesto_contacts',
  'table' => 'contacts',
  'module' => 'Contacts',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["Veta_Presupuesto"]["fields"]["veta_presupuesto_contactscontacts_ida"] = array (
  'name' => 'veta_presupuesto_contactscontacts_ida',
  'type' => 'link',
  'relationship' => 'veta_presupuesto_contacts',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_VETA_PRESUPUESTO_CONTACTS_FROM_VETA_PRESUPUESTO_TITLE',
);


// created: 2021-09-02 13:15:24
$dictionary["Veta_Presupuesto"]["fields"]["veta_recibo_veta_presupuesto"] = array (
  'name' => 'veta_recibo_veta_presupuesto',
  'type' => 'link',
  'relationship' => 'veta_recibo_veta_presupuesto',
  'source' => 'non-db',
  'module' => 'Veta_Recibo',
  'bean_name' => 'Veta_Recibo',
  'side' => 'right',
  'vname' => 'LBL_VETA_RECIBO_VETA_PRESUPUESTO_FROM_VETA_RECIBO_TITLE',
);



$dictionary['Veta_Presupuesto']['fields']['soel_asegurador'] = array(
    'name' => 'soel_asegurador',
    'vname' => 'LBL_SOEL_ASEGURADOR',
    'type' => 'enum',
    'source' => 'non-db',
    'function' => 'getAseguradores',
);


// created: 2021-09-02 13:15:22
$dictionary["Veta_Presupuesto"]["fields"]["veta_presupuesto_emails"] = array (
  'name' => 'veta_presupuesto_emails',
  'type' => 'link',
  'relationship' => 'veta_presupuesto_emails',
  'source' => 'non-db',
  'module' => 'Emails',
  'bean_name' => 'Email',
  'side' => 'right',
  'vname' => 'LBL_VETA_PRESUPUESTO_EMAILS_FROM_EMAILS_TITLE',
);


// created: 2021-09-02 13:15:25
$dictionary["Veta_Presupuesto"]["fields"]["veta_requerimiento_veta_presupuesto"] = array (
  'name' => 'veta_requerimiento_veta_presupuesto',
  'type' => 'link',
  'relationship' => 'veta_requerimiento_veta_presupuesto',
  'source' => 'non-db',
  'module' => 'Veta_Requerimiento',
  'bean_name' => 'Veta_Requerimiento',
  'vname' => 'LBL_VETA_REQUERIMIENTO_VETA_PRESUPUESTO_FROM_VETA_REQUERIMIENTO_TITLE',
  'id_name' => 'veta_requerimiento_veta_presupuestoveta_requerimiento_ida',
);
$dictionary["Veta_Presupuesto"]["fields"]["veta_requerimiento_veta_presupuesto_name"] = array (
  'name' => 'veta_requerimiento_veta_presupuesto_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_VETA_REQUERIMIENTO_VETA_PRESUPUESTO_FROM_VETA_REQUERIMIENTO_TITLE',
  'save' => true,
  'id_name' => 'veta_requerimiento_veta_presupuestoveta_requerimiento_ida',
  'link' => 'veta_requerimiento_veta_presupuesto',
  'table' => 'veta_requerimiento',
  'module' => 'Veta_Requerimiento',
  'rname' => 'name',
);
$dictionary["Veta_Presupuesto"]["fields"]["veta_requerimiento_veta_presupuestoveta_requerimiento_ida"] = array (
  'name' => 'veta_requerimiento_veta_presupuestoveta_requerimiento_ida',
  'type' => 'link',
  'relationship' => 'veta_requerimiento_veta_presupuesto',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_VETA_REQUERIMIENTO_VETA_PRESUPUESTO_FROM_VETA_PRESUPUESTO_TITLE',
);


// created: 2021-09-02 13:15:22
$dictionary["Veta_Presupuesto"]["fields"]["veta_presupuesto_leads"] = array (
  'name' => 'veta_presupuesto_leads',
  'type' => 'link',
  'relationship' => 'veta_presupuesto_leads',
  'source' => 'non-db',
  'module' => 'Leads',
  'bean_name' => 'Lead',
  'vname' => 'LBL_VETA_PRESUPUESTO_LEADS_FROM_LEADS_TITLE',
  'id_name' => 'veta_presupuesto_leadsleads_ida',
);
$dictionary["Veta_Presupuesto"]["fields"]["veta_presupuesto_leads_name"] = array (
  'name' => 'veta_presupuesto_leads_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_VETA_PRESUPUESTO_LEADS_FROM_LEADS_TITLE',
  'save' => true,
  'id_name' => 'veta_presupuesto_leadsleads_ida',
  'link' => 'veta_presupuesto_leads',
  'table' => 'leads',
  'module' => 'Leads',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["Veta_Presupuesto"]["fields"]["veta_presupuesto_leadsleads_ida"] = array (
  'name' => 'veta_presupuesto_leadsleads_ida',
  'type' => 'link',
  'relationship' => 'veta_presupuesto_leads',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_VETA_PRESUPUESTO_LEADS_FROM_VETA_PRESUPUESTO_TITLE',
);

?>