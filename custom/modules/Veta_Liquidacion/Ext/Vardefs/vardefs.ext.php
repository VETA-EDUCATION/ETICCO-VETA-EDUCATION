<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2021-09-02 13:15:21
$dictionary["Veta_Liquidacion"]["fields"]["veta_liquidacion_activities_notes"] = array (
  'name' => 'veta_liquidacion_activities_notes',
  'type' => 'link',
  'relationship' => 'veta_liquidacion_activities_notes',
  'source' => 'non-db',
  'module' => 'Notes',
  'bean_name' => 'Note',
  'vname' => 'LBL_VETA_LIQUIDACION_ACTIVITIES_NOTES_FROM_NOTES_TITLE',
);


// created: 2021-09-02 13:15:21
$dictionary["Veta_Liquidacion"]["fields"]["veta_liquidacion_activities_calls"] = array (
  'name' => 'veta_liquidacion_activities_calls',
  'type' => 'link',
  'relationship' => 'veta_liquidacion_activities_calls',
  'source' => 'non-db',
  'module' => 'Calls',
  'bean_name' => 'Call',
  'vname' => 'LBL_VETA_LIQUIDACION_ACTIVITIES_CALLS_FROM_CALLS_TITLE',
);


// created: 2021-09-02 13:15:21
$dictionary["Veta_Liquidacion"]["fields"]["veta_liquidacion_cases"] = array (
  'name' => 'veta_liquidacion_cases',
  'type' => 'link',
  'relationship' => 'veta_liquidacion_cases',
  'source' => 'non-db',
  'module' => 'Cases',
  'bean_name' => 'Case',
  'side' => 'right',
  'vname' => 'LBL_VETA_LIQUIDACION_CASES_FROM_CASES_TITLE',
);


// created: 2021-09-02 13:15:21
$dictionary["Veta_Liquidacion"]["fields"]["veta_liquidacion_activities_meetings"] = array (
  'name' => 'veta_liquidacion_activities_meetings',
  'type' => 'link',
  'relationship' => 'veta_liquidacion_activities_meetings',
  'source' => 'non-db',
  'module' => 'Meetings',
  'bean_name' => 'Meeting',
  'vname' => 'LBL_VETA_LIQUIDACION_ACTIVITIES_MEETINGS_FROM_MEETINGS_TITLE',
);


$dictionary['Veta_Liquidacion']['fields']['soel_localizacion'] = array(
    'name' => 'soel_localizacion',
    'vname' => 'LBL_SOEL_LOCALIZACION',
    'type' => 'multienum',
    'source' => 'non-db',
    'options' => 'localizacion_list',
    'massupdate' => false,
);

$dictionary['Veta_Liquidacion']['fields']['soel_ciudad_tmp'] = array(
    'name' => 'soel_ciudad_tmp',
    'vname' => 'LBL_SOEL_CIUDAD_TMP',
    'type' => 'varchar',
    'source' => 'non-db',
    'massupdate' => false,
);


$dictionary['Veta_Liquidacion']['fields']['soel_referido'] = array(
    'name' => 'soel_referido',
    'vname' => 'LBL_SOEL_REFERIDO',
    'type' => 'varchar',
    'source' => 'non-db',

);


// created: 2021-09-02 13:15:21
$dictionary["Veta_Liquidacion"]["fields"]["veta_liquidacion_activities_emails"] = array (
  'name' => 'veta_liquidacion_activities_emails',
  'type' => 'link',
  'relationship' => 'veta_liquidacion_activities_emails',
  'source' => 'non-db',
  'module' => 'Emails',
  'bean_name' => 'Email',
  'vname' => 'LBL_VETA_LIQUIDACION_ACTIVITIES_EMAILS_FROM_EMAILS_TITLE',
);


// created: 2021-09-02 13:15:21
$dictionary["Veta_Liquidacion"]["fields"]["veta_liquidacion_activities_tasks"] = array (
  'name' => 'veta_liquidacion_activities_tasks',
  'type' => 'link',
  'relationship' => 'veta_liquidacion_activities_tasks',
  'source' => 'non-db',
  'module' => 'Tasks',
  'bean_name' => 'Task',
  'vname' => 'LBL_VETA_LIQUIDACION_ACTIVITIES_TASKS_FROM_TASKS_TITLE',
);


// created: 2021-09-02 13:15:24
$dictionary["Veta_Liquidacion"]["fields"]["veta_coe_veta_liquidacion"] = array (
  'name' => 'veta_coe_veta_liquidacion',
  'type' => 'link',
  'relationship' => 'veta_coe_veta_liquidacion',
  'source' => 'non-db',
  'module' => 'Veta_COE',
  'bean_name' => 'Veta_COE',
  'side' => 'right',
  'vname' => 'LBL_VETA_COE_VETA_LIQUIDACION_FROM_VETA_COE_TITLE',
);


// created: 2021-09-02 13:15:23
$dictionary["Veta_Liquidacion"]["fields"]["veta_pagos_veta_liquidacion"] = array (
  'name' => 'veta_pagos_veta_liquidacion',
  'type' => 'link',
  'relationship' => 'veta_pagos_veta_liquidacion',
  'source' => 'non-db',
  'module' => 'Veta_Pagos',
  'bean_name' => 'Veta_Pagos',
  'side' => 'right',
  'vname' => 'LBL_VETA_PAGOS_VETA_LIQUIDACION_FROM_VETA_PAGOS_TITLE',
);


// created: 2021-09-02 13:15:21
$dictionary["Veta_Liquidacion"]["fields"]["veta_liquidacion_veta_loo"] = array (
  'name' => 'veta_liquidacion_veta_loo',
  'type' => 'link',
  'relationship' => 'veta_liquidacion_veta_loo',
  'source' => 'non-db',
  'module' => 'Veta_Loo',
  'bean_name' => 'Veta_Loo',
  'vname' => 'LBL_VETA_LIQUIDACION_VETA_LOO_FROM_VETA_LOO_TITLE',
  'id_name' => 'veta_liquidacion_veta_looveta_loo_ida',
);
$dictionary["Veta_Liquidacion"]["fields"]["veta_liquidacion_veta_loo_name"] = array (
  'name' => 'veta_liquidacion_veta_loo_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_VETA_LIQUIDACION_VETA_LOO_FROM_VETA_LOO_TITLE',
  'save' => true,
  'id_name' => 'veta_liquidacion_veta_looveta_loo_ida',
  'link' => 'veta_liquidacion_veta_loo',
  'table' => 'veta_loo',
  'module' => 'Veta_Loo',
  'rname' => 'name',
);
$dictionary["Veta_Liquidacion"]["fields"]["veta_liquidacion_veta_looveta_loo_ida"] = array (
  'name' => 'veta_liquidacion_veta_looveta_loo_ida',
  'type' => 'link',
  'relationship' => 'veta_liquidacion_veta_loo',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_VETA_LIQUIDACION_VETA_LOO_FROM_VETA_LIQUIDACION_TITLE',
);


$dictionary['Veta_Liquidacion']['fields']['soel_fecha_expiracion_visa'] = array(
    'name' => 'soel_fecha_expiracion_visa',
    'vname' => 'LBL_SOEL_FECHA_EXPIRACION_VISA',
    'type' => 'datetime',
    'source' => 'non-db',
    'enable_range_search' => true,
    'options' => 'date_range_search_dom',

);


$dictionary['Veta_Liquidacion']['fields']['soel_fecha_viaje'] = array(
    'name' => 'soel_fecha_viaje',
    'vname' => 'LBL_SOEL_FECHA_VIAJE',
    'type' => 'datetime',
    'source' => 'non-db',
    'enable_range_search' => true,
    'options' => 'date_range_search_dom',
);

?>