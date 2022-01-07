<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2021-09-02 13:15:25
$dictionary["Veta_Loo"]["fields"]["veta_loocorreccion_veta_loo"] = array (
  'name' => 'veta_loocorreccion_veta_loo',
  'type' => 'link',
  'relationship' => 'veta_loocorreccion_veta_loo',
  'source' => 'non-db',
  'module' => 'Veta_LooCorreccion',
  'bean_name' => 'Veta_LooCorreccion',
  'side' => 'right',
  'vname' => 'LBL_VETA_LOOCORRECCION_VETA_LOO_FROM_VETA_LOOCORRECCION_TITLE',
);


// created: 2021-09-02 13:15:22
$dictionary["Veta_Loo"]["fields"]["veta_loo_activities_tasks"] = array (
  'name' => 'veta_loo_activities_tasks',
  'type' => 'link',
  'relationship' => 'veta_loo_activities_tasks',
  'source' => 'non-db',
  'module' => 'Tasks',
  'bean_name' => 'Task',
  'vname' => 'LBL_VETA_LOO_ACTIVITIES_TASKS_FROM_TASKS_TITLE',
);


// created: 2021-09-02 13:15:22
$dictionary["Veta_Loo"]["fields"]["veta_loo_veta_aplicacion"] = array (
  'name' => 'veta_loo_veta_aplicacion',
  'type' => 'link',
  'relationship' => 'veta_loo_veta_aplicacion',
  'source' => 'non-db',
  'module' => 'Veta_Aplicacion',
  'bean_name' => 'Veta_Aplicacion',
  'vname' => 'LBL_VETA_LOO_VETA_APLICACION_FROM_VETA_APLICACION_TITLE',
  'id_name' => 'veta_loo_veta_aplicacionveta_aplicacion_ida',
);
$dictionary["Veta_Loo"]["fields"]["veta_loo_veta_aplicacion_name"] = array (
  'name' => 'veta_loo_veta_aplicacion_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_VETA_LOO_VETA_APLICACION_FROM_VETA_APLICACION_TITLE',
  'save' => true,
  'id_name' => 'veta_loo_veta_aplicacionveta_aplicacion_ida',
  'link' => 'veta_loo_veta_aplicacion',
  'table' => 'veta_aplicacion',
  'module' => 'Veta_Aplicacion',
  'rname' => 'name',
);
$dictionary["Veta_Loo"]["fields"]["veta_loo_veta_aplicacionveta_aplicacion_ida"] = array (
  'name' => 'veta_loo_veta_aplicacionveta_aplicacion_ida',
  'type' => 'link',
  'relationship' => 'veta_loo_veta_aplicacion',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_VETA_LOO_VETA_APLICACION_FROM_VETA_LOO_TITLE',
);


$dictionary['Veta_Loo']['fields']['soel_fecha_viaje'] = array(
    'name' => 'soel_fecha_viaje',
    'vname' => 'LBL_SOEL_FECHA_VIAJE',
    'type' => 'datetime',
    'source' => 'non-db',
    'enable_range_search' => true,
    'options' => 'date_range_search_dom',
);


// created: 2021-09-02 13:15:22
$dictionary["Veta_Loo"]["fields"]["veta_loo_activities_meetings"] = array (
  'name' => 'veta_loo_activities_meetings',
  'type' => 'link',
  'relationship' => 'veta_loo_activities_meetings',
  'source' => 'non-db',
  'module' => 'Meetings',
  'bean_name' => 'Meeting',
  'vname' => 'LBL_VETA_LOO_ACTIVITIES_MEETINGS_FROM_MEETINGS_TITLE',
);


$dictionary['Veta_Loo']['fields']['soel_oficina_comercial'] = array(
    'name' => 'soel_oficina_comercial',
    'vname' => 'LBL_SOEL_OFICINA_COMERCIAL',
    'type' => 'enum',
    'source' => 'non-db',
    'function' => 'getOficinasComercial',
    'massupdate' => false,
);


// created: 2021-09-02 13:15:22
$dictionary["Veta_Loo"]["fields"]["veta_loo_activities_notes"] = array (
  'name' => 'veta_loo_activities_notes',
  'type' => 'link',
  'relationship' => 'veta_loo_activities_notes',
  'source' => 'non-db',
  'module' => 'Notes',
  'bean_name' => 'Note',
  'vname' => 'LBL_VETA_LOO_ACTIVITIES_NOTES_FROM_NOTES_TITLE',
);


$dictionary['Veta_Loo']['fields']['soel_referido'] = array(
    'name' => 'soel_referido',
    'vname' => 'LBL_SOEL_REFERIDO',
    'type' => 'varchar',
    'source' => 'non-db',

);


// created: 2021-09-02 13:15:22
$dictionary["Veta_Loo"]["fields"]["veta_loo_activities_calls"] = array (
  'name' => 'veta_loo_activities_calls',
  'type' => 'link',
  'relationship' => 'veta_loo_activities_calls',
  'source' => 'non-db',
  'module' => 'Calls',
  'bean_name' => 'Call',
  'vname' => 'LBL_VETA_LOO_ACTIVITIES_CALLS_FROM_CALLS_TITLE',
);


// created: 2021-09-02 13:15:22
$dictionary["Veta_Loo"]["fields"]["veta_loo_activities_emails"] = array (
  'name' => 'veta_loo_activities_emails',
  'type' => 'link',
  'relationship' => 'veta_loo_activities_emails',
  'source' => 'non-db',
  'module' => 'Emails',
  'bean_name' => 'Email',
  'vname' => 'LBL_VETA_LOO_ACTIVITIES_EMAILS_FROM_EMAILS_TITLE',
);


// created: 2021-09-02 13:15:22
$dictionary["Veta_Loo"]["fields"]["veta_loo_cases"] = array (
  'name' => 'veta_loo_cases',
  'type' => 'link',
  'relationship' => 'veta_loo_cases',
  'source' => 'non-db',
  'module' => 'Cases',
  'bean_name' => 'Case',
  'side' => 'right',
  'vname' => 'LBL_VETA_LOO_CASES_FROM_CASES_TITLE',
);


$dictionary['Veta_Loo']['fields']['soel_fecha_expiracion_visa'] = array(
    'name' => 'soel_fecha_expiracion_visa',
    'vname' => 'LBL_SOEL_FECHA_EXPIRACION_VISA',
    'type' => 'datetime',
    'source' => 'non-db',
    'enable_range_search' => true,
    'options' => 'date_range_search_dom',
    
);


// created: 2021-09-02 13:15:21
$dictionary["Veta_Loo"]["fields"]["veta_liquidacion_veta_loo"] = array (
  'name' => 'veta_liquidacion_veta_loo',
  'type' => 'link',
  'relationship' => 'veta_liquidacion_veta_loo',
  'source' => 'non-db',
  'module' => 'Veta_Liquidacion',
  'bean_name' => 'Veta_Liquidacion',
  'side' => 'right',
  'vname' => 'LBL_VETA_LIQUIDACION_VETA_LOO_FROM_VETA_LIQUIDACION_TITLE',
);


$dictionary['Veta_Loo']['fields']['soel_comercial_requerimiento'] = array(
    'name' => 'soel_comercial_requerimiento',
    'vname' => 'LBL_SOEL_COMERCIAL_REQUERIMIENTO',
    'type' => 'enum',
    'source' => 'non-db',
    'function' => 'getAsignadoLeads',
    'massupdate' => false,
);

?>