<?php
// Do not store anything in this file that is not part of the array or the hook version.  This file will	
// be automatically rebuilt in the future. 
 $hook_version = 1; 
$hook_array = Array(); 
// position, file, function 
$hook_array['process_record'] = Array();
$hook_array['process_record'][] = Array(1, 'Muestra las observaciones por registro', 'custom/modules/Leads/SOELAuditoria.php', 'SOELAuditoria', 'add_boton_observaciones');
$hook_array['before_save'] = Array();
$hook_array['before_save'][] = Array(1, 'Leads push feed', 'modules/Leads/SugarFeeds/LeadFeed.php','LeadFeed', 'pushFeed'); 
$hook_array['before_save'][] = Array(77, 'updateGeocodeInfo', 'modules/Leads/LeadsJjwg_MapsLogicHook.php','LeadsJjwg_MapsLogicHook', 'updateGeocodeInfo');
$hook_array['before_save'][] = Array(78, 'Pre Save', 'custom/modules/Leads/SOELHooksLeads.php','SOELHooksLeads', 'pre_save');
$hook_array['before_save'][] = Array(79, 'Establecer Departamento Pais', 'custom/modules/Leads/SOELHooksLeads.php','SOELHooksLeads', 'establecer_dpto_pais');
$hook_array['after_save'] = Array();
$hook_array['after_save'][] = Array(77, 'updateRelatedMeetingsGeocodeInfo', 'modules/Leads/LeadsJjwg_MapsLogicHook.php','LeadsJjwg_MapsLogicHook', 'updateRelatedMeetingsGeocodeInfo');
$hook_array['after_save'][] = Array(80, 'Post Save', 'custom/modules/Leads/SOELHooksLeads.php','SOELHooksLeads', 'post_save');
$hook_array['before_delete'] = Array();
$hook_array['before_delete'][] = Array(80, 'Before Delete', 'custom/modules/Leads/SOELHooksLeads.php','SOELHooksLeads', 'pre_delete');

?>