<?php
// created: 2019-11-02 19:30:49
$dictionary["Veta_SolvenciaEconomica"]["fields"]["veta_solvenciaeconomica_contacts"] = array (
  'name' => 'veta_solvenciaeconomica_contacts',
  'type' => 'link',
  'relationship' => 'veta_solvenciaeconomica_contacts',
  'source' => 'non-db',
  'module' => 'Contacts',
  'bean_name' => 'Contact',
  'vname' => 'LBL_VETA_SOLVENCIAECONOMICA_CONTACTS_FROM_CONTACTS_TITLE',
  'id_name' => 'veta_solvenciaeconomica_contactscontacts_ida',
);
$dictionary["Veta_SolvenciaEconomica"]["fields"]["veta_solvenciaeconomica_contacts_name"] = array (
  'name' => 'veta_solvenciaeconomica_contacts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_VETA_SOLVENCIAECONOMICA_CONTACTS_FROM_CONTACTS_TITLE',
  'save' => true,
  'id_name' => 'veta_solvenciaeconomica_contactscontacts_ida',
  'link' => 'veta_solvenciaeconomica_contacts',
  'table' => 'contacts',
  'module' => 'Contacts',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["Veta_SolvenciaEconomica"]["fields"]["veta_solvenciaeconomica_contactscontacts_ida"] = array (
  'name' => 'veta_solvenciaeconomica_contactscontacts_ida',
  'type' => 'link',
  'relationship' => 'veta_solvenciaeconomica_contacts',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_VETA_SOLVENCIAECONOMICA_CONTACTS_FROM_VETA_SOLVENCIAECONOMICA_TITLE',
);
