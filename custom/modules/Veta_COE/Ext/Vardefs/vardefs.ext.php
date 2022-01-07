<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2021-09-02 13:15:24
$dictionary["Veta_COE"]["fields"]["veta_coe_activities_emails"] = array (
  'name' => 'veta_coe_activities_emails',
  'type' => 'link',
  'relationship' => 'veta_coe_activities_emails',
  'source' => 'non-db',
  'module' => 'Emails',
  'bean_name' => 'Email',
  'vname' => 'LBL_VETA_COE_ACTIVITIES_EMAILS_FROM_EMAILS_TITLE',
);


// created: 2021-09-02 13:15:24
$dictionary["Veta_COE"]["fields"]["veta_coe_activities_meetings"] = array (
  'name' => 'veta_coe_activities_meetings',
  'type' => 'link',
  'relationship' => 'veta_coe_activities_meetings',
  'source' => 'non-db',
  'module' => 'Meetings',
  'bean_name' => 'Meeting',
  'vname' => 'LBL_VETA_COE_ACTIVITIES_MEETINGS_FROM_MEETINGS_TITLE',
);


// created: 2021-09-02 13:15:23
$dictionary["Veta_COE"]["fields"]["veta_correccioncoe_veta_coe"] = array (
  'name' => 'veta_correccioncoe_veta_coe',
  'type' => 'link',
  'relationship' => 'veta_correccioncoe_veta_coe',
  'source' => 'non-db',
  'module' => 'Veta_CorreccionCOE',
  'bean_name' => 'Veta_CorreccionCOE',
  'side' => 'right',
  'vname' => 'LBL_VETA_CORRECCIONCOE_VETA_COE_FROM_VETA_CORRECCIONCOE_TITLE',
);


// created: 2021-09-02 13:15:24
$dictionary["Veta_COE"]["fields"]["veta_coe_activities_calls"] = array (
  'name' => 'veta_coe_activities_calls',
  'type' => 'link',
  'relationship' => 'veta_coe_activities_calls',
  'source' => 'non-db',
  'module' => 'Calls',
  'bean_name' => 'Call',
  'vname' => 'LBL_VETA_COE_ACTIVITIES_CALLS_FROM_CALLS_TITLE',
);


$dictionary['Veta_COE']['fields']['soel_fecha_viaje'] = array(
    'name' => 'soel_fecha_viaje',
    'vname' => 'LBL_SOEL_FECHA_VIAJE',
    'type' => 'datetime',
    'source' => 'non-db',
    'enable_range_search' => true,
    'options' => 'date_range_search_dom',
    
    
);


$dictionary['Veta_COE']['fields']['soel_oficina_comercial'] = array(
    'name' => 'soel_oficina_comercial',
    'vname' => 'LBL_SOEL_OFICINA_COMERCIAL',
    'type' => 'enum',
    'source' => 'non-db',
    'function' => 'getOficinasComercial',
    'massupdate' => false,
);


// created: 2021-09-02 13:15:24
$dictionary["Veta_COE"]["fields"]["veta_coe_activities_notes"] = array (
  'name' => 'veta_coe_activities_notes',
  'type' => 'link',
  'relationship' => 'veta_coe_activities_notes',
  'source' => 'non-db',
  'module' => 'Notes',
  'bean_name' => 'Note',
  'vname' => 'LBL_VETA_COE_ACTIVITIES_NOTES_FROM_NOTES_TITLE',
);


// created: 2021-09-02 13:15:24
$dictionary["Veta_COE"]["fields"]["veta_coe_cases"] = array (
  'name' => 'veta_coe_cases',
  'type' => 'link',
  'relationship' => 'veta_coe_cases',
  'source' => 'non-db',
  'module' => 'Cases',
  'bean_name' => 'Case',
  'side' => 'right',
  'vname' => 'LBL_VETA_COE_CASES_FROM_CASES_TITLE',
);


$dictionary['Veta_COE']['fields']['soel_referido'] = array(
    'name' => 'soel_referido',
    'vname' => 'LBL_SOEL_REFERIDO',
    'type' => 'varchar',
    'source' => 'non-db',

);


// created: 2021-09-02 13:15:24
$dictionary["Veta_COE"]["fields"]["veta_coe_veta_liquidacion"] = array (
  'name' => 'veta_coe_veta_liquidacion',
  'type' => 'link',
  'relationship' => 'veta_coe_veta_liquidacion',
  'source' => 'non-db',
  'module' => 'Veta_Liquidacion',
  'bean_name' => 'Veta_Liquidacion',
  'vname' => 'LBL_VETA_COE_VETA_LIQUIDACION_FROM_VETA_LIQUIDACION_TITLE',
  'id_name' => 'veta_coe_veta_liquidacionveta_liquidacion_ida',
);
$dictionary["Veta_COE"]["fields"]["veta_coe_veta_liquidacion_name"] = array (
  'name' => 'veta_coe_veta_liquidacion_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_VETA_COE_VETA_LIQUIDACION_FROM_VETA_LIQUIDACION_TITLE',
  'save' => true,
  'id_name' => 'veta_coe_veta_liquidacionveta_liquidacion_ida',
  'link' => 'veta_coe_veta_liquidacion',
  'table' => 'veta_liquidacion',
  'module' => 'Veta_Liquidacion',
  'rname' => 'name',
);
$dictionary["Veta_COE"]["fields"]["veta_coe_veta_liquidacionveta_liquidacion_ida"] = array (
  'name' => 'veta_coe_veta_liquidacionveta_liquidacion_ida',
  'type' => 'link',
  'relationship' => 'veta_coe_veta_liquidacion',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_VETA_COE_VETA_LIQUIDACION_FROM_VETA_COE_TITLE',
);


// created: 2021-09-02 13:15:24
$dictionary["Veta_COE"]["fields"]["veta_coe_activities_tasks"] = array (
  'name' => 'veta_coe_activities_tasks',
  'type' => 'link',
  'relationship' => 'veta_coe_activities_tasks',
  'source' => 'non-db',
  'module' => 'Tasks',
  'bean_name' => 'Task',
  'vname' => 'LBL_VETA_COE_ACTIVITIES_TASKS_FROM_TASKS_TITLE',
);


$dictionary['Veta_COE']['fields']['soel_fecha_expiracion_visa'] = array(
    'name' => 'soel_fecha_expiracion_visa',
    'vname' => 'LBL_SOEL_FECHA_EXPIRACION_VISA',
    'type' => 'datetime',
    'source' => 'non-db',
    'enable_range_search' => true,
    'options' => 'date_range_search_dom',
    

);


// created: 2021-09-02 13:15:24
$dictionary["Veta_COE"]["fields"]["veta_coe_veta_aplicacion"] = array (
  'name' => 'veta_coe_veta_aplicacion',
  'type' => 'link',
  'relationship' => 'veta_coe_veta_aplicacion',
  'source' => 'non-db',
  'module' => 'Veta_Aplicacion',
  'bean_name' => 'Veta_Aplicacion',
  'vname' => 'LBL_VETA_COE_VETA_APLICACION_FROM_VETA_APLICACION_TITLE',
  'id_name' => 'veta_coe_veta_aplicacionveta_aplicacion_ida',
);
$dictionary["Veta_COE"]["fields"]["veta_coe_veta_aplicacion_name"] = array (
  'name' => 'veta_coe_veta_aplicacion_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_VETA_COE_VETA_APLICACION_FROM_VETA_APLICACION_TITLE',
  'save' => true,
  'id_name' => 'veta_coe_veta_aplicacionveta_aplicacion_ida',
  'link' => 'veta_coe_veta_aplicacion',
  'table' => 'veta_aplicacion',
  'module' => 'Veta_Aplicacion',
  'rname' => 'name',
);
$dictionary["Veta_COE"]["fields"]["veta_coe_veta_aplicacionveta_aplicacion_ida"] = array (
  'name' => 'veta_coe_veta_aplicacionveta_aplicacion_ida',
  'type' => 'link',
  'relationship' => 'veta_coe_veta_aplicacion',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_VETA_COE_VETA_APLICACION_FROM_VETA_COE_TITLE',
);


$dictionary['Veta_COE']['fields']['soel_comercial_requerimiento'] = array(
    'name' => 'soel_comercial_requerimiento',
    'vname' => 'LBL_SOEL_COMERCIAL_REQUERIMIENTO',
    'type' => 'enum',
    'source' => 'non-db',
    'function' => 'getAsignadoLeads',
    'massupdate' => false,
);



// created: 2021-09-02 13:15:24
$dictionary["Veta_COE"]["fields"]["veta_coe_opportunities"] = array (
  'name' => 'veta_coe_opportunities',
  'type' => 'link',
  'relationship' => 'veta_coe_opportunities',
  'source' => 'non-db',
  'module' => 'Opportunities',
  'bean_name' => 'Opportunity',
  'vname' => 'LBL_VETA_COE_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE',
  'id_name' => 'veta_coe_opportunitiesopportunities_ida',
);
$dictionary["Veta_COE"]["fields"]["veta_coe_opportunities_name"] = array (
  'name' => 'veta_coe_opportunities_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_VETA_COE_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE',
  'save' => true,
  'id_name' => 'veta_coe_opportunitiesopportunities_ida',
  'link' => 'veta_coe_opportunities',
  'table' => 'opportunities',
  'module' => 'Opportunities',
  'rname' => 'name',
);
$dictionary["Veta_COE"]["fields"]["veta_coe_opportunitiesopportunities_ida"] = array (
  'name' => 'veta_coe_opportunitiesopportunities_ida',
  'type' => 'link',
  'relationship' => 'veta_coe_opportunities',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_VETA_COE_OPPORTUNITIES_FROM_VETA_COE_TITLE',
);

?>