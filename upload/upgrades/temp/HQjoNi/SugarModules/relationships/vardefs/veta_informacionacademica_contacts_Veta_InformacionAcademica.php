<?php
// created: 2019-11-28 13:58:26
$dictionary["Veta_InformacionAcademica"]["fields"]["veta_informacionacademica_contacts"] = array (
  'name' => 'veta_informacionacademica_contacts',
  'type' => 'link',
  'relationship' => 'veta_informacionacademica_contacts',
  'source' => 'non-db',
  'module' => 'Contacts',
  'bean_name' => 'Contact',
  'vname' => 'LBL_VETA_INFORMACIONACADEMICA_CONTACTS_FROM_CONTACTS_TITLE',
  'id_name' => 'veta_informacionacademica_contactscontacts_ida',
);
$dictionary["Veta_InformacionAcademica"]["fields"]["veta_informacionacademica_contacts_name"] = array (
  'name' => 'veta_informacionacademica_contacts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_VETA_INFORMACIONACADEMICA_CONTACTS_FROM_CONTACTS_TITLE',
  'save' => true,
  'id_name' => 'veta_informacionacademica_contactscontacts_ida',
  'link' => 'veta_informacionacademica_contacts',
  'table' => 'contacts',
  'module' => 'Contacts',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["Veta_InformacionAcademica"]["fields"]["veta_informacionacademica_contactscontacts_ida"] = array (
  'name' => 'veta_informacionacademica_contactscontacts_ida',
  'type' => 'link',
  'relationship' => 'veta_informacionacademica_contacts',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_VETA_INFORMACIONACADEMICA_CONTACTS_FROM_VETA_INFORMACIONACADEMICA_TITLE',
);
