<?php

if ( ! defined( 'sugarEntry' ) ) {
    define( 'sugarEntry', true );
}

if ( is_file( 'config.php' ) ) {
    require_once 'config.php'; // provides $sugar_config
}

// load up the config_override.php file.  This is used to provide default user settings
if ( is_file( 'config_override.php' ) ) {
    require_once 'config_override.php';
}

require_once( 'include/utils.php' );
require_once( 'include/MVC/SugarApplication.php' );
require_once( 'include/database/DBManagerFactory.php' );
require_once( 'data/SugarBean.php' );
require_once( 'modules/Users/User.php' );
require_once( 'modules/Accounts/Account.php' );
require_once( 'include/database/DBManager.php' );
//require_once('modules/PDS_Sucursal/PDS_Sucursal.php');
require_once( 'include/utils/sugar_file_utils.php' );
require_once( 'include/SugarObjects/LanguageManager.php' );
require 'include/SugarObjects/VardefManager.php';
require_once( 'include/utils/file_utils.php' );
require_once( 'include/SugarCache/SugarCache.php' );
require_once( 'include/SugarLogger/LoggerManager.php' );
require_once( 'include/TimeDate.php' );
require_once( 'modules/Users/User.php' );
$GLOBALS[ 'log' ] = LoggerManager::getLogger();
require_once( 'include/SugarEmailAddress/SugarEmailAddress.php' );
require_once( 'include/utils/LogicHook.php' );
require_once( 'include/Localization/Localization.php' );
require_once( 'include/clean.php' );
require_once( 'include/HtmlSanitizer.php' );
require_once( 'modules/Configurator/Configurator.php' );
require_once( 'modules/SugarFeed/SugarFeed.php' );
require_once( 'modules/Trackers/TrackerManager.php' );
require_once('modules/Administration/Administration.php');
require_once('data/BeanFactory.php');
require_once('modules/AOD_Index/AOD_Index.php');
require_once('modules/AOD_IndexEvent/AOD_IndexEvent.php');
require_once ('modules/AOD_IndexEvent/AOD_IndexEvent.php');
require_once ('include/modules.php');
require_once('modules/Currencies/Currency.php');
require_once ('modules/jjwg_Maps/jjwg_Maps.php');
require_once ('modules/ACL/ACLController.php');
require_once ('modules/ACLActions/ACLAction.php');
require_once ('include/SugarTheme/SugarThemeRegistry.php');
require_once ('include/SugarTheme/SugarTheme.php');

global $timedate, $locale;
if ( empty( $timedate ) ) {
    $timedate = TimeDate::getInstance();
}

if ( ! isset( $locale ) ) {
    $locale = new Localization();
}

$GLOBALS[ 'sugar_config' ] = $sugar_config;

require_once( 'modules/UserPreferences/UserPreference.php' );

$current_user              = new User();
$GLOBALS[ 'current_user' ] = $current_user;

if (empty($current_language)) {
    $current_language = $sugar_config['default_language'];
}

$app_list_strings = return_app_list_strings_language($current_language);
$GLOBALS['app_list_strings'] = $app_list_strings;

function escenario_pruebas(){

    $db  = DBManagerFactory::getInstance();

    $q="delete from accounts";
    $res = $db->query( $q );

    $q="delete from accounts_audit";
    $res = $db->query( $q );

    $q="delete from accounts_bugs";
    $res = $db->query( $q );

    $q="delete from accounts_cases";
    $res = $db->query( $q );

    $q="delete from accounts_contacts";
    $res = $db->query( $q );

    $q="delete from accounts_cstm";
    $res = $db->query( $q );

    $q="delete from accounts_opportunities";
    $res = $db->query( $q );

    $q="delete from alerts";
    $res = $db->query( $q );

    $q="delete from am_projecttemplates";
    $res = $db->query( $q );

    $q="delete from am_projecttemplates_audit";
    $res = $db->query( $q );

    $q="delete from am_projecttemplates_contacts_1_c";
    $res = $db->query( $q );

    $q="delete from am_projecttemplates_project_1_c";
    $res = $db->query( $q );

    $q="delete from am_projecttemplates_users_1_c";
    $res = $db->query( $q );

    $q="delete from am_tasktemplates";
    $res = $db->query( $q );

    $q="delete from am_tasktemplates_am_projecttemplates_c";
    $res = $db->query( $q );

    $q="delete from am_tasktemplates_audit";
    $res = $db->query( $q );

    $q="delete from aobh_businesshours";
    $res = $db->query( $q );

    $q="delete from aod_index";
    $res = $db->query( $q );

    $q="delete from aod_index_audit";
    $res = $db->query( $q );

    $q="delete from aod_indexevent";
    $res = $db->query( $q );

    $q="delete from aod_indexevent_audit";
    $res = $db->query( $q );

    $q="delete from aok_knowledge_base_categories";
    $res = $db->query( $q );

    $q="delete from aok_knowledge_base_categories_audit";
    $res = $db->query( $q );

    $q="delete from aok_knowledgebase";
    $res = $db->query( $q );

    $q="delete from aok_knowledgebase_audit";
    $res = $db->query( $q );

    $q="delete from aok_knowledgebase_categories";
    $res = $db->query( $q );

    $q="delete from aop_case_events";
    $res = $db->query( $q );

    $q="delete from aop_case_events_audit";
    $res = $db->query( $q );

    $q="delete from aop_case_updates";
    $res = $db->query( $q );

    $q="delete from aop_case_updates_audit";
    $res = $db->query( $q );

    $q="delete from aor_charts";
    $res = $db->query( $q );

    $q="delete from aor_conditions";
    $res = $db->query( $q );

    $q="delete from aor_fields";
    $res = $db->query( $q );

    $q="delete from aor_reports";
    $res = $db->query( $q );

    $q="delete from aor_reports_audit";
    $res = $db->query( $q );

    $q="delete from aor_scheduled_reports";
    $res = $db->query( $q );

    $q="delete from aos_contracts";
    $res = $db->query( $q );

    $q="delete from aos_contracts_audit";
    $res = $db->query( $q );

    $q="delete from aos_contracts_documents";
    $res = $db->query( $q );

    $q="delete from aos_invoices";
    $res = $db->query( $q );

    $q="delete from aos_invoices_audit";
    $res = $db->query( $q );

    $q="delete from aos_line_item_groups";
    $res = $db->query( $q );

    $q="delete from aos_line_item_groups_audit";
    $res = $db->query( $q );

    $q="delete from aos_pdf_templates";
    $res = $db->query( $q );

    $q="delete from aos_pdf_templates_audit";
    $res = $db->query( $q );

    $q="delete from aos_product_categories";
    $res = $db->query( $q );

    $q="delete from aos_product_categories_audit";
    $res = $db->query( $q );

    $q="delete from aos_products";
    $res = $db->query( $q );

    $q="delete from aos_products_audit";
    $res = $db->query( $q );

    $q="delete from aos_products_quotes";
    $res = $db->query( $q );

    $q="delete from aos_products_quotes_audit";
    $res = $db->query( $q );

    $q="delete from aos_quotes";
    $res = $db->query( $q );

    $q="delete from aos_quotes_aos_invoices_c";
    $res = $db->query( $q );

    $q="delete from aos_quotes_audit";
    $res = $db->query( $q );

    $q="delete from aos_quotes_os_contracts_c";
    $res = $db->query( $q );

    $q="delete from aos_quotes_project_c";
    $res = $db->query( $q );

    $q="delete from aow_actions";
    $res = $db->query( $q );

    $q="delete from aow_conditions";
    $res = $db->query( $q );

    $q="delete from aow_processed";
    $res = $db->query( $q );

    $q="delete from aow_processed_aow_actions";
    $res = $db->query( $q );

    $q="delete from aow_workflow";
    $res = $db->query( $q );

    $q="delete from aow_workflow_audit";
    $res = $db->query( $q );

    $q="delete from bugs";
    $res = $db->query( $q );

    $q="delete from bugs_audit";
    $res = $db->query( $q );

    $q="delete from calls";
    $res = $db->query( $q );

    $q="delete from calls_contacts";
    $res = $db->query( $q );

    $q="delete from calls_cstm";
    $res = $db->query( $q );

    $q="delete from calls_leads";
    $res = $db->query( $q );

    $q="delete from calls_reschedule";
    $res = $db->query( $q );

    $q="delete from calls_reschedule_audit";
    $res = $db->query( $q );

    $q="delete from calls_users";
    $res = $db->query( $q );

    $q="delete from campaign_log";
    $res = $db->query( $q );

    $q="delete from campaign_trkrs";
    $res = $db->query( $q );

    $q="delete from campaigns";
    $res = $db->query( $q );

    $q="delete from campaigns_audit";
    $res = $db->query( $q );

    $q="delete from campaigns_cstm";
    $res = $db->query( $q );

    $q="delete from cases";
    $res = $db->query( $q );

    $q="delete from cases_audit";
    $res = $db->query( $q );

    $q="delete from cases_bugs";
    $res = $db->query( $q );

    $q="delete from cases_cstm";
    $res = $db->query( $q );

    $q="delete from contacts";
    $res = $db->query( $q );

    $q="delete from contacts_audit";
    $res = $db->query( $q );

    $q="delete from contacts_bugs";
    $res = $db->query( $q );

    $q="delete from contacts_cases";
    $res = $db->query( $q );

    $q="delete from contacts_cstm";
    $res = $db->query( $q );

    $q="delete from contacts_opportunities_1_c";
    $res = $db->query( $q );

    $q="delete from contacts_users";
    $res = $db->query( $q );

    $q="delete from cron_remove_documents";
    $res = $db->query( $q );

    $q="delete from document_revisions";
    $res = $db->query( $q );

    $q="delete from documents";
    $res = $db->query( $q );

    $q="delete from documents_accounts";
    $res = $db->query( $q );

    $q="delete from documents_bugs";
    $res = $db->query( $q );

    $q="delete from documents_cases";
    $res = $db->query( $q );

    $q="delete from documents_contacts";
    $res = $db->query( $q );

    $q="delete from documents_opportunities";
    $res = $db->query( $q );

    $q="delete from email_addr_bean_rel";
    $res = $db->query( $q );

    $q="delete from email_addresses";
    $res = $db->query( $q );

    $q="delete from email_addresses_audit";
    $res = $db->query( $q );

    $q="delete from email_cache";
    $res = $db->query( $q );

    $q="delete from email_marketing";
    $res = $db->query( $q );

    $q="delete from email_marketing_prospect_lists";
    $res = $db->query( $q );

    /*$q="delete from email_templates";
    $res = $db->query( $q );*/

    $q="delete from emailman";
    $res = $db->query( $q );

    $q="delete from emails";
    $res = $db->query( $q );

    $q="delete from emails_beans";
    $res = $db->query( $q );

    $q="delete from emails_email_addr_rel";
    $res = $db->query( $q );

    $q="delete from emails_text";
    $res = $db->query( $q );

    $q="delete from folders";
    $res = $db->query( $q );

    $q="delete from folders_rel";
    $res = $db->query( $q );

    $q="delete from folders_subscriptions";
    $res = $db->query( $q );

    $q="delete from fp_event_locations";
    $res = $db->query( $q );

    $q="delete from fp_event_locations_audit";
    $res = $db->query( $q );

    $q="delete from fp_event_locations_fp_events_1_c";
    $res = $db->query( $q );

    $q="delete from fp_events";
    $res = $db->query( $q );

    $q="delete from fp_events_audit";
    $res = $db->query( $q );

    $q="delete from fp_events_contacts_c";
    $res = $db->query( $q );

    $q="delete from fp_events_fp_event_delegates_1_c";
    $res = $db->query( $q );

    $q="delete from fp_events_fp_event_locations_1_c";
    $res = $db->query( $q );

    $q="delete from fp_events_leads_1_c";
    $res = $db->query( $q );

    $q="delete from fp_events_prospects_1_c";
    $res = $db->query( $q );

    $q="delete from inbound_email";
    $res = $db->query( $q );

    $q="delete from inbound_email_autoreply";
    $res = $db->query( $q );

    $q="delete from inbound_email_cache_ts";
    $res = $db->query( $q );

    $q="delete from jjwg_address_cache";
    $res = $db->query( $q );

    $q="delete from jjwg_address_cache_audit";
    $res = $db->query( $q );

    $q="delete from jjwg_areas";
    $res = $db->query( $q );

    $q="delete from jjwg_areas_audit";
    $res = $db->query( $q );

    $q="delete from jjwg_maps";
    $res = $db->query( $q );

    $q="delete from jjwg_maps_audit";
    $res = $db->query( $q );

    $q="delete from jjwg_maps_jjwg_areas_c";
    $res = $db->query( $q );

    $q="delete from jjwg_maps_jjwg_markers_c";
    $res = $db->query( $q );

    $q="delete from jjwg_markers";
    $res = $db->query( $q );

    $q="delete from jjwg_markers_audit";
    $res = $db->query( $q );

    $q="delete from job_queue";
    $res = $db->query( $q );

    $q="delete from leads";
    $res = $db->query( $q );

    $q="delete from leads_audit";
    $res = $db->query( $q );

    $q="delete from leads_cstm";
    $res = $db->query( $q );

    $q="delete from leads_opportunities_1_c";
    $res = $db->query( $q );

    $q="delete from linked_documents";
    $res = $db->query( $q );

    $q="delete from meetings";
    $res = $db->query( $q );

    $q="delete from meetings_contacts";
    $res = $db->query( $q );

    $q="delete from meetings_cstm";
    $res = $db->query( $q );

    $q="delete from meetings_leads";
    $res = $db->query( $q );

    $q="delete from meetings_users";
    $res = $db->query( $q );

    $q="delete from notes";
    $res = $db->query( $q );

    $q="delete from notes_cstm";
    $res = $db->query( $q );

    $q="delete from oauth2clients";
    $res = $db->query( $q );

    $q="delete from oauth2tokens";
    $res = $db->query( $q );

    $q="delete from oauth_consumer";
    $res = $db->query( $q );

    $q="delete from oauth_nonce";
    $res = $db->query( $q );

    $q="delete from oauth_tokens";
    $res = $db->query( $q );

    $q="delete from opportunities";
    $res = $db->query( $q );

    $q="delete from opportunities_audit";
    $res = $db->query( $q );

    $q="delete from opportunities_cases_1_c";
    $res = $db->query( $q );

    $q="delete from opportunities_contacts";
    $res = $db->query( $q );

    $q="delete from opportunities_cstm";
    $res = $db->query( $q );

    $q="delete from outbound_email";
    $res = $db->query( $q );

    $q="delete from outbound_email_audit";
    $res = $db->query( $q );

    $q="delete from project";
    $res = $db->query( $q );

    $q="delete from project_contacts_1_c";
    $res = $db->query( $q );

    $q="delete from project_cstm";
    $res = $db->query( $q );

    $q="delete from project_task";
    $res = $db->query( $q );

    $q="delete from project_task_audit";
    $res = $db->query( $q );

    $q="delete from project_users_1_c";
    $res = $db->query( $q );

    $q="delete from projects_accounts";
    $res = $db->query( $q );

    $q="delete from projects_bugs";
    $res = $db->query( $q );

    $q="delete from projects_cases";
    $res = $db->query( $q );

    $q="delete from projects_contacts";
    $res = $db->query( $q );

    $q="delete from projects_opportunities";
    $res = $db->query( $q );

    $q="delete from projects_products";
    $res = $db->query( $q );

    $q="delete from prospect_list_campaigns";
    $res = $db->query( $q );

    $q="delete from prospect_lists";
    $res = $db->query( $q );

    $q="delete from prospect_lists_prospects";
    $res = $db->query( $q );

    $q="delete from prospects";
    $res = $db->query( $q );

    $q="delete from prospects_cstm";
    $res = $db->query( $q );

    $q="delete from releases";
    $res = $db->query( $q );

    $q="delete from reminders";
    $res = $db->query( $q );

    $q="delete from reminders_invitees";
    $res = $db->query( $q );

    $q="delete from saved_search";
    $res = $db->query( $q );

    $q="delete from schedulers";
    $res = $db->query( $q );

    $q="delete from securitygroups";
    $res = $db->query( $q );

    $q="delete from securitygroups_acl_roles";
    $res = $db->query( $q );

    $q="delete from securitygroups_audit";
    $res = $db->query( $q );

    $q="delete from securitygroups_default";
    $res = $db->query( $q );

    $q="delete from securitygroups_records";
    $res = $db->query( $q );

    $q="delete from securitygroups_users";
    $res = $db->query( $q );

    $q="delete from spots";
    $res = $db->query( $q );

    $q="delete from sugarfeed";
    $res = $db->query( $q );

    $q="delete from surveyquestionoptions";
    $res = $db->query( $q );

    $q="delete from surveyquestionoptions_audit";
    $res = $db->query( $q );

    $q="delete from surveyquestionoptions_surveyquestionresponses";
    $res = $db->query( $q );

    $q="delete from surveyquestionresponses";
    $res = $db->query( $q );

    $q="delete from surveyquestionresponses_audit";
    $res = $db->query( $q );

    $q="delete from surveyquestions";
    $res = $db->query( $q );

    $q="delete from surveyquestions_audit";
    $res = $db->query( $q );

    $q="delete from surveyresponses";
    $res = $db->query( $q );

    $q="delete from surveyresponses_audit";
    $res = $db->query( $q );

    $q="delete from surveys";
    $res = $db->query( $q );

    $q="delete from surveys_audit";
    $res = $db->query( $q );

    $q="delete from tasks";
    $res = $db->query( $q );

    $q="delete from tasks_cstm";
    $res = $db->query( $q );

    $q="delete from templatesectionline";
    $res = $db->query( $q );

    $q="delete from tracker";
    $res = $db->query( $q );

    $q="delete from vcals";
    $res = $db->query( $q );

    $q="delete from veta_abntaxfile";
    $res = $db->query( $q );

    $q="delete from veta_abntaxfile_audit";
    $res = $db->query( $q );

    $q="delete from veta_abono";
    $res = $db->query( $q );

    $q="delete from veta_abono_audit";
    $res = $db->query( $q );

    $q="delete from veta_abono_veta_recibo_c";
    $res = $db->query( $q );

    $q="delete from veta_aplicacion";
    $res = $db->query( $q );

    $q="delete from veta_aplicacion_audit";
    $res = $db->query( $q );

    $q="delete from veta_aplicacion_cases_c";
    $res = $db->query( $q );

    $q="delete from veta_aplicacion_cstm";
    $res = $db->query( $q );

    $q="delete from veta_aplicacion_opportunities_c";
    $res = $db->query( $q );

    $q="delete from veta_ciudadania";
    $res = $db->query( $q );

    $q="delete from veta_ciudadania_audit";
    $res = $db->query( $q );

    $q="delete from veta_ciudadania_contacts_c";
    $res = $db->query( $q );

    $q="delete from veta_ciudadania_leads_c";
    $res = $db->query( $q );

    $q="delete from veta_coe";
    $res = $db->query( $q );

    $q="delete from veta_coe_audit";
    $res = $db->query( $q );

    $q="delete from veta_coe_cases_c";
    $res = $db->query( $q );

    $q="delete from veta_coe_opportunities_c";
    $res = $db->query( $q );

    $q="delete from veta_coe_veta_aplicacion_c";
    $res = $db->query( $q );

    $q="delete from veta_coe_veta_liquidacion_c";
    $res = $db->query( $q );

    $q="delete from veta_college";
    $res = $db->query( $q );

    $q="delete from veta_college_audit";
    $res = $db->query( $q );

    $q="delete from veta_correccioncoe";
    $res = $db->query( $q );

    $q="delete from veta_correccioncoe_audit";
    $res = $db->query( $q );

    $q="delete from veta_correccioncoe_veta_coe_c";
    $res = $db->query( $q );

    $q="delete from veta_curso";
    $res = $db->query( $q );

    $q="delete from veta_curso_audit";
    $res = $db->query( $q );

    $q="delete from veta_detallepresupuesto";
    $res = $db->query( $q );

    $q="delete from veta_detallepresupuesto_audit";
    $res = $db->query( $q );

    $q="delete from veta_detallepresupuesto_veta_presupuesto_c";
    $res = $db->query( $q );

    $q="delete from veta_detallerecibo";
    $res = $db->query( $q );

    $q="delete from veta_detallerecibo_audit";
    $res = $db->query( $q );

    $q="delete from veta_detallerecibo_veta_recibo_c";
    $res = $db->query( $q );

    $q="delete from veta_detallereciboitem";
    $res = $db->query( $q );

    $q="delete from veta_detallereciboitem_audit";
    $res = $db->query( $q );

    $q="delete from veta_detallereciboitem_veta_detallerecibo_c";
    $res = $db->query( $q );

    $q="delete from veta_detallereciboitem_veta_recibo_c";
    $res = $db->query( $q );

    $q="delete from veta_hijo";
    $res = $db->query( $q );

    $q="delete from veta_hijo_audit";
    $res = $db->query( $q );

    $q="delete from veta_hijo_contacts_c";
    $res = $db->query( $q );

    $q="delete from veta_informacionacademica";
    $res = $db->query( $q );

    $q="delete from veta_informacionacademica_audit";
    $res = $db->query( $q );

    $q="delete from veta_informacionacademica_contacts_c";
    $res = $db->query( $q );

    $q="delete from veta_informacionacademica_leads_c";
    $res = $db->query( $q );

    $q="delete from veta_informacionlaboral";
    $res = $db->query( $q );

    $q="delete from veta_informacionlaboral_audit";
    $res = $db->query( $q );

    $q="delete from veta_informacionlaboral_contacts_c";
    $res = $db->query( $q );

    $q="delete from veta_informacionlaboral_leads_c";
    $res = $db->query( $q );

    $q="delete from veta_liquidacion";
    $res = $db->query( $q );

    $q="delete from veta_liquidacion_audit";
    $res = $db->query( $q );

    $q="delete from veta_liquidacion_cases_c";
    $res = $db->query( $q );

    $q="delete from veta_liquidacion_opportunities_c";
    $res = $db->query( $q );

    $q="delete from veta_liquidacion_veta_loo_c";
    $res = $db->query( $q );

    $q="delete from veta_loo";
    $res = $db->query( $q );

    $q="delete from veta_loo_audit";
    $res = $db->query( $q );

    $q="delete from veta_loo_cases_c";
    $res = $db->query( $q );

    $q="delete from veta_loo_veta_aplicacion_c";
    $res = $db->query( $q );

    $q="delete from veta_loocorreccion";
    $res = $db->query( $q );

    $q="delete from veta_loocorreccion_audit";
    $res = $db->query( $q );

    $q="delete from veta_loocorreccion_veta_loo_c";
    $res = $db->query( $q );

    $q="delete from veta_notificacionpagocolegio";
    $res = $db->query( $q );

    $q="delete from veta_notificacionpagocolegio_audit";
    $res = $db->query( $q );

    $q="delete from veta_notificacionpagocolegio_veta_pagocolegios_c";
    $res = $db->query( $q );

    $q="delete from veta_otrosnombres";
    $res = $db->query( $q );

    $q="delete from veta_otrosnombres_audit";
    $res = $db->query( $q );

    $q="delete from veta_otrosnombres_contacts_c";
    $res = $db->query( $q );

    $q="delete from veta_otrosnombres_leads_c";
    $res = $db->query( $q );

    $q="delete from veta_pagocolegios";
    $res = $db->query( $q );

    $q="delete from veta_pagocolegios_audit";
    $res = $db->query( $q );

    $q="delete from veta_pagocolegios_opportunities_c";
    $res = $db->query( $q );

    $q="delete from veta_pagos";
    $res = $db->query( $q );

    $q="delete from veta_pagos_audit";
    $res = $db->query( $q );

    $q="delete from veta_pagos_veta_liquidacion_c";
    $res = $db->query( $q );

    $q="delete from veta_pasaporte";
    $res = $db->query( $q );

    $q="delete from veta_pasaporte_audit";
    $res = $db->query( $q );

    $q="delete from veta_pasaporte_contacts_c";
    $res = $db->query( $q );

    $q="delete from veta_pasaporte_leads_c";
    $res = $db->query( $q );

    $q="delete from veta_presupuesto";
    $res = $db->query( $q );

    $q="delete from veta_presupuesto_audit";
    $res = $db->query( $q );

    $q="delete from veta_presupuesto_contacts_c";
    $res = $db->query( $q );

    $q="delete from veta_presupuesto_emails_c";
    $res = $db->query( $q );

    $q="delete from veta_presupuesto_leads_c";
    $res = $db->query( $q );

    $q="delete from veta_recibo";
    $res = $db->query( $q );

    $q="delete from veta_recibo_audit";
    $res = $db->query( $q );

    $q="delete from veta_recibo_contacts_c";
    $res = $db->query( $q );

    $q="delete from veta_recibo_cstm";
    $res = $db->query( $q );

    $q="delete from veta_recibo_emails_c";
    $res = $db->query( $q );

    $q="delete from veta_recibo_leads_c";
    $res = $db->query( $q );

    $q="delete from veta_recibo_opportunities_c";
    $res = $db->query( $q );

    $q="delete from veta_recibo_veta_presupuesto_c";
    $res = $db->query( $q );

    $q="delete from veta_requerimiento";
    $res = $db->query( $q );

    $q="delete from veta_requerimiento_audit";
    $res = $db->query( $q );

    $q="delete from veta_requerimiento_contacts_c";
    $res = $db->query( $q );

    $q="delete from veta_requerimiento_leads_c";
    $res = $db->query( $q );

    $q="delete from veta_requerimiento_veta_presupuesto_c";
    $res = $db->query( $q );

    $q="delete from veta_requerimiento_veta_recibo_c";
    $res = $db->query( $q );

    $q="delete from veta_seguro";
    $res = $db->query( $q );

    $q="delete from veta_seguro_audit";
    $res = $db->query( $q );

    $q="delete from veta_serviciocliente";
    $res = $db->query( $q );

    $q="delete from veta_serviciocliente_audit";
    $res = $db->query( $q );

    $q="delete from veta_serviciocliente_opportunities_c";
    $res = $db->query( $q );

    $q="delete from veta_serviciosadicionales";
    $res = $db->query( $q );

    $q="delete from veta_serviciosadicionales_audit";
    $res = $db->query( $q );

    $q="delete from veta_serviciosadicionales_contacts_c";
    $res = $db->query( $q );

    $q="delete from veta_serviciosadicionales_leads_c";
    $res = $db->query( $q );

    $q="delete from veta_solvenciaeconomica";
    $res = $db->query( $q );

    $q="delete from veta_solvenciaeconomica_audit";
    $res = $db->query( $q );

    $q="delete from veta_solvenciaeconomica_contacts_c";
    $res = $db->query( $q );

    $q="delete from veta_solvenciaeconomica_leads_c";
    $res = $db->query( $q );

    $q="delete from veta_tiposvisa";
    $res = $db->query( $q );

    $q="delete from veta_tiposvisa_audit";
    $res = $db->query( $q );

    $q="delete from veta_trm";
    $res = $db->query( $q );

    $q="delete from veta_trm_audit";
    $res = $db->query( $q );

    $q="delete from veta_visa";
    $res = $db->query( $q );

    $q="delete from veta_visa_audit";
    $res = $db->query( $q );

    $q="delete from veta_visa_cases_c";
    $res = $db->query( $q );

    $q="delete from veta_visa_opportunities_c";
    $res = $db->query( $q );

    $q="delete from veta_visa_veta_coe_c";
    $res = $db->query( $q );

    $q="delete from veta_visa_veta_serviciocliente_c";
    $res = $db->query( $q );

    $q="delete from veta_visas";
    $res = $db->query( $q );

    $q="delete from veta_visas_audit";
    $res = $db->query( $q );

    $q="delete from veta_visas_contacts_c";
    $res = $db->query( $q );

    $q="delete from veta_visas_leads_c";
    $res = $db->query( $q );
}
