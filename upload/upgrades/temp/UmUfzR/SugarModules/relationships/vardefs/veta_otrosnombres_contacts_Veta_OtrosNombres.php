<?php
// created: 2019-11-23 12:54:30
$dictionary["Veta_OtrosNombres"]["fields"]["veta_otrosnombres_contacts"] = array (
  'name' => 'veta_otrosnombres_contacts',
  'type' => 'link',
  'relationship' => 'veta_otrosnombres_contacts',
  'source' => 'non-db',
  'module' => 'Contacts',
  'bean_name' => 'Contact',
  'vname' => 'LBL_VETA_OTROSNOMBRES_CONTACTS_FROM_CONTACTS_TITLE',
  'id_name' => 'veta_otrosnombres_contactscontacts_ida',
);
$dictionary["Veta_OtrosNombres"]["fields"]["veta_otrosnombres_contacts_name"] = array (
  'name' => 'veta_otrosnombres_contacts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_VETA_OTROSNOMBRES_CONTACTS_FROM_CONTACTS_TITLE',
  'save' => true,
  'id_name' => 'veta_otrosnombres_contactscontacts_ida',
  'link' => 'veta_otrosnombres_contacts',
  'table' => 'contacts',
  'module' => 'Contacts',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["Veta_OtrosNombres"]["fields"]["veta_otrosnombres_contactscontacts_ida"] = array (
  'name' => 'veta_otrosnombres_contactscontacts_ida',
  'type' => 'link',
  'relationship' => 'veta_otrosnombres_contacts',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_VETA_OTROSNOMBRES_CONTACTS_FROM_VETA_OTROSNOMBRES_TITLE',
);
