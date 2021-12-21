<?php
// Do not store anything in this file that is not part of the array or the hook version.  This file will	
// be automatically rebuilt in the future. 
 $hook_version = 1; 
$hook_array = Array(); 
// position, file, function
//$hook_array['before_save'][] = Array(78, 'Primera Cita', 'custom/modules/Meetings/SOELHooks.php','SOELHooks', 'enviar_documentacion_primera_cita');
$hook_array['before_save'][] = Array(79, 'establecer_parent', 'custom/modules/Meetings/SOELHooksMeetings.php','SOELHooksMeetings', 'establecer_parent');
$hook_array['before_save'][] = Array(80, 'establecer_estudiante', 'custom/modules/Meetings/SOELHooksMeetings.php','SOELHooksMeetings', 'establecer_estudiante');

$hook_array['after_save'] = Array(); 
$hook_array['after_save'][] = Array(77, 'updateMeetingGeocodeInfo', 'modules/Meetings/MeetingsJjwg_MapsLogicHook.php','MeetingsJjwg_MapsLogicHook', 'updateMeetingGeocodeInfo');
//$hook_array['after_save'][] = Array(81, 'actualizar_oportunidad', 'custom/modules/Meetings/SOELMeetingsHooks.php','SOELMeetingsHooks', 'actualizar_oportunidad');
$hook_array['after_save'][] = Array(82, 'Actualizar Prospecto Proximo Ultimo Contacto', 'custom/modules/Meetings/SOELHooksMeetings.php','SOELHooksMeetings', 'actualizar_prospecto');
$hook_array['after_save'][] = Array(83, 'Actualizar Estudiante Proximo Ultimo Contacto', 'custom/modules/Meetings/SOELHooksMeetings.php','SOELHooksMeetings', 'actualizar_estudiante');
//$hook_array['after_save'][] = Array(84, 'Actualizar Oportunidad Proximo Ultimo Contacto', 'custom/modules/Meetings/SOELHooksMeetings.php','SOELHooksMeetings', 'actualizar_oportunidad');
//$hook_array['after_save'][] = Array(84, 'Actualizar Proximo Ultimo Contacto Veta', 'custom/modules/Meetings/SOELHooksMeetings.php','SOELHooksMeetings', 'actualizar_veta');




?>