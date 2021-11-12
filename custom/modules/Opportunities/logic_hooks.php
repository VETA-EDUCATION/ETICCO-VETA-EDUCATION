<?php
// Do not store anything in this file that is not part of the array or the hook version.  This file will	
// be automatically rebuilt in the future. 
 $hook_version = 1;
$hook_array = Array();
// position, file, function
$hook_array['process_record'] = Array();
$hook_array['process_record'][] = Array(100, 'Muestra la oficina en el proceso de venta', 'custom/modules/Opportunities/SOELHooksListView.php', 'SOELHooksListView', 'ver_oficina');
$hook_array['process_record'][] = Array(200, 'Muestra campos de solo lectura', 'custom/modules/Opportunities/SOELHooksListView.php', 'SOELHooksListView', 'procesar');
$hook_array['process_record'][] = Array(201, 'Muestra campos de solo lectura', 'custom/modules/Opportunities/SOELHooksListView2.php', 'SOELHooksListView2', 'procesar');

$hook_array['before_save'] = Array();
$hook_array['before_save'][] = Array(1, 'Opportunities push feed', 'modules/Opportunities/SugarFeeds/OppFeed.php','OppFeed', 'pushFeed');
$hook_array['before_save'][] = Array(77, 'updateGeocodeInfo', 'modules/Opportunities/OpportunitiesJjwg_MapsLogicHook.php','OpportunitiesJjwg_MapsLogicHook', 'updateGeocodeInfo');
$hook_array['before_save'][] = Array(79, 'Pre Save', 'custom/modules/Opportunities/SOELHooks.php','SOELHooks', 'pre_save');
// $hook_array['before_save'][] = Array(80, 'Verificar modificaciones en el campo de recoleccion de documentos', 'custom/modules/Opportunities/SOELHooks.php','SOELHooks', 'verificar_rol');
$hook_array['after_save'] = Array();
$hook_array['after_save'][] = Array(79, 'Post Save', 'custom/modules/Opportunities/SOELHooks.php','SOELHooks', 'post_save');
$hook_array['after_save'][] = Array(77, 'updateRelatedMeetingsGeocodeInfo', 'modules/Opportunities/OpportunitiesJjwg_MapsLogicHook.php','OpportunitiesJjwg_MapsLogicHook', 'updateRelatedMeetingsGeocodeInfo');
$hook_array['after_save'][] = Array(78, 'updateRelatedProjectGeocodeInfo', 'modules/Opportunities/OpportunitiesJjwg_MapsLogicHook.php','OpportunitiesJjwg_MapsLogicHook', 'updateRelatedProjectGeocodeInfo');
$hook_array['after_relationship_add'] = Array();
$hook_array['after_relationship_add'][] = Array(77, 'addRelationship', 'modules/Opportunities/OpportunitiesJjwg_MapsLogicHook.php','OpportunitiesJjwg_MapsLogicHook', 'addRelationship');
$hook_array['after_relationship_delete'] = Array();
$hook_array['after_relationship_delete'][] = Array(77, 'deleteRelationship', 'modules/Opportunities/OpportunitiesJjwg_MapsLogicHook.php','OpportunitiesJjwg_MapsLogicHook', 'deleteRelationship');
$hook_array['before_delete'] = Array();
$hook_array['before_delete'][] = Array(1, 'Colocar el coe, carta de oferta, servicio al cliente y visa como descartado cuando se elimine un proceso de venta', 'custom/modules/Opportunities/SOELHooks.php','SOELHooks', 'pre_delete');


?>