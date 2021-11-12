<?php
// created: 2019-11-23 12:29:59
$dictionary["Veta_InformacionLaboral"]["fields"]["veta_informacionlaboral_contacts"] = array (
  'name' => 'veta_informacionlaboral_contacts',
  'type' => 'link',
  'relationship' => 'veta_informacionlaboral_contacts',
  'source' => 'non-db',
  'module' => 'Contacts',
  'bean_name' => 'Contact',
  'vname' => 'LBL_VETA_INFORMACIONLABORAL_CONTACTS_FROM_CONTACTS_TITLE',
  'id_name' => 'veta_informacionlaboral_contactscontacts_ida',
);
$dictionary["Veta_InformacionLaboral"]["fields"]["veta_informacionlaboral_contacts_name"] = array (
  'name' => 'veta_informacionlaboral_contacts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_VETA_INFORMACIONLABORAL_CONTACTS_FROM_CONTACTS_TITLE',
  'save' => true,
  'id_name' => 'veta_informacionlaboral_contactscontacts_ida',
  'link' => 'veta_informacionlaboral_contacts',
  'table' => 'contacts',
  'module' => 'Contacts',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["Veta_InformacionLaboral"]["fields"]["veta_informacionlaboral_contactscontacts_ida"] = array (
  'name' => 'veta_informacionlaboral_contactscontacts_ida',
  'type' => 'link',
  'relationship' => 'veta_informacionlaboral_contacts',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_VETA_INFORMACIONLABORAL_CONTACTS_FROM_VETA_INFORMACIONLABORAL_TITLE',
);
