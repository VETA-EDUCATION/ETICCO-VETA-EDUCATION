<?php 
 //WARNING: The contents of this file are auto-generated


$dictionary['Veta_Aplicacion']['fields']['soel_oficina_comercial'] = array(
    'name' => 'soel_oficina_comercial',
    'vname' => 'LBL_SOEL_OFICINA_COMERCIAL',
    'type' => 'enum',
    'source' => 'non-db',
    'function' => 'getOficinasComercial',
    'massupdate' => false,
);


$dictionary['Veta_Aplicacion']['fields']['soel_comercial_requerimiento'] = array(
    'name' => 'soel_comercial_requerimiento',
    'vname' => 'LBL_SOEL_COMERCIAL_REQUERIMIENTO',
    'type' => 'enum',
    'source' => 'non-db',
    'function' => 'getAsignadoLeads',
    'massupdate' => false,
);


$dictionary['Veta_Aplicacion']['fields']['soel_oficina_comercial'] = array(
    'name' => 'soel_oficina_comercial',
    'vname' => 'LBL_SOEL_OFICINA_COMERCIAL',
    'type' => 'enum',
    'source' => 'non-db',
    'function' => 'getOficinasComercial',
    'massupdate' => false,
);


$dictionary['Veta_Aplicacion']['fields']['soel_paiscolegio'] = array(
    'name' => 'soel_paiscolegio',
    'vname' => 'LBL_SOEL_PAISCOLEGIO',
    'type' => 'varchar',
    'source' => 'non-db',
);


// created: 2021-09-02 13:15:21
$dictionary["Veta_Aplicacion"]["fields"]["veta_aplicacion_cases"] = array (
  'name' => 'veta_aplicacion_cases',
  'type' => 'link',
  'relationship' => 'veta_aplicacion_cases',
  'source' => 'non-db',
  'module' => 'Cases',
  'bean_name' => 'Case',
  'side' => 'right',
  'vname' => 'LBL_VETA_APLICACION_CASES_FROM_CASES_TITLE',
);


$dictionary['Veta_Aplicacion']['fields']['soel_estado_loo'] = array(
    'name' => 'soel_estado_loo',
    'vname' => 'LBL_SOEL_ESTADO_LOO',
    'type' => 'enum',
    'source' => 'non-db',
    'function' => 'getEstadosLoo',
);


// created: 2021-09-02 13:15:21
$dictionary["Veta_Aplicacion"]["fields"]["veta_aplicacion_activities_meetings"] = array (
  'name' => 'veta_aplicacion_activities_meetings',
  'type' => 'link',
  'relationship' => 'veta_aplicacion_activities_meetings',
  'source' => 'non-db',
  'module' => 'Meetings',
  'bean_name' => 'Meeting',
  'vname' => 'LBL_VETA_APLICACION_ACTIVITIES_MEETINGS_FROM_MEETINGS_TITLE',
);


// created: 2021-09-02 13:15:21
$dictionary["Veta_Aplicacion"]["fields"]["veta_aplicacion_activities_notes"] = array (
  'name' => 'veta_aplicacion_activities_notes',
  'type' => 'link',
  'relationship' => 'veta_aplicacion_activities_notes',
  'source' => 'non-db',
  'module' => 'Notes',
  'bean_name' => 'Note',
  'vname' => 'LBL_VETA_APLICACION_ACTIVITIES_NOTES_FROM_NOTES_TITLE',
);


$dictionary['Veta_Aplicacion']['fields']['soel_estado_coe'] = array(
    'name' => 'soel_estado_coe',
    'vname' => 'LBL_SOEL_ESTADO_COE',
    'type' => 'enum',
    'source' => 'non-db',
    'function' => 'getEstadosCOE',
);


// created: 2021-09-02 13:15:24
$dictionary["Veta_Aplicacion"]["fields"]["veta_coe_veta_aplicacion"] = array (
  'name' => 'veta_coe_veta_aplicacion',
  'type' => 'link',
  'relationship' => 'veta_coe_veta_aplicacion',
  'source' => 'non-db',
  'module' => 'Veta_COE',
  'bean_name' => 'Veta_COE',
  'side' => 'right',
  'vname' => 'LBL_VETA_COE_VETA_APLICACION_FROM_VETA_COE_TITLE',
);


$dictionary['Veta_Aplicacion']['fields']['soel_ciudad_tmp'] = array(
    'name' => 'soel_ciudad_tmp',
    'vname' => 'LBL_SOEL_CIUDAD_TMP',
    'type' => 'varchar',
    'source' => 'non-db',
    'massupdate' => false,
);


// created: 2021-09-02 13:15:22
$dictionary["Veta_Aplicacion"]["fields"]["veta_loo_veta_aplicacion"] = array (
  'name' => 'veta_loo_veta_aplicacion',
  'type' => 'link',
  'relationship' => 'veta_loo_veta_aplicacion',
  'source' => 'non-db',
  'module' => 'Veta_Loo',
  'bean_name' => 'Veta_Loo',
  'side' => 'right',
  'vname' => 'LBL_VETA_LOO_VETA_APLICACION_FROM_VETA_LOO_TITLE',
);


$dictionary['Veta_Aplicacion']['fields']['soel_referido'] = array(
    'name' => 'soel_referido',
    'vname' => 'LBL_SOEL_REFERIDO',
    'type' => 'varchar',
    'source' => 'non-db',

);


// created: 2021-09-02 13:15:21
$dictionary["Veta_Aplicacion"]["fields"]["veta_aplicacion_opportunities"] = array (
  'name' => 'veta_aplicacion_opportunities',
  'type' => 'link',
  'relationship' => 'veta_aplicacion_opportunities',
  'source' => 'non-db',
  'module' => 'Opportunities',
  'bean_name' => 'Opportunity',
  'vname' => 'LBL_VETA_APLICACION_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE',
  'id_name' => 'veta_aplicacion_opportunitiesopportunities_ida',
);
$dictionary["Veta_Aplicacion"]["fields"]["veta_aplicacion_opportunities_name"] = array (
  'name' => 'veta_aplicacion_opportunities_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_VETA_APLICACION_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE',
  'save' => true,
  'id_name' => 'veta_aplicacion_opportunitiesopportunities_ida',
  'link' => 'veta_aplicacion_opportunities',
  'table' => 'opportunities',
  'module' => 'Opportunities',
  'rname' => 'name',
);
$dictionary["Veta_Aplicacion"]["fields"]["veta_aplicacion_opportunitiesopportunities_ida"] = array (
  'name' => 'veta_aplicacion_opportunitiesopportunities_ida',
  'type' => 'link',
  'relationship' => 'veta_aplicacion_opportunities',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_VETA_APLICACION_OPPORTUNITIES_FROM_VETA_APLICACION_TITLE',
);


// created: 2021-09-02 13:15:21
$dictionary["Veta_Aplicacion"]["fields"]["veta_aplicacion_activities_tasks"] = array (
  'name' => 'veta_aplicacion_activities_tasks',
  'type' => 'link',
  'relationship' => 'veta_aplicacion_activities_tasks',
  'source' => 'non-db',
  'module' => 'Tasks',
  'bean_name' => 'Task',
  'vname' => 'LBL_VETA_APLICACION_ACTIVITIES_TASKS_FROM_TASKS_TITLE',
);


// created: 2021-09-02 13:15:21
$dictionary["Veta_Aplicacion"]["fields"]["veta_aplicacion_activities_calls"] = array (
  'name' => 'veta_aplicacion_activities_calls',
  'type' => 'link',
  'relationship' => 'veta_aplicacion_activities_calls',
  'source' => 'non-db',
  'module' => 'Calls',
  'bean_name' => 'Call',
  'vname' => 'LBL_VETA_APLICACION_ACTIVITIES_CALLS_FROM_CALLS_TITLE',
);


$dictionary['Veta_Aplicacion']['fields']['soel_fecha_cierre'] = array(
    'name' => 'soel_fecha_cierre',
    'vname' => 'LBL_SOEL_FECHA_CIERRE',
    'type' => 'datetime',
    'source' => 'non-db',
    'enable_range_search' => true,
    'options' => 'date_range_search_dom',
);


$dictionary['Veta_Aplicacion']['fields']['soel_colegio'] = array(
    'name' => 'soel_colegio',
    'vname' => 'LBL_SOEL_COLEGIO',
    'type' => 'varchar',
    'source' => 'non-db',
);


// created: 2021-09-02 13:15:21
$dictionary["Veta_Aplicacion"]["fields"]["veta_aplicacion_activities_emails"] = array (
  'name' => 'veta_aplicacion_activities_emails',
  'type' => 'link',
  'relationship' => 'veta_aplicacion_activities_emails',
  'source' => 'non-db',
  'module' => 'Emails',
  'bean_name' => 'Email',
  'vname' => 'LBL_VETA_APLICACION_ACTIVITIES_EMAILS_FROM_EMAILS_TITLE',
);


$dictionary['Veta_Aplicacion']['fields']['soel_fecha_expiracion_visa'] = array(
    'name' => 'soel_fecha_expiracion_visa',
    'vname' => 'LBL_SOEL_FECHA_EXPIRACION_VISA',
    'type' => 'datetime',
    'source' => 'non-db',
    'enable_range_search' => true,
    'options' => 'date_range_search_dom',
);


$dictionary['Veta_Aplicacion']['fields']['soel_fecha_viaje'] = array(
    'name' => 'soel_fecha_viaje',
    'vname' => 'LBL_SOEL_FECHA_VIAJE',
    'type' => 'datetime',
    'source' => 'non-db',
    'enable_range_search' => true,
    'options' => 'date_range_search_dom',
);


 // created: 2021-01-29 16:51:58
$dictionary['Veta_Aplicacion']['fields']['veta_curso_id_c']['inline_edit']=1;

 

 // created: 2021-01-29 16:51:58
$dictionary['Veta_Aplicacion']['fields']['curso_relacionado_c']['inline_edit']='';
$dictionary['Veta_Aplicacion']['fields']['curso_relacionado_c']['labelValue']='Curso relacionado';

 
?>