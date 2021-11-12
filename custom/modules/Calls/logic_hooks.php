<?php
// Do not store anything in this file that is not part of the array or the hook version.  This file will	
// be automatically rebuilt in the future. 
 $hook_version = 1; 
$hook_array = Array(); 
// position, file, function 
$hook_array['process_record'] = Array(); 
$hook_array['process_record'][] = Array(1, 'count', 'modules/Calls_Reschedule/reschedule_count.php','reschedule_count', 'count');
$hook_array['process_record'][] = Array(2, 'Add View On Cal Button', 'custom/modules/Calls/ViewOnCalHook.php', 'ViewOnCalHook', 'addButton');

$hook_array['before_save'][] = Array(78, 'establecer_estudiante', 'custom/modules/Calls/SOELHooks.php','SOELHooks', 'establecer_estudiante');
$hook_array['before_save'][] = Array(80, 'Relacionar Estudiante', 'custom/modules/Calls/SOELHooks.php','SOELHooks', 'relacionar_estudiante');

$hook_array['after_save'][] = Array(79, 'actualizar_oportunidad', 'custom/modules/Calls/SOELHooks.php','SOELHooks', 'actualizar_oportunidad');




?>