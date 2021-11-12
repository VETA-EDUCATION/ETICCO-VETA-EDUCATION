<?php
// Do not store anything in this file that is not part of the array or the hook version.  This file will	
// be automatically rebuilt in the future. 
 $hook_version = 1; 
$hook_array = Array(); 
// position, file, function
$hook_array['process_record'] = Array();
$hook_array['process_record'][] = Array(1, 'Muestra las observaciones por registro', 'custom/modules/Leads/SOELAuditoria.php', 'SOELAuditoria', 'add_boton_observaciones');
$hook_array['process_record'][] = Array(2, 'Muestra la oficina del comercial por registro', 'custom/modules/Contacts/SOELHooksContacts.php', 'SOELHooksContacts', 'mostrar_oficina');

$hook_array['before_save'] = Array(); 
$hook_array['before_save'][] = Array(1, 'Contacts push feed', 'modules/Contacts/SugarFeeds/ContactFeed.php','ContactFeed', 'pushFeed'); 
$hook_array['before_save'][] = Array(77, 'updateGeocodeInfo', 'modules/Contacts/ContactsJjwg_MapsLogicHook.php','ContactsJjwg_MapsLogicHook', 'updateGeocodeInfo');
$hook_array['after_save'] = Array();
$hook_array['after_save'][] = Array(1, 'Update Portal', 'modules/Contacts/updatePortal.php','updatePortal', 'updateUser'); 
$hook_array['after_save'][] = Array(77, 'updateRelatedMeetingsGeocodeInfo', 'modules/Contacts/ContactsJjwg_MapsLogicHook.php','ContactsJjwg_MapsLogicHook', 'updateRelatedMeetingsGeocodeInfo');
$hook_array['after_save'][] = Array(80, 'Heredar Info', 'custom/modules/Contacts/SOELHooksContacts.php','SOELHooksContacts', 'heredar_info');

$hook_array['before_delete'] = Array();
$hook_array['before_delete'][] = Array(80, 'Before Delete', 'custom/modules/Contacts/SOELHooksContacts.php','SOELHooksContacts', 'pre_delete');

?>