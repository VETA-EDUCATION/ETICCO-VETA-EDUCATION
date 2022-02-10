
text/x-generic vardefs.ext.php ( PHP script, ASCII text )
<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2021-09-02 13:15:23
$dictionary["Veta_Visa"]["fields"]["veta_visa_opportunities"] = array (
  'name' => 'veta_visa_opportunities',
  'type' => 'link',
  'relationship' => 'veta_visa_opportunities',
  'source' => 'non-db',
  'module' => 'Opportunities',
  'bean_name' => 'Opportunity',
  'vname' => 'LBL_VETA_VISA_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE',
  'id_name' => 'veta_visa_opportunitiesopportunities_ida',
);
$dictionary["Veta_Visa"]["fields"]["veta_visa_opportunities_name"] = array (
  'name' => 'veta_visa_opportunities_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_VETA_VISA_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE',
  'save' => true,
  'id_name' => 'veta_visa_opportunitiesopportunities_ida',
  'link' => 'veta_visa_opportunities',
  'table' => 'opportunities',
  'module' => 'Opportunities',
  'rname' => 'name',
);
$dictionary["Veta_Visa"]["fields"]["veta_visa_opportunitiesopportunities_ida"] = array (
  'name' => 'veta_visa_opportunitiesopportunities_ida',
  'type' => 'link',
  'relationship' => 'veta_visa_opportunities',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_VETA_VISA_OPPORTUNITIES_FROM_VETA_VISA_TITLE',
);


// created: 2021-09-02 13:15:23
$dictionary["Veta_Visa"]["fields"]["veta_visa_activities_notes"] = array (
  'name' => 'veta_visa_activities_notes',
  'type' => 'link',
  'relationship' => 'veta_visa_activities_notes',
  'source' => 'non-db',
  'module' => 'Notes',
  'bean_name' => 'Note',
  'vname' => 'LBL_VETA_VISA_ACTIVITIES_NOTES_FROM_NOTES_TITLE',
);


// created: 2021-09-02 13:15:23
$dictionary["Veta_Visa"]["fields"]["veta_visa_veta_serviciocliente"] = array (
  'name' => 'veta_visa_veta_serviciocliente',
  'type' => 'link',
  'relationship' => 'veta_visa_veta_serviciocliente',
  'source' => 'non-db',
  'module' => 'Veta_ServicioCliente',
  'bean_name' => 'Veta_ServicioCliente',
  'vname' => 'LBL_VETA_VISA_VETA_SERVICIOCLIENTE_FROM_VETA_SERVICIOCLIENTE_TITLE',
  'id_name' => 'veta_visa_veta_servicioclienteveta_serviciocliente_idb',
);
$dictionary["Veta_Visa"]["fields"]["veta_visa_veta_serviciocliente_name"] = array (
  'name' => 'veta_visa_veta_serviciocliente_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_VETA_VISA_VETA_SERVICIOCLIENTE_FROM_VETA_SERVICIOCLIENTE_TITLE',
  'save' => true,
  'id_name' => 'veta_visa_veta_servicioclienteveta_serviciocliente_idb',
  'link' => 'veta_visa_veta_serviciocliente',
  'table' => 'veta_serviciocliente',
  'module' => 'Veta_ServicioCliente',
  'rname' => 'name',
);
$dictionary["Veta_Visa"]["fields"]["veta_visa_veta_servicioclienteveta_serviciocliente_idb"] = array (
  'name' => 'veta_visa_veta_servicioclienteveta_serviciocliente_idb',
  'type' => 'link',
  'relationship' => 'veta_visa_veta_serviciocliente',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_VETA_VISA_VETA_SERVICIOCLIENTE_FROM_VETA_SERVICIOCLIENTE_TITLE',
);


$dictionary['Veta_Visa']['fields']['soel_ciudad_tmp'] = array(
    'name' => 'soel_ciudad_tmp',
    'vname' => 'LBL_SOEL_CIUDAD_TMP',
    'type' => 'varchar',
    'source' => 'non-db',
);


$dictionary['Veta_Visa']['fields']['soel_referido'] = array(
    'name' => 'soel_referido',
    'vname' => 'LBL_SOEL_REFERIDO',
    'type' => 'varchar',
    'source' => 'non-db',
);


// created: 2021-09-02 13:15:23
$dictionary["Veta_Visa"]["fields"]["veta_visa_activities_notes"] = array (
  'name' => 'veta_visa_activities_notes',
  'type' => 'link',
  'relationship' => 'veta_visa_activities_notes',
  'source' => 'non-db',
  'module' => 'Notes',
  'bean_name' => 'Note',
  'vname' => 'LBL_VETA_VISA_ACTIVITIES_NOTES_FROM_NOTES_TITLE',
);


// created: 2021-09-02 13:15:23
$dictionary["Veta_Visa"]["fields"]["veta_visa_activities_calls"] = array (
  'name' => 'veta_visa_activities_calls',
  'type' => 'link',
  'relationship' => 'veta_visa_activities_calls',
  'source' => 'non-db',
  'module' => 'Calls',
  'bean_name' => 'Call',
  'vname' => 'LBL_VETA_VISA_ACTIVITIES_CALLS_FROM_CALLS_TITLE',
);


$dictionary['Veta_Visa']['fields']['soel_fecha_viaje'] = array(
    'name' => 'soel_fecha_viaje',
    'vname' => 'LBL_SOEL_FECHA_VIAJE',
    'type' => 'datetime',
    'source' => 'non-db',
    'enable_range_search' => true,
    'options' => 'date_range_search_dom',
);



// created: 2021-09-02 13:15:23
$dictionary["Veta_Visa"]["fields"]["veta_visa_activities_tasks"] = array (
  'name' => 'veta_visa_activities_tasks',
  'type' => 'link',
  'relationship' => 'veta_visa_activities_tasks',
  'source' => 'non-db',
  'module' => 'Tasks',
  'bean_name' => 'Task',
  'vname' => 'LBL_VETA_VISA_ACTIVITIES_TASKS_FROM_TASKS_TITLE',
);


$dictionary['Veta_Visa']['fields']['soel_referido'] = array(
    'name' => 'soel_referido',
    'vname' => 'LBL_SOEL_REFERIDO',
    'type' => 'varchar',
    'source' => 'non-db',
);


// created: 2021-09-02 13:15:23
$dictionary["Veta_Visa"]["fields"]["veta_visa_cases"] = array (
  'name' => 'veta_visa_cases',
  'type' => 'link',
  'relationship' => 'veta_visa_cases',
  'source' => 'non-db',
  'module' => 'Cases',
  'bean_name' => 'Case',
  'side' => 'right',
  'vname' => 'LBL_VETA_VISA_CASES_FROM_CASES_TITLE',
);


$dictionary['Veta_Visa']['fields']['soel_requerimiento'] = array(
    'name' => 'soel_requerimiento',
    'vname' => 'LBL_SOEL_REQUERIMIENTO',
    'type' => 'varchar',
    'source' => 'non-db',
);


// created: 2021-09-02 13:15:23
$dictionary["Veta_Visa"]["fields"]["veta_visa_activities_emails"] = array (
  'name' => 'veta_visa_activities_emails',
  'type' => 'link',
  'relationship' => 'veta_visa_activities_emails',
  'source' => 'non-db',
  'module' => 'Emails',
  'bean_name' => 'Email',
  'vname' => 'LBL_VETA_VISA_ACTIVITIES_EMAILS_FROM_EMAILS_TITLE',
);


$dictionary['Veta_Visa']['fields']['soel_fecha_expiracion_visa'] = array(
    'name' => 'soel_fecha_expiracion_visa',
    'vname' => 'LBL_SOEL_FECHA_EXPIRACION_VISA',
    'type' => 'datetime',
    'source' => 'non-db',
    'enable_range_search' => true,
    'options' => 'date_range_search_dom',

);


// created: 2021-09-02 13:15:23
$dictionary["Veta_Visa"]["fields"]["veta_visa_activities_meetings"] = array (
  'name' => 'veta_visa_activities_meetings',
  'type' => 'link',
  'relationship' => 'veta_visa_activities_meetings',
  'source' => 'non-db',
  'module' => 'Meetings',
  'bean_name' => 'Meeting',
  'vname' => 'LBL_VETA_VISA_ACTIVITIES_MEETINGS_FROM_MEETINGS_TITLE',
);


 // created: 2021-02-16 17:05:21
$dictionary['Veta_Visa']['fields']['fecha_firma_acta']['options']='date_range_search_dom';
$dictionary['Veta_Visa']['fields']['fecha_firma_acta']['enable_range_search']='1';

 

 // created: 2021-02-16 17:07:23
$dictionary['Veta_Visa']['fields']['fecha_expiracion_requerimiento']['options']='date_range_search_dom';
$dictionary['Veta_Visa']['fields']['fecha_expiracion_requerimiento']['enable_range_search']='1';

 

 // created: 2021-02-16 17:06:53
$dictionary['Veta_Visa']['fields']['fecha_avac']['options']='date_range_search_dom';
$dictionary['Veta_Visa']['fields']['fecha_avac']['enable_range_search']='1';

 

 // created: 2021-02-16 17:07:12
$dictionary['Veta_Visa']['fields']['fecha_exp_req1']['options']='date_range_search_dom';
$dictionary['Veta_Visa']['fields']['fecha_exp_req1']['enable_range_search']='1';

 

 // created: 2021-02-16 17:06:45
$dictionary['Veta_Visa']['fields']['fecha_aplicacion']['options']='date_range_search_dom';
$dictionary['Veta_Visa']['fields']['fecha_aplicacion']['enable_range_search']='1';

 
?>