<?php
// created: 2019-11-02 19:43:35
$dictionary["Veta_InformacionAcademica"]["fields"]["veta_informacionacademica_leads"] = array (
  'name' => 'veta_informacionacademica_leads',
  'type' => 'link',
  'relationship' => 'veta_informacionacademica_leads',
  'source' => 'non-db',
  'module' => 'Leads',
  'bean_name' => 'Lead',
  'vname' => 'LBL_VETA_INFORMACIONACADEMICA_LEADS_FROM_LEADS_TITLE',
  'id_name' => 'veta_informacionacademica_leadsleads_ida',
);
$dictionary["Veta_InformacionAcademica"]["fields"]["veta_informacionacademica_leads_name"] = array (
  'name' => 'veta_informacionacademica_leads_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_VETA_INFORMACIONACADEMICA_LEADS_FROM_LEADS_TITLE',
  'save' => true,
  'id_name' => 'veta_informacionacademica_leadsleads_ida',
  'link' => 'veta_informacionacademica_leads',
  'table' => 'leads',
  'module' => 'Leads',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["Veta_InformacionAcademica"]["fields"]["veta_informacionacademica_leadsleads_ida"] = array (
  'name' => 'veta_informacionacademica_leadsleads_ida',
  'type' => 'link',
  'relationship' => 'veta_informacionacademica_leads',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_VETA_INFORMACIONACADEMICA_LEADS_FROM_VETA_INFORMACIONACADEMICA_TITLE',
);
