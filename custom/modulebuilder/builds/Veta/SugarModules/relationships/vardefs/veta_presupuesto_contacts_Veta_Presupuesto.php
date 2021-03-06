<?php
// created: 2022-01-28 10:25:00
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
