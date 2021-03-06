<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2021-09-02 13:15:23
$dictionary["Veta_Pasaporte"]["fields"]["veta_pasaporte_leads"] = array (
  'name' => 'veta_pasaporte_leads',
  'type' => 'link',
  'relationship' => 'veta_pasaporte_leads',
  'source' => 'non-db',
  'module' => 'Leads',
  'bean_name' => 'Lead',
  'vname' => 'LBL_VETA_PASAPORTE_LEADS_FROM_LEADS_TITLE',
  'id_name' => 'veta_pasaporte_leadsleads_ida',
);
$dictionary["Veta_Pasaporte"]["fields"]["veta_pasaporte_leads_name"] = array (
  'name' => 'veta_pasaporte_leads_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_VETA_PASAPORTE_LEADS_FROM_LEADS_TITLE',
  'save' => true,
  'id_name' => 'veta_pasaporte_leadsleads_ida',
  'link' => 'veta_pasaporte_leads',
  'table' => 'leads',
  'module' => 'Leads',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["Veta_Pasaporte"]["fields"]["veta_pasaporte_leadsleads_ida"] = array (
  'name' => 'veta_pasaporte_leadsleads_ida',
  'type' => 'link',
  'relationship' => 'veta_pasaporte_leads',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_VETA_PASAPORTE_LEADS_FROM_VETA_PASAPORTE_TITLE',
);


// created: 2021-09-02 13:15:23
$dictionary["Veta_Pasaporte"]["fields"]["veta_pasaporte_contacts"] = array (
  'name' => 'veta_pasaporte_contacts',
  'type' => 'link',
  'relationship' => 'veta_pasaporte_contacts',
  'source' => 'non-db',
  'module' => 'Contacts',
  'bean_name' => 'Contact',
  'vname' => 'LBL_VETA_PASAPORTE_CONTACTS_FROM_CONTACTS_TITLE',
  'id_name' => 'veta_pasaporte_contactscontacts_ida',
);
$dictionary["Veta_Pasaporte"]["fields"]["veta_pasaporte_contacts_name"] = array (
  'name' => 'veta_pasaporte_contacts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_VETA_PASAPORTE_CONTACTS_FROM_CONTACTS_TITLE',
  'save' => true,
  'id_name' => 'veta_pasaporte_contactscontacts_ida',
  'link' => 'veta_pasaporte_contacts',
  'table' => 'contacts',
  'module' => 'Contacts',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["Veta_Pasaporte"]["fields"]["veta_pasaporte_contactscontacts_ida"] = array (
  'name' => 'veta_pasaporte_contactscontacts_ida',
  'type' => 'link',
  'relationship' => 'veta_pasaporte_contacts',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_VETA_PASAPORTE_CONTACTS_FROM_VETA_PASAPORTE_TITLE',
);

?>