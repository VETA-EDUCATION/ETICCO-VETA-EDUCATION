<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2021-09-02 13:15:22
$dictionary["Veta_PagoColegios"]["fields"]["veta_pagocolegios_activities_tasks"] = array (
  'name' => 'veta_pagocolegios_activities_tasks',
  'type' => 'link',
  'relationship' => 'veta_pagocolegios_activities_tasks',
  'source' => 'non-db',
  'module' => 'Tasks',
  'bean_name' => 'Task',
  'vname' => 'LBL_VETA_PAGOCOLEGIOS_ACTIVITIES_TASKS_FROM_TASKS_TITLE',
);


// created: 2021-09-02 13:15:22
$dictionary["Veta_PagoColegios"]["fields"]["veta_pagocolegios_activities_calls"] = array (
  'name' => 'veta_pagocolegios_activities_calls',
  'type' => 'link',
  'relationship' => 'veta_pagocolegios_activities_calls',
  'source' => 'non-db',
  'module' => 'Calls',
  'bean_name' => 'Call',
  'vname' => 'LBL_VETA_PAGOCOLEGIOS_ACTIVITIES_CALLS_FROM_CALLS_TITLE',
);


// created: 2021-09-02 13:15:22
$dictionary["Veta_PagoColegios"]["fields"]["veta_pagocolegios_activities_meetings"] = array (
  'name' => 'veta_pagocolegios_activities_meetings',
  'type' => 'link',
  'relationship' => 'veta_pagocolegios_activities_meetings',
  'source' => 'non-db',
  'module' => 'Meetings',
  'bean_name' => 'Meeting',
  'vname' => 'LBL_VETA_PAGOCOLEGIOS_ACTIVITIES_MEETINGS_FROM_MEETINGS_TITLE',
);


// created: 2021-09-02 13:15:22
$dictionary["Veta_PagoColegios"]["fields"]["veta_pagocolegios_opportunities"] = array (
  'name' => 'veta_pagocolegios_opportunities',
  'type' => 'link',
  'relationship' => 'veta_pagocolegios_opportunities',
  'source' => 'non-db',
  'module' => 'Opportunities',
  'bean_name' => 'Opportunity',
  'vname' => 'LBL_VETA_PAGOCOLEGIOS_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE',
  'id_name' => 'veta_pagocolegios_opportunitiesopportunities_ida',
);
$dictionary["Veta_PagoColegios"]["fields"]["veta_pagocolegios_opportunities_name"] = array (
  'name' => 'veta_pagocolegios_opportunities_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_VETA_PAGOCOLEGIOS_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE',
  'save' => true,
  'id_name' => 'veta_pagocolegios_opportunitiesopportunities_ida',
  'link' => 'veta_pagocolegios_opportunities',
  'table' => 'opportunities',
  'module' => 'Opportunities',
  'rname' => 'name',
);
$dictionary["Veta_PagoColegios"]["fields"]["veta_pagocolegios_opportunitiesopportunities_ida"] = array (
  'name' => 'veta_pagocolegios_opportunitiesopportunities_ida',
  'type' => 'link',
  'relationship' => 'veta_pagocolegios_opportunities',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_VETA_PAGOCOLEGIOS_OPPORTUNITIES_FROM_VETA_PAGOCOLEGIOS_TITLE',
);


// created: 2021-09-02 13:15:22
$dictionary["Veta_PagoColegios"]["fields"]["veta_pagocolegios_activities_emails"] = array (
  'name' => 'veta_pagocolegios_activities_emails',
  'type' => 'link',
  'relationship' => 'veta_pagocolegios_activities_emails',
  'source' => 'non-db',
  'module' => 'Emails',
  'bean_name' => 'Email',
  'vname' => 'LBL_VETA_PAGOCOLEGIOS_ACTIVITIES_EMAILS_FROM_EMAILS_TITLE',
);


// created: 2021-09-02 13:15:22
$dictionary["Veta_PagoColegios"]["fields"]["veta_pagocolegios_activities_notes"] = array (
  'name' => 'veta_pagocolegios_activities_notes',
  'type' => 'link',
  'relationship' => 'veta_pagocolegios_activities_notes',
  'source' => 'non-db',
  'module' => 'Notes',
  'bean_name' => 'Note',
  'vname' => 'LBL_VETA_PAGOCOLEGIOS_ACTIVITIES_NOTES_FROM_NOTES_TITLE',
);


// created: 2021-09-02 13:15:20
$dictionary["Veta_PagoColegios"]["fields"]["veta_notificacionpagocolegio_veta_pagocolegios"] = array (
  'name' => 'veta_notificacionpagocolegio_veta_pagocolegios',
  'type' => 'link',
  'relationship' => 'veta_notificacionpagocolegio_veta_pagocolegios',
  'source' => 'non-db',
  'module' => 'Veta_NotificacionPagoColegio',
  'bean_name' => 'Veta_NotificacionPagoColegio',
  'side' => 'right',
  'vname' => 'LBL_VETA_NOTIFICACIONPAGOCOLEGIO_VETA_PAGOCOLEGIOS_FROM_VETA_NOTIFICACIONPAGOCOLEGIO_TITLE',
);

?>