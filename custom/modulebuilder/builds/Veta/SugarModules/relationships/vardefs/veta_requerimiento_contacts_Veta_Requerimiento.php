<?php
// created: 2020-10-14 00:58:35
$dictionary["Veta_Requerimiento"]["fields"]["veta_requerimiento_contacts"] = array (
  'name' => 'veta_requerimiento_contacts',
  'type' => 'link',
  'relationship' => 'veta_requerimiento_contacts',
  'source' => 'non-db',
  'module' => 'Contacts',
  'bean_name' => 'Contact',
  'vname' => 'LBL_VETA_REQUERIMIENTO_CONTACTS_FROM_CONTACTS_TITLE',
  'id_name' => 'veta_requerimiento_contactscontacts_ida',
);
$dictionary["Veta_Requerimiento"]["fields"]["veta_requerimiento_contacts_name"] = array (
  'name' => 'veta_requerimiento_contacts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_VETA_REQUERIMIENTO_CONTACTS_FROM_CONTACTS_TITLE',
  'save' => true,
  'id_name' => 'veta_requerimiento_contactscontacts_ida',
  'link' => 'veta_requerimiento_contacts',
  'table' => 'contacts',
  'module' => 'Contacts',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["Veta_Requerimiento"]["fields"]["veta_requerimiento_contactscontacts_ida"] = array (
  'name' => 'veta_requerimiento_contactscontacts_ida',
  'type' => 'link',
  'relationship' => 'veta_requerimiento_contacts',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_VETA_REQUERIMIENTO_CONTACTS_FROM_VETA_REQUERIMIENTO_TITLE',
);
