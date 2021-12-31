<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2021-09-02 13:15:24
$dictionary["Veta_Recibo"]["fields"]["veta_recibo_contacts"] = array (
  'name' => 'veta_recibo_contacts',
  'type' => 'link',
  'relationship' => 'veta_recibo_contacts',
  'source' => 'non-db',
  'module' => 'Contacts',
  'bean_name' => 'Contact',
  'vname' => 'LBL_VETA_RECIBO_CONTACTS_FROM_CONTACTS_TITLE',
  'id_name' => 'veta_recibo_contactscontacts_ida',
);
$dictionary["Veta_Recibo"]["fields"]["veta_recibo_contacts_name"] = array (
  'name' => 'veta_recibo_contacts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_VETA_RECIBO_CONTACTS_FROM_CONTACTS_TITLE',
  'save' => true,
  'id_name' => 'veta_recibo_contactscontacts_ida',
  'link' => 'veta_recibo_contacts',
  'table' => 'contacts',
  'module' => 'Contacts',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["Veta_Recibo"]["fields"]["veta_recibo_contactscontacts_ida"] = array (
  'name' => 'veta_recibo_contactscontacts_ida',
  'type' => 'link',
  'relationship' => 'veta_recibo_contacts',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_VETA_RECIBO_CONTACTS_FROM_VETA_RECIBO_TITLE',
);


// created: 2021-09-02 13:15:24
$dictionary["Veta_Recibo"]["fields"]["veta_recibo_veta_presupuesto"] = array (
  'name' => 'veta_recibo_veta_presupuesto',
  'type' => 'link',
  'relationship' => 'veta_recibo_veta_presupuesto',
  'source' => 'non-db',
  'module' => 'Veta_Presupuesto',
  'bean_name' => 'Veta_Presupuesto',
  'vname' => 'LBL_VETA_RECIBO_VETA_PRESUPUESTO_FROM_VETA_PRESUPUESTO_TITLE',
  'id_name' => 'veta_recibo_veta_presupuestoveta_presupuesto_ida',
);
$dictionary["Veta_Recibo"]["fields"]["veta_recibo_veta_presupuesto_name"] = array (
  'name' => 'veta_recibo_veta_presupuesto_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_VETA_RECIBO_VETA_PRESUPUESTO_FROM_VETA_PRESUPUESTO_TITLE',
  'save' => true,
  'id_name' => 'veta_recibo_veta_presupuestoveta_presupuesto_ida',
  'link' => 'veta_recibo_veta_presupuesto',
  'table' => 'veta_presupuesto',
  'module' => 'Veta_Presupuesto',
  'rname' => 'name',
);
$dictionary["Veta_Recibo"]["fields"]["veta_recibo_veta_presupuestoveta_presupuesto_ida"] = array (
  'name' => 'veta_recibo_veta_presupuestoveta_presupuesto_ida',
  'type' => 'link',
  'relationship' => 'veta_recibo_veta_presupuesto',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_VETA_RECIBO_VETA_PRESUPUESTO_FROM_VETA_RECIBO_TITLE',
);


// created: 2021-09-02 13:15:24
$dictionary["Veta_Recibo"]["fields"]["veta_recibo_leads"] = array (
  'name' => 'veta_recibo_leads',
  'type' => 'link',
  'relationship' => 'veta_recibo_leads',
  'source' => 'non-db',
  'module' => 'Leads',
  'bean_name' => 'Lead',
  'vname' => 'LBL_VETA_RECIBO_LEADS_FROM_LEADS_TITLE',
  'id_name' => 'veta_recibo_leadsleads_ida',
);
$dictionary["Veta_Recibo"]["fields"]["veta_recibo_leads_name"] = array (
  'name' => 'veta_recibo_leads_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_VETA_RECIBO_LEADS_FROM_LEADS_TITLE',
  'save' => true,
  'id_name' => 'veta_recibo_leadsleads_ida',
  'link' => 'veta_recibo_leads',
  'table' => 'leads',
  'module' => 'Leads',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["Veta_Recibo"]["fields"]["veta_recibo_leadsleads_ida"] = array (
  'name' => 'veta_recibo_leadsleads_ida',
  'type' => 'link',
  'relationship' => 'veta_recibo_leads',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_VETA_RECIBO_LEADS_FROM_VETA_RECIBO_TITLE',
);


// created: 2021-09-02 13:15:21
$dictionary["Veta_Recibo"]["fields"]["veta_abono_veta_recibo"] = array (
  'name' => 'veta_abono_veta_recibo',
  'type' => 'link',
  'relationship' => 'veta_abono_veta_recibo',
  'source' => 'non-db',
  'module' => 'Veta_Abono',
  'bean_name' => 'Veta_Abono',
  'side' => 'right',
  'vname' => 'LBL_VETA_ABONO_VETA_RECIBO_FROM_VETA_ABONO_TITLE',
);


// created: 2021-09-02 13:15:21
$dictionary["Veta_Recibo"]["fields"]["veta_devolucion_veta_recibo"] = array (
  'name' => 'veta_devolucion_veta_recibo',
  'type' => 'link',
  'relationship' => 'veta_devolucion_veta_recibo',
  'source' => 'non-db',
  'module' => 'Veta_Devolucion',
  'bean_name' => false,
  'side' => 'right',
  'vname' => 'LBL_VETA_DEVOLUCION_VETA_RECIBO_FROM_VETA_DEVOLUCION_TITLE',
);


// created: 2021-09-02 13:15:24
$dictionary["Veta_Recibo"]["fields"]["veta_detallerecibo_veta_recibo"] = array (
  'name' => 'veta_detallerecibo_veta_recibo',
  'type' => 'link',
  'relationship' => 'veta_detallerecibo_veta_recibo',
  'source' => 'non-db',
  'module' => 'Veta_DetalleRecibo',
  'bean_name' => 'Veta_DetalleRecibo',
  'side' => 'right',
  'vname' => 'LBL_VETA_DETALLERECIBO_VETA_RECIBO_FROM_VETA_DETALLERECIBO_TITLE',
);


// created: 2021-09-02 13:15:24
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



$dictionary['Veta_Recibo']['fields']['soel_asegurador'] = array(
    'name' => 'soel_asegurador',
    'vname' => 'LBL_SOEL_ASEGURADOR',
    'type' => 'enum',
    'source' => 'non-db',
    'function' => 'getAseguradores',
    
);


// created: 2021-09-02 13:15:24
$dictionary["Veta_Recibo"]["fields"]["veta_recibo_emails"] = array (
  'name' => 'veta_recibo_emails',
  'type' => 'link',
  'relationship' => 'veta_recibo_emails',
  'source' => 'non-db',
  'module' => 'Emails',
  'bean_name' => 'Email',
  'side' => 'right',
  'vname' => 'LBL_VETA_RECIBO_EMAILS_FROM_EMAILS_TITLE',
);


// created: 2021-09-02 13:15:25
$dictionary["Veta_Recibo"]["fields"]["veta_detallereciboitem_veta_recibo"] = array (
  'name' => 'veta_detallereciboitem_veta_recibo',
  'type' => 'link',
  'relationship' => 'veta_detallereciboitem_veta_recibo',
  'source' => 'non-db',
  'module' => 'Veta_DetalleReciboItem',
  'bean_name' => 'Veta_DetalleReciboItem',
  'side' => 'right',
  'vname' => 'LBL_VETA_DETALLERECIBOITEM_VETA_RECIBO_FROM_VETA_DETALLERECIBOITEM_TITLE',
);


// created: 2021-09-02 13:15:25
$dictionary["Veta_Recibo"]["fields"]["veta_requerimiento_veta_recibo"] = array (
  'name' => 'veta_requerimiento_veta_recibo',
  'type' => 'link',
  'relationship' => 'veta_requerimiento_veta_recibo',
  'source' => 'non-db',
  'module' => 'Veta_Requerimiento',
  'bean_name' => 'Veta_Requerimiento',
  'vname' => 'LBL_VETA_REQUERIMIENTO_VETA_RECIBO_FROM_VETA_REQUERIMIENTO_TITLE',
  'id_name' => 'veta_requerimiento_veta_reciboveta_requerimiento_ida',
);
$dictionary["Veta_Recibo"]["fields"]["veta_requerimiento_veta_recibo_name"] = array (
  'name' => 'veta_requerimiento_veta_recibo_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_VETA_REQUERIMIENTO_VETA_RECIBO_FROM_VETA_REQUERIMIENTO_TITLE',
  'save' => true,
  'id_name' => 'veta_requerimiento_veta_reciboveta_requerimiento_ida',
  'link' => 'veta_requerimiento_veta_recibo',
  'table' => 'veta_requerimiento',
  'module' => 'Veta_Requerimiento',
  'rname' => 'name',
);
$dictionary["Veta_Recibo"]["fields"]["veta_requerimiento_veta_reciboveta_requerimiento_ida"] = array (
  'name' => 'veta_requerimiento_veta_reciboveta_requerimiento_ida',
  'type' => 'link',
  'relationship' => 'veta_requerimiento_veta_recibo',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_VETA_REQUERIMIENTO_VETA_RECIBO_FROM_VETA_RECIBO_TITLE',
);


 // created: 2021-11-21 10:49:26
$dictionary['Veta_Recibo']['fields']['tiquete_c']['inline_edit']='1';
$dictionary['Veta_Recibo']['fields']['tiquete_c']['labelValue']='Veta Travel Tiquete';

 

 // created: 2021-11-21 10:48:55
$dictionary['Veta_Recibo']['fields']['moneda_c']['inline_edit']='1';
$dictionary['Veta_Recibo']['fields']['moneda_c']['labelValue']='Moneda pago';

 

 // created: 2021-11-21 10:49:39
$dictionary['Veta_Recibo']['fields']['mmm_c']['inline_edit']='1';
$dictionary['Veta_Recibo']['fields']['mmm_c']['labelValue']='MMM';

 

 // created: 2021-11-21 10:50:24
$dictionary['Veta_Recibo']['fields']['tour_c']['inline_edit']='1';
$dictionary['Veta_Recibo']['fields']['tour_c']['labelValue']='Veta Travel Tour';

 

 // created: 2021-11-21 10:49:52
$dictionary['Veta_Recibo']['fields']['hospedaje_c']['inline_edit']='1';
$dictionary['Veta_Recibo']['fields']['hospedaje_c']['labelValue']='Hospedaje';

 

 // created: 2021-11-21 10:50:08
$dictionary['Veta_Recibo']['fields']['aeropuerto_c']['inline_edit']='1';
$dictionary['Veta_Recibo']['fields']['aeropuerto_c']['labelValue']='Veta Travel Aeropuerto';

 
?>