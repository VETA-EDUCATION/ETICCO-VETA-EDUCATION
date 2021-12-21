<?php

require_once( 'tests/unit/Requerimientos.php' );
require_once( 'tests/unit/Utils.php' );

require_once( 'modules/Leads/Lead.php' );
require_once( 'modules/Campaigns/Campaign.php' );
require_once( 'modules/Contacts/Contact.php' );
require_once( 'modules/Opportunities/Opportunity.php' );
require_once( 'modules/Veta_Requerimiento/Veta_Requerimiento.php' );


class SeparacionTest extends \Codeception\Test\Unit {

    private function deletes() {
        $db = DBManagerFactory::getInstance();

        /*$q   = "delete from accounts";
        $res = $db->query( $q );

        $q   = "delete from accounts_audit";
        $res = $db->query( $q );

        $q   = "delete from accounts_bugs";
        $res = $db->query( $q );

        $q   = "delete from accounts_cases";
        $res = $db->query( $q );

        $q   = "delete from accounts_contacts";
        $res = $db->query( $q );

        $q   = "delete from accounts_cstm";
        $res = $db->query( $q );

        $q   = "delete from accounts_opportunities";
        $res = $db->query( $q );*/

        $q   = "DELETE FROM acl_actions";
        $res = $db->query( $q );

        $q   = "DELETE FROM acl_roles";
        $res = $db->query( $q );

        $q   = "DELETE FROM acl_roles_actions";
        $res = $db->query( $q );

        $q   = "DELETE FROM acl_roles_users";
        $res = $db->query( $q );

        /*$q   = "delete from alerts";
        $res = $db->query( $q );

        $q   = "delete from am_projecttemplates";
        $res = $db->query( $q );

        $q   = "delete from am_projecttemplates_audit";
        $res = $db->query( $q );

        $q   = "delete from am_projecttemplates_contacts_1_c";
        $res = $db->query( $q );

        $q   = "delete from am_projecttemplates_project_1_c";
        $res = $db->query( $q );

        $q   = "delete from am_projecttemplates_users_1_c";
        $res = $db->query( $q );

        $q   = "delete from am_tasktemplates";
        $res = $db->query( $q );

        $q   = "delete from am_tasktemplates_am_projecttemplates_c";
        $res = $db->query( $q );

        $q   = "delete from am_tasktemplates_audit";
        $res = $db->query( $q );

        $q   = "delete from aobh_businesshours";
        $res = $db->query( $q );

        $q   = "delete from aod_index";
        $res = $db->query( $q );

        $q   = "delete from aod_index_audit";
        $res = $db->query( $q );

        $q   = "delete from aod_indexevent";
        $res = $db->query( $q );

        $q   = "delete from aod_indexevent_audit";
        $res = $db->query( $q );

        $q   = "delete from aok_knowledge_base_categories";
        $res = $db->query( $q );

        $q   = "delete from aok_knowledge_base_categories_audit";
        $res = $db->query( $q );

        $q   = "delete from aok_knowledgebase";
        $res = $db->query( $q );

        $q   = "delete from aok_knowledgebase_audit";
        $res = $db->query( $q );

        $q   = "delete from aok_knowledgebase_categories";
        $res = $db->query( $q );

        $q   = "delete from aop_case_events";
        $res = $db->query( $q );

        $q   = "delete from aop_case_events_audit";
        $res = $db->query( $q );

        $q   = "delete from aop_case_updates";
        $res = $db->query( $q );

        $q   = "delete from aop_case_updates_audit";
        $res = $db->query( $q );

        $q   = "delete from aor_charts";
        $res = $db->query( $q );

        $q   = "delete from aor_conditions";
        $res = $db->query( $q );

        $q   = "delete from aor_fields";
        $res = $db->query( $q );

        $q   = "delete from aor_reports";
        $res = $db->query( $q );

        $q   = "delete from aor_reports_audit";
        $res = $db->query( $q );

        $q   = "delete from aor_scheduled_reports";
        $res = $db->query( $q );

        $q   = "delete from aos_contracts";
        $res = $db->query( $q );

        $q   = "delete from aos_contracts_audit";
        $res = $db->query( $q );

        $q   = "delete from aos_contracts_documents";
        $res = $db->query( $q );

        $q   = "delete from aos_invoices";
        $res = $db->query( $q );

        $q   = "delete from aos_invoices_audit";
        $res = $db->query( $q );

        $q   = "delete from aos_line_item_groups";
        $res = $db->query( $q );

        $q   = "delete from aos_line_item_groups_audit";
        $res = $db->query( $q );

        $q   = "delete from aos_pdf_templates";
        $res = $db->query( $q );

        $q   = "delete from aos_pdf_templates_audit";
        $res = $db->query( $q );

        $q   = "delete from aos_product_categories";
        $res = $db->query( $q );

        $q   = "delete from aos_product_categories_audit";
        $res = $db->query( $q );

        $q   = "delete from aos_products";
        $res = $db->query( $q );

        $q   = "delete from aos_products_audit";
        $res = $db->query( $q );

        $q   = "delete from aos_products_quotes";
        $res = $db->query( $q );

        $q   = "delete from aos_products_quotes_audit";
        $res = $db->query( $q );

        $q   = "delete from aos_quotes";
        $res = $db->query( $q );

        $q   = "delete from aos_quotes_aos_invoices_c";
        $res = $db->query( $q );

        $q   = "delete from aos_quotes_audit";
        $res = $db->query( $q );

        $q   = "delete from aos_quotes_os_contracts_c";
        $res = $db->query( $q );

        $q   = "delete from aos_quotes_project_c";
        $res = $db->query( $q );

        $q   = "delete from aow_actions";
        $res = $db->query( $q );

        $q   = "delete from aow_conditions";
        $res = $db->query( $q );

        $q   = "delete from aow_processed";
        $res = $db->query( $q );

        $q   = "delete from aow_processed_aow_actions";
        $res = $db->query( $q );

        $q   = "delete from aow_workflow";
        $res = $db->query( $q );

        $q   = "delete from aow_workflow_audit";
        $res = $db->query( $q );

        $q   = "delete from bugs";
        $res = $db->query( $q );

        $q   = "delete from bugs_audit";
        $res = $db->query( $q );*/

        $q   = "DELETE FROM calls";
        $res = $db->query( $q );

        $q   = "DELETE FROM calls_contacts";
        $res = $db->query( $q );

        $q   = "DELETE FROM calls_cstm";
        $res = $db->query( $q );

        $q   = "DELETE FROM calls_leads";
        $res = $db->query( $q );

        /*$q   = "delete from calls_reschedule";
        $res = $db->query( $q );

        $q   = "delete from calls_reschedule_audit";
        $res = $db->query( $q );*/

        $q   = "DELETE FROM calls_users";
        $res = $db->query( $q );

        $q   = "DELETE FROM campaign_log";
        $res = $db->query( $q );

        $q   = "DELETE FROM campaigns";
        $res = $db->query( $q );

        $q   = "DELETE FROM campaigns_audit";
        $res = $db->query( $q );

        $q   = "DELETE FROM campaigns_cstm";
        $res = $db->query( $q );

        /*$q   = "delete from campaign_trkrs";
        $res = $db->query( $q );*/


        $q   = "DELETE FROM cases";
        $res = $db->query( $q );

        $q   = "DELETE FROM cases_audit";
        $res = $db->query( $q );

        $q   = "DELETE FROM cases_cstm";
        $res = $db->query( $q );

        /*$q   = "delete from cases_bugs";
        $res = $db->query( $q );*/

        $q   = "DELETE FROM config";
        $res = $db->query( $q );

        $q   = "DELETE FROM contacts";
        $res = $db->query( $q );

        $q   = "DELETE FROM contacts_audit";
        $res = $db->query( $q );

        $q   = "DELETE FROM contacts_cases";
        $res = $db->query( $q );

        $q   = "DELETE FROM contacts_cstm";
        $res = $db->query( $q );

        $q   = "DELETE FROM contacts_opportunities_1_c";
        $res = $db->query( $q );

        /*$q   = "delete from contacts_users";
        $res = $db->query( $q );

        $q   = "delete from contacts_bugs";
        $res = $db->query( $q );


        $q   = "delete from cron_remove_documents";
        $res = $db->query( $q );

        $q   = "delete from document_revisions";
        $res = $db->query( $q );

        $q   = "delete from documents";
        $res = $db->query( $q );

        $q   = "delete from documents_accounts";
        $res = $db->query( $q );

        $q   = "delete from documents_bugs";
        $res = $db->query( $q );

        $q   = "delete from documents_cases";
        $res = $db->query( $q );

        $q   = "delete from documents_contacts";
        $res = $db->query( $q );

        $q   = "delete from documents_opportunities";
        $res = $db->query( $q );*/

        $q   = "DELETE FROM email_addr_bean_rel";
        $res = $db->query( $q );

        $q   = "DELETE FROM email_addresses";
        $res = $db->query( $q );

        $q   = "DELETE FROM email_addresses_audit";
        $res = $db->query( $q );

        $q   = "DELETE FROM email_cache";
        $res = $db->query( $q );

        $q   = "DELETE FROM emails";
        $res = $db->query( $q );

        $q   = "DELETE FROM emails_beans";
        $res = $db->query( $q );

        $q   = "DELETE FROM emails_email_addr_rel";
        $res = $db->query( $q );

        $q   = "DELETE FROM emails_text";
        $res = $db->query( $q );

        /*$q   = "delete from email_marketing";
        $res = $db->query( $q );

        $q   = "delete from email_marketing_prospect_lists";
        $res = $db->query( $q );

        $q   = "delete from email_templates";
        $res = $db->query( $q );

        $q   = "delete from emailman";
        $res = $db->query( $q );*/

        $q   = "DELETE FROM favorites";
        $res = $db->query( $q );

        $q   = "DELETE FROM folders";
        $res = $db->query( $q );

        /*$q   = "delete from folders_rel";
        $res = $db->query( $q );*/

        $q   = "DELETE FROM folders_subscriptions";
        $res = $db->query( $q );

        /*$q   = "delete from fp_event_locations";
        $res = $db->query( $q );

        $q   = "delete from fp_event_locations_audit";
        $res = $db->query( $q );

        $q   = "delete from fp_event_locations_fp_events_1_c";
        $res = $db->query( $q );

        $q   = "delete from fp_events";
        $res = $db->query( $q );

        $q   = "delete from fp_events_audit";
        $res = $db->query( $q );

        $q   = "delete from fp_events_contacts_c";
        $res = $db->query( $q );

        $q   = "delete from fp_events_fp_event_delegates_1_c";
        $res = $db->query( $q );

        $q   = "delete from fp_events_fp_event_locations_1_c";
        $res = $db->query( $q );

        $q   = "delete from fp_events_leads_1_c";
        $res = $db->query( $q );

        $q   = "delete from fp_events_prospects_1_c";
        $res = $db->query( $q );*/

        $q   = "DELETE FROM inbound_email";
        $res = $db->query( $q );

        /*$q   = "delete from inbound_email_autoreply";
        $res = $db->query( $q );

        $q   = "delete from inbound_email_cache_ts";
        $res = $db->query( $q );

        $q   = "delete from jjwg_address_cache";
        $res = $db->query( $q );

        $q   = "delete from jjwg_address_cache_audit";
        $res = $db->query( $q );

        $q   = "delete from jjwg_areas";
        $res = $db->query( $q );

        $q   = "delete from jjwg_areas_audit";
        $res = $db->query( $q );

        $q   = "delete from jjwg_maps";
        $res = $db->query( $q );

        $q   = "delete from jjwg_maps_audit";
        $res = $db->query( $q );

        $q   = "delete from jjwg_maps_jjwg_areas_c";
        $res = $db->query( $q );

        $q   = "delete from jjwg_maps_jjwg_markers_c";
        $res = $db->query( $q );

        $q   = "delete from jjwg_markers";
        $res = $db->query( $q );

        $q   = "delete from jjwg_markers_audit";
        $res = $db->query( $q );

        $q   = "delete from job_queue";
        $res = $db->query( $q );*/

        $q   = "DELETE FROM leads";
        $res = $db->query( $q );

        $q   = "DELETE FROM leads_audit";
        $res = $db->query( $q );

        $q   = "DELETE FROM leads_cstm";
        $res = $db->query( $q );

        $q   = "DELETE FROM leads_opportunities_1_c";
        $res = $db->query( $q );

        /*$q   = "delete from linked_documents";
        $res = $db->query( $q );*/

        $q   = "DELETE FROM meetings";
        $res = $db->query( $q );

        $q   = "DELETE FROM meetings_contacts";
        $res = $db->query( $q );

        $q   = "DELETE FROM meetings_cstm";
        $res = $db->query( $q );

        $q   = "DELETE FROM meetings_leads";
        $res = $db->query( $q );

        $q   = "DELETE FROM meetings_users";
        $res = $db->query( $q );

        $q   = "DELETE FROM notes";
        $res = $db->query( $q );

        $q   = "DELETE FROM notes_cstm";
        $res = $db->query( $q );

        /*$q   = "delete from oauth2clients";
        $res = $db->query( $q );

        $q   = "delete from oauth2tokens";
        $res = $db->query( $q );

        $q   = "delete from oauth_consumer";
        $res = $db->query( $q );

        $q   = "delete from oauth_nonce";
        $res = $db->query( $q );

        $q   = "delete from oauth_tokens";
        $res = $db->query( $q );*/

        $q   = "DELETE FROM opportunities";
        $res = $db->query( $q );

        $q   = "DELETE FROM opportunities_audit";
        $res = $db->query( $q );

        $q   = "DELETE FROM opportunities_cases_1_c";
        $res = $db->query( $q );

        /*$q   = "delete from opportunities_contacts";
        $res = $db->query( $q );*/

        $q   = "DELETE FROM opportunities_cstm";
        $res = $db->query( $q );

        $q   = "DELETE FROM outbound_email";
        $res = $db->query( $q );

        /*$q   = "delete from outbound_email_audit";
        $res = $db->query( $q );

        $q   = "delete from project";
        $res = $db->query( $q );

        $q   = "delete from project_contacts_1_c";
        $res = $db->query( $q );

        $q   = "delete from project_cstm";
        $res = $db->query( $q );

        $q   = "delete from project_task";
        $res = $db->query( $q );

        $q   = "delete from project_task_audit";
        $res = $db->query( $q );

        $q   = "delete from project_users_1_c";
        $res = $db->query( $q );

        $q   = "delete from projects_accounts";
        $res = $db->query( $q );

        $q   = "delete from projects_bugs";
        $res = $db->query( $q );

        $q   = "delete from projects_cases";
        $res = $db->query( $q );

        $q   = "delete from projects_contacts";
        $res = $db->query( $q );

        $q   = "delete from projects_opportunities";
        $res = $db->query( $q );

        $q   = "delete from projects_products";
        $res = $db->query( $q );*/

        $q   = "DELETE FROM prospect_list_campaigns";
        $res = $db->query( $q );

        $q   = "DELETE FROM prospect_lists";
        $res = $db->query( $q );

        $q   = "DELETE FROM prospect_lists_prospects";
        $res = $db->query( $q );

        /*$q   = "delete from prospects";
        $res = $db->query( $q );

        $q   = "delete from prospects_cstm";
        $res = $db->query( $q );

        $q   = "delete from releases";
        $res = $db->query( $q );

        $q   = "delete from reminders";
        $res = $db->query( $q );

        $q   = "delete from reminders_invitees";
        $res = $db->query( $q );*/

        $q   = "DELETE FROM saved_search";
        $res = $db->query( $q );

        /*$q   = "delete from schedulers";
        $res = $db->query( $q );

        $q   = "delete from securitygroups";
        $res = $db->query( $q );

        $q   = "delete from securitygroups_acl_roles";
        $res = $db->query( $q );

        $q   = "delete from securitygroups_audit";
        $res = $db->query( $q );

        $q   = "delete from securitygroups_default";
        $res = $db->query( $q );

        $q   = "delete from securitygroups_records";
        $res = $db->query( $q );

        $q   = "delete from securitygroups_users";
        $res = $db->query( $q );

        $q   = "delete from spots";
        $res = $db->query( $q );*/

        $q   = "DELETE FROM sugarfeed";
        $res = $db->query( $q );

        /*$q   = "delete from surveyquestionoptions";
        $res = $db->query( $q );

        $q   = "delete from surveyquestionoptions_audit";
        $res = $db->query( $q );

        $q   = "delete from surveyquestionoptions_surveyquestionresponses";
        $res = $db->query( $q );

        $q   = "delete from surveyquestionresponses";
        $res = $db->query( $q );

        $q   = "delete from surveyquestionresponses_audit";
        $res = $db->query( $q );

        $q   = "delete from surveyquestions";
        $res = $db->query( $q );

        $q   = "delete from surveyquestions_audit";
        $res = $db->query( $q );

        $q   = "delete from surveyresponses";
        $res = $db->query( $q );

        $q   = "delete from surveyresponses_audit";
        $res = $db->query( $q );

        $q   = "delete from surveys";
        $res = $db->query( $q );

        $q   = "delete from surveys_audit";
        $res = $db->query( $q );*/

        $q   = "DELETE FROM tasks";
        $res = $db->query( $q );

        $q   = "DELETE FROM tasks_cstm";
        $res = $db->query( $q );

        /*$q   = "delete from templatesectionline";
        $res = $db->query( $q );*/

        $q   = "DELETE FROM tracker";
        $res = $db->query( $q );


        $q   = "DELETE FROM user_preferences";
        $res = $db->query( $q );

        $q   = "DELETE FROM users";
        $res = $db->query( $q );

        $q   = "DELETE FROM users_password_link";
        $res = $db->query( $q );

        $q   = "DELETE FROM vcals";
        $res = $db->query( $q );

        /*$q   = "delete from veta_abntaxfile";
        $res = $db->query( $q );

        $q   = "delete from veta_abntaxfile_audit";
        $res = $db->query( $q );*/

        $q   = "DELETE FROM veta_abono";
        $res = $db->query( $q );

        $q   = "DELETE FROM veta_abono_audit";
        $res = $db->query( $q );

        $q   = "DELETE FROM veta_abono_veta_recibo_c";
        $res = $db->query( $q );

        $q   = "DELETE FROM veta_aplicacion";
        $res = $db->query( $q );

        $q   = "DELETE FROM veta_aplicacion_audit";
        $res = $db->query( $q );

        $q   = "DELETE FROM veta_aplicacion_cases_c";
        $res = $db->query( $q );

        $q   = "DELETE FROM veta_aplicacion_cstm";
        $res = $db->query( $q );

        $q   = "DELETE FROM veta_aplicacion_opportunities_c";
        $res = $db->query( $q );

        /*$q   = "delete from veta_ciudadania";
        $res = $db->query( $q );

        $q   = "delete from veta_ciudadania_audit";
        $res = $db->query( $q );

        $q   = "delete from veta_ciudadania_contacts_c";
        $res = $db->query( $q );

        $q   = "delete from veta_ciudadania_leads_c";
        $res = $db->query( $q );*/

        $q   = "DELETE FROM veta_coe";
        $res = $db->query( $q );

        $q   = "DELETE FROM veta_coe_audit";
        $res = $db->query( $q );

        $q   = "DELETE FROM veta_coe_cases_c";
        $res = $db->query( $q );

        $q   = "DELETE FROM veta_coe_opportunities_c";
        $res = $db->query( $q );

        $q   = "DELETE FROM veta_coe_veta_aplicacion_c";
        $res = $db->query( $q );

        $q   = "DELETE FROM veta_coe_veta_liquidacion_c";
        $res = $db->query( $q );

        $q   = "DELETE FROM veta_college";
        $res = $db->query( $q );

        $q   = "DELETE FROM veta_college_audit";
        $res = $db->query( $q );

        $q   = "DELETE FROM veta_correccioncoe";
        $res = $db->query( $q );

        $q   = "DELETE FROM veta_correccioncoe_audit";
        $res = $db->query( $q );

        $q   = "DELETE FROM veta_correccioncoe_veta_coe_c";
        $res = $db->query( $q );

        $q   = "DELETE FROM veta_curso";
        $res = $db->query( $q );

        $q   = "DELETE FROM veta_curso_audit";
        $res = $db->query( $q );

        $q   = "DELETE FROM veta_detallepresupuesto";
        $res = $db->query( $q );

        $q   = "DELETE FROM veta_detallepresupuesto_audit";
        $res = $db->query( $q );

        $q   = "DELETE FROM veta_detallepresupuesto_veta_presupuesto_c";
        $res = $db->query( $q );

        $q   = "DELETE FROM veta_detallerecibo";
        $res = $db->query( $q );

        $q   = "DELETE FROM veta_detallerecibo_audit";
        $res = $db->query( $q );

        $q   = "DELETE FROM veta_detallerecibo_veta_recibo_c";
        $res = $db->query( $q );

        $q   = "DELETE FROM veta_detallereciboitem";
        $res = $db->query( $q );

        $q   = "DELETE FROM veta_detallereciboitem_audit";
        $res = $db->query( $q );

        $q   = "DELETE FROM veta_detallereciboitem_veta_detallerecibo_c";
        $res = $db->query( $q );

        $q   = "DELETE FROM veta_detallereciboitem_veta_recibo_c";
        $res = $db->query( $q );

        /*$q   = "delete from veta_hijo";
        $res = $db->query( $q );

        $q   = "delete from veta_hijo_audit";
        $res = $db->query( $q );

        $q   = "delete from veta_hijo_contacts_c";
        $res = $db->query( $q );

        $q   = "delete from veta_informacionacademica";
        $res = $db->query( $q );

        $q   = "delete from veta_informacionacademica_audit";
        $res = $db->query( $q );

        $q   = "delete from veta_informacionacademica_contacts_c";
        $res = $db->query( $q );

        $q   = "delete from veta_informacionacademica_leads_c";
        $res = $db->query( $q );

        $q   = "delete from veta_informacionlaboral";
        $res = $db->query( $q );

        $q   = "delete from veta_informacionlaboral_audit";
        $res = $db->query( $q );

        $q   = "delete from veta_informacionlaboral_contacts_c";
        $res = $db->query( $q );

        $q   = "delete from veta_informacionlaboral_leads_c";
        $res = $db->query( $q );*/

        $q   = "DELETE FROM veta_liquidacion";
        $res = $db->query( $q );

        $q   = "DELETE FROM veta_liquidacion_audit";
        $res = $db->query( $q );

        /*$q   = "delete from veta_liquidacion_cases_c";
        $res = $db->query( $q );

        $q   = "delete from veta_liquidacion_opportunities_c";
        $res = $db->query( $q );*/

        $q   = "DELETE FROM veta_liquidacion_veta_loo_c";
        $res = $db->query( $q );

        $q   = "DELETE FROM veta_loo";
        $res = $db->query( $q );

        $q   = "DELETE FROM veta_loo_audit";
        $res = $db->query( $q );

        $q   = "DELETE FROM veta_loo_cases_c";
        $res = $db->query( $q );

        $q   = "DELETE FROM veta_loo_veta_aplicacion_c";
        $res = $db->query( $q );

        $q   = "DELETE FROM veta_loocorreccion";
        $res = $db->query( $q );

        $q   = "DELETE FROM veta_loocorreccion_audit";
        $res = $db->query( $q );

        $q   = "DELETE FROM veta_loocorreccion_veta_loo_c";
        $res = $db->query( $q );

        $q   = "DELETE FROM veta_notificacionpagocolegio";
        $res = $db->query( $q );

        /*$q   = "delete from veta_notificacionpagocolegio_audit";
        $res = $db->query( $q );*/

        $q   = "DELETE FROM veta_notificacionpagocolegio_veta_pagocolegios_c";
        $res = $db->query( $q );

        /*$q   = "delete from veta_otrosnombres";
        $res = $db->query( $q );

        $q   = "delete from veta_otrosnombres_audit";
        $res = $db->query( $q );

        $q   = "delete from veta_otrosnombres_contacts_c";
        $res = $db->query( $q );

        $q   = "delete from veta_otrosnombres_leads_c";
        $res = $db->query( $q );*/

        $q   = "DELETE FROM veta_pagocolegios";
        $res = $db->query( $q );

        $q   = "DELETE FROM veta_pagocolegios_audit";
        $res = $db->query( $q );

        $q   = "DELETE FROM veta_pagocolegios_opportunities_c";
        $res = $db->query( $q );

        $q   = "DELETE FROM veta_pagos";
        $res = $db->query( $q );

        /*$q   = "delete from veta_pagos_audit";
        $res = $db->query( $q );*/

        $q   = "DELETE FROM veta_pagos_veta_liquidacion_c";
        $res = $db->query( $q );

        /*$q   = "delete from veta_pasaporte";
        $res = $db->query( $q );

        $q   = "delete from veta_pasaporte_audit";
        $res = $db->query( $q );

        $q   = "delete from veta_pasaporte_contacts_c";
        $res = $db->query( $q );

        $q   = "delete from veta_pasaporte_leads_c";
        $res = $db->query( $q );*/

        $q   = "DELETE FROM veta_presupuesto";
        $res = $db->query( $q );

        $q   = "DELETE FROM veta_presupuesto_audit";
        $res = $db->query( $q );

        $q   = "DELETE FROM veta_presupuesto_contacts_c";
        $res = $db->query( $q );

        $q   = "DELETE FROM veta_presupuesto_emails_c";
        $res = $db->query( $q );

        $q   = "DELETE FROM veta_presupuesto_leads_c";
        $res = $db->query( $q );

        $q   = "DELETE FROM veta_recibo";
        $res = $db->query( $q );

        $q   = "DELETE FROM veta_recibo_audit";
        $res = $db->query( $q );

        $q   = "DELETE FROM veta_recibo_contacts_c";
        $res = $db->query( $q );

        /*$q   = "delete from veta_recibo_cstm";
        $res = $db->query( $q );*/

        $q   = "DELETE FROM veta_recibo_emails_c";
        $res = $db->query( $q );

        $q   = "DELETE FROM veta_recibo_leads_c";
        $res = $db->query( $q );

        $q   = "DELETE FROM veta_recibo_opportunities_c";
        $res = $db->query( $q );

        $q   = "DELETE FROM veta_recibo_veta_presupuesto_c";
        $res = $db->query( $q );

        $q   = "DELETE FROM veta_requerimiento";
        $res = $db->query( $q );

        $q   = "DELETE FROM veta_requerimiento_audit";
        $res = $db->query( $q );

        $q   = "DELETE FROM veta_requerimiento_contacts_c";
        $res = $db->query( $q );

        $q   = "DELETE FROM veta_requerimiento_leads_c";
        $res = $db->query( $q );

        $q   = "DELETE FROM veta_requerimiento_veta_presupuesto_c";
        $res = $db->query( $q );

        $q   = "DELETE FROM veta_requerimiento_veta_recibo_c";
        $res = $db->query( $q );

        $q   = "DELETE FROM veta_seguro";
        $res = $db->query( $q );

        $q   = "DELETE FROM veta_seguro_audit";
        $res = $db->query( $q );

        $q   = "DELETE FROM veta_serviciocliente";
        $res = $db->query( $q );

        $q   = "DELETE FROM veta_serviciocliente_audit";
        $res = $db->query( $q );

        $q   = "DELETE FROM veta_serviciocliente_opportunities_c";
        $res = $db->query( $q );

        /*$q   = "delete from veta_serviciosadicionales";
        $res = $db->query( $q );

        $q   = "delete from veta_serviciosadicionales_audit";
        $res = $db->query( $q );

        $q   = "delete from veta_serviciosadicionales_contacts_c";
        $res = $db->query( $q );

        $q   = "delete from veta_serviciosadicionales_leads_c";
        $res = $db->query( $q );

        $q   = "delete from veta_solvenciaeconomica";
        $res = $db->query( $q );

        $q   = "delete from veta_solvenciaeconomica_audit";
        $res = $db->query( $q );

        $q   = "delete from veta_solvenciaeconomica_contacts_c";
        $res = $db->query( $q );

        $q   = "delete from veta_solvenciaeconomica_leads_c";
        $res = $db->query( $q );*/

        $q   = "DELETE FROM veta_tiposvisa";
        $res = $db->query( $q );

        $q   = "DELETE FROM veta_tiposvisa_audit";
        $res = $db->query( $q );

        $q   = "DELETE FROM veta_trm";
        $res = $db->query( $q );

        $q   = "DELETE FROM veta_trm_audit";
        $res = $db->query( $q );

        $q   = "DELETE FROM veta_visa";
        $res = $db->query( $q );

        $q   = "DELETE FROM veta_visa_audit";
        $res = $db->query( $q );

        $q   = "DELETE FROM veta_visa_cases_c";
        $res = $db->query( $q );

        $q   = "DELETE FROM veta_visa_opportunities_c";
        $res = $db->query( $q );

        $q   = "DELETE FROM veta_visa_veta_coe_c";
        $res = $db->query( $q );

        $q   = "DELETE FROM veta_visa_veta_serviciocliente_c";
        $res = $db->query( $q );

        $q   = "DELETE FROM veta_visas";
        $res = $db->query( $q );

        $q   = "DELETE FROM veta_visas_audit";
        $res = $db->query( $q );

        $q   = "DELETE FROM veta_visas_contacts_c";
        $res = $db->query( $q );

        $q   = "DELETE FROM veta_visas_leads_c";
        $res = $db->query( $q );
    }

    private function updates_1( $bd2 = 'vetacrm2' ) {

        $db = DBManagerFactory::getInstance();

        $sql1  = "UPDATE $bd2.leads_cstm SET fecha_expiracion_visa_c = '0001-01-01' WHERE fecha_expiracion_visa_c IS NULL OR fecha_expiracion_visa_c = 0";
        $sql2  = "UPDATE $bd2.leads SET birthdate = '0001-01-01' WHERE birthdate IS NULL OR birthdate = 0";
        $sql3  = "UPDATE $bd2.opportunities SET date_closed = '0001-01-01' WHERE date_closed IS NULL OR date_closed = 0";
        $sql4  = "UPDATE $bd2.veta_aplicacion SET fecha_expiracion_visa = '0001-01-01' WHERE fecha_expiracion_visa IS NULL OR fecha_expiracion_visa = 0";
        $sql5  = "UPDATE $bd2.veta_coe SET fecha_expiracion_visa = '0001-01-01' WHERE fecha_expiracion_visa IS NULL OR fecha_expiracion_visa = 0";
        $sql6  = "UPDATE $bd2.veta_liquidacion SET fecha_expiracion_visa = '0001-01-01' WHERE fecha_expiracion_visa IS NULL OR fecha_expiracion_visa = 0";
        $sql7  = "UPDATE $bd2.veta_loo SET fecha_expiracion_visa = '0001-01-01' WHERE fecha_expiracion_visa IS NULL OR fecha_expiracion_visa = 0";
        $sql8  = "UPDATE $bd2.veta_pagos SET fecha_expiracion_visa = '0001-01-01' WHERE fecha_expiracion_visa IS NULL OR fecha_expiracion_visa = 0";
        $sql9  = "UPDATE $bd2.veta_serviciocliente SET fecha_expiracion_visa = '0001-01-01' WHERE fecha_expiracion_visa IS NULL OR fecha_expiracion_visa = 0";
        $sql10 = "UPDATE $bd2.veta_visa SET fecha_expiracion_visa = '0001-01-01' WHERE fecha_expiracion_visa IS NULL OR fecha_expiracion_visa = 0";
        $sql11 = "UPDATE $bd2.opportunities_cstm SET fecha_cierre_c = '0001-01-01' WHERE fecha_cierre_c IS NULL OR fecha_cierre_c = 0";

        $res1  = $db->query( $sql1 );
        $res2  = $db->query( $sql2 );
        $res3  = $db->query( $sql3 );
        $res4  = $db->query( $sql4 );
        $res5  = $db->query( $sql5 );
        $res6  = $db->query( $sql6 );
        $res7  = $db->query( $sql7 );
        $res8  = $db->query( $sql8 );
        $res9  = $db->query( $sql9 );
        $res10 = $db->query( $sql10 );
        $res11 = $db->query( $sql11 );

        $this->assertNotNull( $res1 );
        $this->assertNotNull( $res2 );
        $this->assertNotNull( $res3 );
        $this->assertNotNull( $res4 );
        $this->assertNotNull( $res5 );
        $this->assertNotNull( $res6 );
        $this->assertNotNull( $res7 );
        $this->assertNotNull( $res8 );
        $this->assertNotNull( $res9 );
        $this->assertNotNull( $res10 );
        $this->assertNotNull( $res11 );

        $this->assertTrue( $res1 );
        $this->assertTrue( $res2 );
        $this->assertTrue( $res3 );
        $this->assertTrue( $res4 );
        $this->assertTrue( $res5 );
        $this->assertTrue( $res6 );
        $this->assertTrue( $res7 );
        $this->assertTrue( $res8 );
        $this->assertTrue( $res9 );
        $this->assertTrue( $res10 );
        $this->assertTrue( $res11 );

    }

    private function inserts( $bd2 = 'vetacrm2' ) {

        $db = DBManagerFactory::getInstance();

        $sql1   = "INSERT INTO acl_actions SELECT * FROM $bd2.acl_actions";
        $sql2   = "INSERT INTO acl_roles SELECT * FROM $bd2.acl_roles";
        $sql3   = "INSERT INTO acl_roles_actions SELECT * FROM $bd2.acl_roles_actions";
        $sql4   = "INSERT INTO acl_roles_users SELECT * FROM $bd2.acl_roles_users";
        $sql5   = "INSERT INTO calls SELECT * FROM $bd2.calls";
        $sql6   = "INSERT INTO calls_contacts SELECT * FROM $bd2.calls_contacts";
        $sql7   = "INSERT INTO calls_cstm SELECT * FROM $bd2.calls_cstm";
        $sql8   = "INSERT INTO calls_leads SELECT * FROM $bd2.calls_leads";
        $sql9   = "INSERT INTO calls_users SELECT * FROM $bd2.calls_users";
        $sql10  = "INSERT INTO campaign_log SELECT * FROM $bd2.campaign_log";
        $sql11  = "INSERT INTO campaigns SELECT * FROM $bd2.campaigns";
        $sql12  = "INSERT INTO campaigns_audit SELECT * FROM $bd2.campaigns_audit";
        $sql13  = "INSERT INTO campaigns_cstm SELECT * FROM $bd2.campaigns_cstm";
        $sql14  = "INSERT INTO cases SELECT * FROM $bd2.cases";
        $sql15  = "INSERT INTO cases_audit SELECT * FROM $bd2.cases_audit";
        $sql16  = "INSERT INTO cases_cstm SELECT * FROM $bd2.cases_cstm";
        $sql17  = "INSERT INTO config SELECT * FROM $bd2.config";
        $sql18  = "INSERT INTO contacts SELECT * FROM $bd2.contacts";
        $sql19  = "INSERT INTO contacts_audit SELECT * FROM $bd2.contacts_audit";
        $sql20  = "INSERT INTO contacts_cases SELECT * FROM $bd2.contacts_cases";
        $sql21  = "INSERT INTO contacts_opportunities_1_c SELECT * FROM $bd2.contacts_opportunities_1_c";
        $sql22  = "INSERT INTO email_addr_bean_rel SELECT * FROM $bd2.email_addr_bean_rel";
        $sql23  = "INSERT INTO email_addresses SELECT * FROM $bd2.email_addresses";
        $sql24  = "INSERT INTO email_addresses_audit SELECT * FROM $bd2.email_addresses_audit";
        $sql25  = "INSERT INTO email_cache SELECT * FROM $bd2.email_cache";
        $sql26  = "INSERT INTO emails SELECT * FROM $bd2.emails";
        $sql27  = "INSERT INTO emails_beans SELECT * FROM $bd2.emails_beans";
        $sql28  = "INSERT INTO emails_email_addr_rel SELECT * FROM $bd2.emails_email_addr_rel";
        $sql29  = "INSERT INTO emails_text SELECT * FROM $bd2.emails_text";
        $sql30  = "INSERT INTO favorites SELECT * FROM $bd2.favorites";
        $sql31  = "INSERT INTO folders SELECT * FROM $bd2.folders";
        $sql32  = "INSERT INTO folders_subscriptions SELECT * FROM $bd2.folders_subscriptions";
        $sql33  = "INSERT INTO inbound_email SELECT * FROM $bd2.inbound_email";
        $sql34  = "INSERT INTO leads SELECT * FROM $bd2.leads";
        $sql35  = "INSERT INTO leads_audit SELECT * FROM $bd2.leads_audit";
        $sql36  = "INSERT INTO leads_cstm SELECT * FROM $bd2.leads_cstm";
        $sql37  = "INSERT INTO leads_opportunities_1_c SELECT * FROM $bd2.leads_opportunities_1_c";
        $sql38  = "INSERT INTO meetings SELECT * FROM $bd2.meetings";
        $sql39  = "INSERT INTO meetings_contacts SELECT * FROM $bd2.meetings_contacts";
        $sql40  = "INSERT INTO meetings_cstm SELECT * FROM $bd2.meetings_cstm";
        $sql41  = "INSERT INTO meetings_leads SELECT * FROM $bd2.meetings_leads";
        $sql42  = "INSERT INTO meetings_users SELECT * FROM $bd2.meetings_users";
        $sql43  = "INSERT INTO notes SELECT * FROM $bd2.notes";
        $sql44  = "INSERT INTO notes_cstm SELECT * FROM $bd2.notes_cstm";
        $sql45  = "INSERT INTO opportunities SELECT * FROM $bd2.opportunities";
        $sql46  = "INSERT INTO opportunities_audit SELECT * FROM $bd2.opportunities_audit";
        $sql47  = "INSERT INTO opportunities_cases_1_c SELECT * FROM $bd2.opportunities_cases_1_c";
        $sql48  = "INSERT INTO outbound_email SELECT * FROM $bd2.outbound_email";
        $sql49  = "INSERT INTO prospect_list_campaigns SELECT * FROM $bd2.prospect_list_campaigns";
        $sql50  = "INSERT INTO prospect_lists SELECT * FROM $bd2.prospect_lists";
        $sql51  = "INSERT INTO prospect_lists_prospects SELECT * FROM $bd2.prospect_lists_prospects";
        $sql52  = "INSERT INTO saved_search SELECT * FROM $bd2.saved_search";
        $sql53  = "INSERT INTO sugarfeed SELECT * FROM $bd2.sugarfeed";
        $sql54  = "INSERT INTO tasks SELECT * FROM $bd2.tasks";
        $sql55  = "INSERT INTO tasks_cstm SELECT * FROM $bd2.tasks_cstm";
        $sql56  = "INSERT INTO tracker SELECT * FROM $bd2.tracker";
        $sql57  = "INSERT INTO user_preferences SELECT * FROM $bd2.user_preferences";
        $sql58  = "INSERT INTO users SELECT * FROM $bd2.users";
        $sql59  = "INSERT INTO users_password_link SELECT * FROM $bd2.users_password_link";
        $sql60  = "INSERT INTO vcals SELECT * FROM $bd2.vcals";
        $sql61  = "INSERT INTO veta_abono SELECT * FROM $bd2.veta_abono";
        $sql62  = "INSERT INTO veta_abono_audit SELECT * FROM $bd2.veta_abono_audit";
        $sql63  = "INSERT INTO veta_abono_veta_recibo_c SELECT * FROM $bd2.veta_abono_veta_recibo_c";
        $sql64  = "INSERT INTO veta_aplicacion SELECT * FROM $bd2.veta_aplicacion";
        $sql65  = "INSERT INTO veta_aplicacion_audit SELECT * FROM $bd2.veta_aplicacion_audit";
        $sql66  = "INSERT INTO veta_aplicacion_cases_c SELECT * FROM $bd2.veta_aplicacion_cases_c";
        $sql67  = "INSERT INTO veta_aplicacion_cstm SELECT * FROM $bd2.veta_aplicacion_cstm";
        $sql68  = "INSERT INTO veta_aplicacion_opportunities_c SELECT * FROM $bd2.veta_aplicacion_opportunities_c";
        $sql69  = "INSERT INTO veta_coe SELECT * FROM $bd2.veta_coe";
        $sql70  = "INSERT INTO veta_coe_audit SELECT * FROM $bd2.veta_coe_audit";
        $sql71  = "INSERT INTO veta_coe_cases_c SELECT * FROM $bd2.veta_coe_cases_c";
        $sql72  = "INSERT INTO veta_coe_opportunities_c SELECT * FROM $bd2.veta_coe_opportunities_c";
        $sql73  = "INSERT INTO veta_coe_veta_aplicacion_c SELECT * FROM $bd2.veta_coe_veta_aplicacion_c";
        $sql74  = "INSERT INTO veta_coe_veta_liquidacion_c SELECT * FROM $bd2.veta_coe_veta_liquidacion_c";
        $sql75  = "INSERT INTO veta_college SELECT * FROM $bd2.veta_college";
        $sql76  = "INSERT INTO veta_college_audit SELECT * FROM $bd2.veta_college_audit";
        $sql77  = "INSERT INTO veta_correccioncoe SELECT * FROM $bd2.veta_correccioncoe";
        $sql78  = "INSERT INTO veta_correccioncoe_audit SELECT * FROM $bd2.veta_correccioncoe_audit";
        $sql79  = "INSERT INTO veta_correccioncoe_veta_coe_c SELECT * FROM $bd2.veta_correccioncoe_veta_coe_c";
        $sql80  = "INSERT INTO veta_curso SELECT * FROM $bd2.veta_curso";
        $sql81  = "INSERT INTO veta_curso_audit SELECT * FROM $bd2.veta_curso_audit";
        $sql82  = "INSERT INTO veta_detallepresupuesto SELECT * FROM $bd2.veta_detallepresupuesto";
        $sql83  = "INSERT INTO veta_detallepresupuesto_audit SELECT * FROM $bd2.veta_detallepresupuesto_audit";
        $sql84  = "INSERT INTO veta_detallepresupuesto_veta_presupuesto_c SELECT * FROM $bd2.veta_detallepresupuesto_veta_presupuesto_c";
        $sql85  = "INSERT INTO veta_detallerecibo SELECT * FROM $bd2.veta_detallerecibo";
        $sql86  = "INSERT INTO veta_detallerecibo_audit SELECT * FROM $bd2.veta_detallerecibo_audit";
        $sql87  = "INSERT INTO veta_detallereciboitem SELECT * FROM $bd2.veta_detallereciboitem";
        $sql88  = "INSERT INTO veta_detallereciboitem_audit SELECT * FROM $bd2.veta_detallereciboitem_audit";
        $sql89  = "INSERT INTO veta_detallereciboitem_veta_detallerecibo_c SELECT * FROM $bd2.veta_detallereciboitem_veta_detallerecibo_c";
        $sql90  = "INSERT INTO veta_detallereciboitem_veta_recibo_c SELECT * FROM $bd2.veta_detallereciboitem_veta_recibo_c";
        $sql91  = "INSERT INTO veta_detallerecibo_veta_recibo_c SELECT * FROM $bd2.veta_detallerecibo_veta_recibo_c";
        $sql92  = "INSERT INTO veta_liquidacion SELECT * FROM $bd2.veta_liquidacion";
        $sql93  = "INSERT INTO veta_liquidacion_audit SELECT * FROM $bd2.veta_liquidacion_audit";
        $sql94  = "INSERT INTO veta_liquidacion_veta_loo_c SELECT * FROM $bd2.veta_liquidacion_veta_loo_c";
        $sql95  = "INSERT INTO veta_loo SELECT * FROM $bd2.veta_loo";
        $sql96  = "INSERT INTO veta_loo_audit SELECT * FROM $bd2.veta_loo_audit";
        $sql97  = "INSERT INTO veta_loo_cases_c SELECT * FROM $bd2.veta_loo_cases_c";
        $sql98  = "INSERT INTO veta_loocorreccion SELECT * FROM $bd2.veta_loocorreccion";
        $sql99  = "INSERT INTO veta_loocorreccion_audit SELECT * FROM $bd2.veta_loocorreccion_audit";
        $sql100 = "INSERT INTO veta_loocorreccion_veta_loo_c SELECT * FROM $bd2.veta_loocorreccion_veta_loo_c";
        $sql101 = "INSERT INTO veta_loo_veta_aplicacion_c SELECT * FROM $bd2.veta_loo_veta_aplicacion_c";
        $sql102 = "INSERT INTO veta_notificacionpagocolegio SELECT * FROM $bd2.veta_notificacionpagocolegio";
        $sql103 = "INSERT INTO veta_notificacionpagocolegio_veta_pagocolegios_c SELECT * FROM $bd2.veta_notificacionpagocolegio_veta_pagocolegios_c";
        $sql104 = "INSERT INTO veta_pagocolegios SELECT * FROM $bd2.veta_pagocolegios";
        $sql105 = "INSERT INTO veta_pagocolegios_audit SELECT * FROM $bd2.veta_pagocolegios_audit";
        $sql106 = "INSERT INTO veta_pagocolegios_opportunities_c SELECT * FROM $bd2.veta_pagocolegios_opportunities_c";
        $sql107 = "INSERT INTO veta_pagos SELECT * FROM $bd2.veta_pagos";
        $sql108 = "INSERT INTO veta_pagos_veta_liquidacion_c SELECT * FROM $bd2.veta_pagos_veta_liquidacion_c";
        $sql109 = "INSERT INTO veta_presupuesto_audit SELECT * FROM $bd2.veta_presupuesto_audit";
        $sql110 = "INSERT INTO veta_presupuesto_contacts_c SELECT * FROM $bd2.veta_presupuesto_contacts_c";
        $sql111 = "INSERT INTO veta_presupuesto_emails_c SELECT * FROM $bd2.veta_presupuesto_emails_c";
        $sql112 = "INSERT INTO veta_presupuesto_leads_c SELECT * FROM $bd2.veta_presupuesto_leads_c";
        $sql113 = "INSERT INTO veta_recibo_audit SELECT * FROM $bd2.veta_recibo_audit";
        $sql114 = "INSERT INTO veta_recibo_contacts_c SELECT * FROM $bd2.veta_recibo_contacts_c";
        $sql115 = "INSERT INTO veta_recibo_emails_c SELECT * FROM $bd2.veta_recibo_emails_c";
        $sql116 = "INSERT INTO veta_recibo_leads_c SELECT * FROM $bd2.veta_recibo_leads_c";
        $sql117 = "INSERT INTO veta_recibo_opportunities_c SELECT * FROM $bd2.veta_recibo_opportunities_c";
        $sql118 = "INSERT INTO veta_recibo_veta_presupuesto_c SELECT * FROM $bd2.veta_recibo_veta_presupuesto_c";
        $sql119 = "INSERT INTO veta_seguro SELECT * FROM $bd2.veta_seguro";
        $sql120 = "INSERT INTO veta_seguro_audit SELECT * FROM $bd2.veta_seguro_audit";
        $sql121 = "INSERT INTO veta_serviciocliente SELECT * FROM $bd2.veta_serviciocliente";
        $sql122 = "INSERT INTO veta_serviciocliente_audit SELECT * FROM $bd2.veta_serviciocliente_audit";
        $sql123 = "INSERT INTO veta_serviciocliente_opportunities_c SELECT * FROM $bd2.veta_serviciocliente_opportunities_c";
        $sql124 = "INSERT INTO veta_tiposvisa SELECT * FROM $bd2.veta_tiposvisa";
        $sql125 = "INSERT INTO veta_tiposvisa_audit SELECT * FROM $bd2.veta_tiposvisa_audit";
        $sql126 = "INSERT INTO veta_trm SELECT * FROM $bd2.veta_trm";
        $sql127 = "INSERT INTO veta_visa SELECT * FROM $bd2.veta_visa";
        $sql128 = "INSERT INTO veta_visa_audit SELECT * FROM $bd2.veta_visa_audit";
        $sql129 = "INSERT INTO veta_visa_cases_c SELECT * FROM $bd2.veta_visa_cases_c";
        $sql130 = "INSERT INTO veta_visa_opportunities_c SELECT * FROM $bd2.veta_visa_opportunities_c";
        $sql131 = "INSERT INTO veta_visas SELECT * FROM $bd2.veta_visas";
        $sql132 = "INSERT INTO veta_visas_contacts_c SELECT * FROM $bd2.veta_visas_contacts_c";
        $sql133 = "INSERT INTO veta_visas_leads_c SELECT * FROM $bd2.veta_visas_leads_c";
        $sql134 = "INSERT INTO veta_visa_veta_coe_c SELECT * FROM $bd2.veta_visa_veta_coe_c";
        $sql135 = "INSERT INTO veta_visa_veta_serviciocliente_c SELECT * FROM $bd2.veta_visa_veta_serviciocliente_c";
        $sql136 = "INSERT INTO contacts_cstm (id_c,jjwg_maps_lng_c,jjwg_maps_lat_c,jjwg_maps_geocode_status_c,jjwg_maps_address_c,anos_sin_estudiar_c,celular_autralia_c,celular_contacto_emergencia_c,ciudad_c,ciudad_nacimiento_c,contacto_emergencia_c,cuenta_bancaria_australia_c,departamento_c,departamento_nacimiento_c,direccion_c,edad_c,edad_conyuge_c,email_contacto_emergencia_c,estado_civil_c,genero_c,identificacion_australia_c,institucion_australia_c,nivel_ingles_c,nombre_conyuge_c,ocupacion_conyuge_c,pais_c,pais_nacimiento_c,pasaporte_c,relacion_contacto_emergencia_c,viajes_realizados_c,visa_negada_c,presupuesto_c,currency_id,fecha_viaje_c,carrera_universitaria_c,trabajo_actual_c,fecha_expiracion_visa_c,nacimiento_conyuge_c,fecha_ultimo_contacto_c,fecha_proximo_contacto_c) SELECT  id_c,jjwg_maps_lng_c,jjwg_maps_lat_c,jjwg_maps_geocode_status_c,jjwg_maps_address_c,anos_sin_estudiar_c,celular_autralia_c,celular_contacto_emergencia_c,ciudad_c,ciudad_nacimiento_c,contacto_emergencia_c,cuenta_bancaria_australia_c,departamento_c,departamento_nacimiento_c,direccion_c,edad_c,edad_conyuge_c,email_contacto_emergencia_c,estado_civil_c,genero_c,identificacion_australia_c,institucion_australia_c,nivel_ingles_c,nombre_conyuge_c,ocupacion_conyuge_c,pais_c,pais_nacimiento_c,pasaporte_c,relacion_contacto_emergencia_c,viajes_realizados_c,visa_negada_c,presupuesto_c,currency_id,fecha_viaje_c,carrera_universitaria_c,trabajo_actual_c,fecha_expiracion_visa_c,nacimiento_conyuge_c,fecha_ultimo_contacto_c,fecha_proximo_contacto_c FROM $bd2.contacts_cstm";
        $sql137 = "INSERT INTO opportunities_cstm (id_c,jjwg_maps_lng_c,jjwg_maps_lat_c,jjwg_maps_geocode_status_c,jjwg_maps_address_c,comision_c,estado_recoleccion_documento_c,fecha_apertura_cuenta_bancar_c,fecha_aplicacion_visa_c,fecha_c,fecha_firma_contrato_c,fecha_otorgamiento_visa_c,fecha_solicitud_pago_contado_c,monto_dolares_australianos_c,porcentaje_pago_c,revision_c,saldo_pendiente_pago_c,estado_cartera_c,estado_gestion_comercial_c,estado_servicio_al_cliente_c,estado_visas_c,estado_admisiones_c,estado_pago_institucion_c,pendiente_cartera_c,pendiente_pago_colegios_c,fecha_ultimo_contacto_c,fecha_proximo_contacto_c,fecha_cierre_c,fecha_presupuesto_c,user_id_c,user_id1_c,user_id2_c)  SELECT  id_c,jjwg_maps_lng_c,jjwg_maps_lat_c,jjwg_maps_geocode_status_c,jjwg_maps_address_c,comision_c,estado_recoleccion_documento_c,fecha_apertura_cuenta_bancar_c,fecha_aplicacion_visa_c,fecha_c,fecha_firma_contrato_c,fecha_otorgamiento_visa_c,fecha_solicitud_pago_contado_c,monto_dolares_australianos_c,porcentaje_pago_c,revision_c,saldo_pendiente_pago_c,estado_cartera_c,estado_gestion_comercial_c,estado_servicio_al_cliente_c,estado_visas_c,estado_admisiones_c,estado_pago_institucion_c,pendiente_cartera_c,pendiente_pago_colegios_c,fecha_ultimo_contacto_c,fecha_proximo_contacto_c,fecha_cierre_c,fecha_presupuesto_c,user_id_c,user_id1_c,user_id2_c FROM $bd2.opportunities_cstm";
        $sql138 = "INSERT INTO veta_presupuesto (id,name,date_entered,date_modified,modified_user_id,created_by,description,deleted,assigned_user_id,pais,departamento,ciudad,primer_pago,currency_id,subtotal,gran_total,aud_usd,usd_cop,usd,pesos,total_visa,veta_tiposvisa_id_c,examen_medico,seguro,mxn,clp,usd_mxn,clp_usd,asegurador,duracion,tipo_seguro,descuento)  SELECT id,name,date_entered,date_modified,modified_user_id,created_by,description,deleted,assigned_user_id,pais,departamento,ciudad,primer_pago,currency_id,subtotal,gran_total,aud_usd,usd_cop,usd,pesos,total_visa,veta_tiposvisa_id_c,examen_medico,seguro,mxn,clp,usd_mxn,clp_usd,asegurador,duracion,tipo_seguro,0 as descuento FROM $bd2.veta_presupuesto";
        $sql139 = "INSERT INTO veta_recibo (id,name,date_entered,date_modified,modified_user_id,created_by,description,deleted,assigned_user_id,pais,departamento,ciudad,primer_pago,currency_id,subtotal,gran_total,pendiente_por_pagar,pagado,estado,aud_usd,examen_medico,pesos,seguro,veta_tiposvisa_id_c,total_visa,usd,usd_cop,mxn,clp,usd_mxn,usd_clp,asegurador,duracion,tipo_seguro,descuento) SELECT  id,name,date_entered,date_modified,modified_user_id,created_by,description,deleted,assigned_user_id,pais,departamento,ciudad,primer_pago,currency_id,subtotal,gran_total,pendiente_por_pagar,pagado,estado,aud_usd,examen_medico,pesos,seguro,veta_tiposvisa_id_c,total_visa,usd,usd_cop,mxn,clp,usd_mxn,usd_clp,asegurador,duracion,tipo_seguro,0 as descuento  FROM $bd2.veta_recibo";

        $res1   = $db->query( $sql1 );
        $res2   = $db->query( $sql2 );
        $res3   = $db->query( $sql3 );
        $res4   = $db->query( $sql4 );
        $res5   = $db->query( $sql5 );
        $res6   = $db->query( $sql6 );
        $res7   = $db->query( $sql7 );
        $res8   = $db->query( $sql8 );
        $res9   = $db->query( $sql9 );
        $res10  = $db->query( $sql10 );
        $res11  = $db->query( $sql11 );
        $res12  = $db->query( $sql12 );
        $res13  = $db->query( $sql13 );
        $res14  = $db->query( $sql14 );
        $res15  = $db->query( $sql15 );
        $res16  = $db->query( $sql16 );
        $res17  = $db->query( $sql17 );
        $res18  = $db->query( $sql18 );
        $res19  = $db->query( $sql19 );
        $res20  = $db->query( $sql20 );
        $res21  = $db->query( $sql21 );
        $res22  = $db->query( $sql22 );
        $res23  = $db->query( $sql23 );
        $res24  = $db->query( $sql24 );
        $res25  = $db->query( $sql25 );
        $res26  = $db->query( $sql26 );
        $res27  = $db->query( $sql27 );
        $res28  = $db->query( $sql28 );
        $res29  = $db->query( $sql29 );
        $res30  = $db->query( $sql30 );
        $res31  = $db->query( $sql31 );
        $res32  = $db->query( $sql32 );
        $res33  = $db->query( $sql33 );
        $res34  = $db->query( $sql34 );
        $res35  = $db->query( $sql35 );
        $res36  = $db->query( $sql36 );
        $res37  = $db->query( $sql37 );
        $res38  = $db->query( $sql38 );
        $res39  = $db->query( $sql39 );
        $res40  = $db->query( $sql40 );
        $res41  = $db->query( $sql41 );
        $res42  = $db->query( $sql42 );
        $res43  = $db->query( $sql43 );
        $res44  = $db->query( $sql44 );
        $res45  = $db->query( $sql45 );
        $res46  = $db->query( $sql46 );
        $res47  = $db->query( $sql47 );
        $res48  = $db->query( $sql48 );
        $res49  = $db->query( $sql49 );
        $res50  = $db->query( $sql50 );
        $res51  = $db->query( $sql51 );
        $res52  = $db->query( $sql52 );
        $res53  = $db->query( $sql53 );
        $res54  = $db->query( $sql54 );
        $res55  = $db->query( $sql55 );
        $res56  = $db->query( $sql56 );
        $res57  = $db->query( $sql57 );
        $res58  = $db->query( $sql58 );
        $res59  = $db->query( $sql59 );
        $res60  = $db->query( $sql60 );
        $res61  = $db->query( $sql61 );
        $res62  = $db->query( $sql62 );
        $res63  = $db->query( $sql63 );
        $res64  = $db->query( $sql64 );
        $res65  = $db->query( $sql65 );
        $res66  = $db->query( $sql66 );
        $res67  = $db->query( $sql67 );
        $res68  = $db->query( $sql68 );
        $res69  = $db->query( $sql69 );
        $res70  = $db->query( $sql70 );
        $res71  = $db->query( $sql71 );
        $res72  = $db->query( $sql72 );
        $res73  = $db->query( $sql73 );
        $res74  = $db->query( $sql74 );
        $res75  = $db->query( $sql75 );
        $res76  = $db->query( $sql76 );
        $res77  = $db->query( $sql77 );
        $res78  = $db->query( $sql78 );
        $res79  = $db->query( $sql79 );
        $res80  = $db->query( $sql80 );
        $res81  = $db->query( $sql81 );
        $res82  = $db->query( $sql82 );
        $res83  = $db->query( $sql83 );
        $res84  = $db->query( $sql84 );
        $res85  = $db->query( $sql85 );
        $res86  = $db->query( $sql86 );
        $res87  = $db->query( $sql87 );
        $res88  = $db->query( $sql88 );
        $res89  = $db->query( $sql89 );
        $res90  = $db->query( $sql90 );
        $res91  = $db->query( $sql91 );
        $res92  = $db->query( $sql92 );
        $res93  = $db->query( $sql93 );
        $res94  = $db->query( $sql94 );
        $res95  = $db->query( $sql95 );
        $res96  = $db->query( $sql96 );
        $res97  = $db->query( $sql97 );
        $res98  = $db->query( $sql98 );
        $res99  = $db->query( $sql99 );
        $res100 = $db->query( $sql100 );
        $res101 = $db->query( $sql101 );
        $res102 = $db->query( $sql102 );
        $res103 = $db->query( $sql103 );
        $res104 = $db->query( $sql104 );
        $res105 = $db->query( $sql105 );
        $res106 = $db->query( $sql106 );
        $res107 = $db->query( $sql107 );
        $res108 = $db->query( $sql108 );
        $res109 = $db->query( $sql109 );
        $res110 = $db->query( $sql110 );
        $res111 = $db->query( $sql111 );
        $res112 = $db->query( $sql112 );
        $res113 = $db->query( $sql113 );
        $res114 = $db->query( $sql114 );
        $res115 = $db->query( $sql115 );
        $res116 = $db->query( $sql116 );
        $res117 = $db->query( $sql117 );
        $res118 = $db->query( $sql118 );
        $res119 = $db->query( $sql119 );
        $res120 = $db->query( $sql120 );
        $res121 = $db->query( $sql121 );
        $res122 = $db->query( $sql122 );
        $res123 = $db->query( $sql123 );
        $res124 = $db->query( $sql124 );
        $res125 = $db->query( $sql125 );
        $res126 = $db->query( $sql126 );
        $res127 = $db->query( $sql127 );
        $res128 = $db->query( $sql128 );
        $res129 = $db->query( $sql129 );
        $res130 = $db->query( $sql130 );
        $res131 = $db->query( $sql131 );
        $res132 = $db->query( $sql132 );
        $res133 = $db->query( $sql133 );
        $res134 = $db->query( $sql134 );
        $res135 = $db->query( $sql135 );
        $res136 = $db->query( $sql136 );
        $res137 = $db->query( $sql137 );
        $res138 = $db->query( $sql138 );
        $res139 = $db->query( $sql139 );


        $this->assertNotNull( $res1 );
        $this->assertNotNull( $res2 );
        $this->assertNotNull( $res3 );
        $this->assertNotNull( $res4 );
        $this->assertNotNull( $res5 );
        $this->assertNotNull( $res6 );
        $this->assertNotNull( $res7 );
        $this->assertNotNull( $res8 );
        $this->assertNotNull( $res9 );
        $this->assertNotNull( $res10 );
        $this->assertNotNull( $res11 );
        $this->assertNotNull( $res12 );
        $this->assertNotNull( $res13 );
        $this->assertNotNull( $res14 );
        $this->assertNotNull( $res15 );
        $this->assertNotNull( $res16 );
        $this->assertNotNull( $res17 );
        $this->assertNotNull( $res18 );
        $this->assertNotNull( $res19 );
        $this->assertNotNull( $res20 );
        $this->assertNotNull( $res21 );
        $this->assertNotNull( $res22 );
        $this->assertNotNull( $res23 );
        $this->assertNotNull( $res24 );
        $this->assertNotNull( $res25 );
        $this->assertNotNull( $res26 );
        $this->assertNotNull( $res27 );
        $this->assertNotNull( $res28 );
        $this->assertNotNull( $res29 );
        $this->assertNotNull( $res30 );
        $this->assertNotNull( $res31 );
        $this->assertNotNull( $res32 );
        $this->assertNotNull( $res33 );
        $this->assertNotNull( $res34 );
        $this->assertNotNull( $res35 );
        $this->assertNotNull( $res36 );
        $this->assertNotNull( $res37 );
        $this->assertNotNull( $res38 );
        $this->assertNotNull( $res39 );
        $this->assertNotNull( $res40 );
        $this->assertNotNull( $res41 );
        $this->assertNotNull( $res42 );
        $this->assertNotNull( $res43 );
        $this->assertNotNull( $res44 );
        $this->assertNotNull( $res45 );
        $this->assertNotNull( $res46 );
        $this->assertNotNull( $res47 );
        $this->assertNotNull( $res48 );
        $this->assertNotNull( $res49 );
        $this->assertNotNull( $res50 );
        $this->assertNotNull( $res51 );
        $this->assertNotNull( $res52 );
        $this->assertNotNull( $res53 );
        $this->assertNotNull( $res54 );
        $this->assertNotNull( $res55 );
        $this->assertNotNull( $res56 );
        $this->assertNotNull( $res57 );
        $this->assertNotNull( $res58 );
        $this->assertNotNull( $res59 );
        $this->assertNotNull( $res60 );
        $this->assertNotNull( $res61 );
        $this->assertNotNull( $res62 );
        $this->assertNotNull( $res63 );
        $this->assertNotNull( $res64 );
        $this->assertNotNull( $res65 );
        $this->assertNotNull( $res66 );
        $this->assertNotNull( $res67 );
        $this->assertNotNull( $res68 );
        $this->assertNotNull( $res69 );
        $this->assertNotNull( $res70 );
        $this->assertNotNull( $res71 );
        $this->assertNotNull( $res72 );
        $this->assertNotNull( $res73 );
        $this->assertNotNull( $res74 );
        $this->assertNotNull( $res75 );
        $this->assertNotNull( $res76 );
        $this->assertNotNull( $res77 );
        $this->assertNotNull( $res78 );
        $this->assertNotNull( $res79 );
        $this->assertNotNull( $res80 );
        $this->assertNotNull( $res81 );
        $this->assertNotNull( $res82 );
        $this->assertNotNull( $res83 );
        $this->assertNotNull( $res84 );
        $this->assertNotNull( $res85 );
        $this->assertNotNull( $res86 );
        $this->assertNotNull( $res87 );
        $this->assertNotNull( $res88 );
        $this->assertNotNull( $res89 );
        $this->assertNotNull( $res90 );
        $this->assertNotNull( $res91 );
        $this->assertNotNull( $res92 );
        $this->assertNotNull( $res93 );
        $this->assertNotNull( $res94 );
        $this->assertNotNull( $res95 );
        $this->assertNotNull( $res96 );
        $this->assertNotNull( $res97 );
        $this->assertNotNull( $res98 );
        $this->assertNotNull( $res99 );
        $this->assertNotNull( $res100 );
        $this->assertNotNull( $res101 );
        $this->assertNotNull( $res102 );
        $this->assertNotNull( $res103 );
        $this->assertNotNull( $res104 );
        $this->assertNotNull( $res105 );
        $this->assertNotNull( $res106 );
        $this->assertNotNull( $res107 );
        $this->assertNotNull( $res108 );
        $this->assertNotNull( $res109 );
        $this->assertNotNull( $res110 );
        $this->assertNotNull( $res111 );
        $this->assertNotNull( $res112 );
        $this->assertNotNull( $res113 );
        $this->assertNotNull( $res114 );
        $this->assertNotNull( $res115 );
        $this->assertNotNull( $res116 );
        $this->assertNotNull( $res117 );
        $this->assertNotNull( $res118 );
        $this->assertNotNull( $res119 );
        $this->assertNotNull( $res120 );
        $this->assertNotNull( $res121 );
        $this->assertNotNull( $res122 );
        $this->assertNotNull( $res123 );
        $this->assertNotNull( $res124 );
        $this->assertNotNull( $res125 );
        $this->assertNotNull( $res126 );
        $this->assertNotNull( $res127 );
        $this->assertNotNull( $res128 );
        $this->assertNotNull( $res129 );
        $this->assertNotNull( $res130 );
        $this->assertNotNull( $res131 );
        $this->assertNotNull( $res132 );
        $this->assertNotNull( $res133 );
        $this->assertNotNull( $res134 );
        $this->assertNotNull( $res135 );
        $this->assertNotNull( $res136 );
        $this->assertNotNull( $res137 );
        $this->assertNotNull( $res138 );
        $this->assertNotNull( $res139 );

        $this->assertTrue( $res1 );
        $this->assertTrue( $res2 );
        $this->assertTrue( $res3 );
        $this->assertTrue( $res4 );
        $this->assertTrue( $res5 );
        $this->assertTrue( $res6 );
        $this->assertTrue( $res7 );
        $this->assertTrue( $res8 );
        $this->assertTrue( $res9 );
        $this->assertTrue( $res10 );
        $this->assertTrue( $res11 );
        $this->assertTrue( $res12 );
        $this->assertTrue( $res13 );
        $this->assertTrue( $res14 );
        $this->assertTrue( $res15 );
        $this->assertTrue( $res16 );
        $this->assertTrue( $res17 );
        $this->assertTrue( $res18 );
        $this->assertTrue( $res19 );
        $this->assertTrue( $res20 );
        $this->assertTrue( $res21 );
        $this->assertTrue( $res22 );
        $this->assertTrue( $res23 );
        $this->assertTrue( $res24 );
        $this->assertTrue( $res25 );
        $this->assertTrue( $res26 );
        $this->assertTrue( $res27 );
        $this->assertTrue( $res28 );
        $this->assertTrue( $res29 );
        $this->assertTrue( $res30 );
        $this->assertTrue( $res31 );
        $this->assertTrue( $res32 );

        $this->assertTrue( $res33 );
        $this->assertTrue( $res34 );
        $this->assertTrue( $res35 );
        $this->assertTrue( $res36 );
        $this->assertTrue( $res37 );
        $this->assertTrue( $res38 );
        $this->assertTrue( $res39 );
        $this->assertTrue( $res40 );
        $this->assertTrue( $res41 );
        $this->assertTrue( $res42 );
        $this->assertTrue( $res43 );
        $this->assertTrue( $res44 );
        $this->assertTrue( $res45 );
        $this->assertTrue( $res46 );
        $this->assertTrue( $res47 );
        $this->assertTrue( $res48 );
        $this->assertTrue( $res49 );
        $this->assertTrue( $res50 );
        $this->assertTrue( $res51 );
        $this->assertTrue( $res52 );
        $this->assertTrue( $res53 );
        $this->assertTrue( $res54 );
        $this->assertTrue( $res55 );
        $this->assertTrue( $res56 );
        $this->assertTrue( $res57 );
        $this->assertTrue( $res58 );
        $this->assertTrue( $res59 );
        $this->assertTrue( $res60 );
        $this->assertTrue( $res61 );
        $this->assertTrue( $res62 );
        $this->assertTrue( $res63 );
        $this->assertTrue( $res64 );
        $this->assertTrue( $res65 );
        $this->assertTrue( $res66 );
        $this->assertTrue( $res67 );
        $this->assertTrue( $res68 );
        $this->assertTrue( $res69 );
        $this->assertTrue( $res70 );
        $this->assertTrue( $res71 );
        $this->assertTrue( $res72 );
        $this->assertTrue( $res73 );
        $this->assertTrue( $res74 );
        $this->assertTrue( $res75 );
        $this->assertTrue( $res76 );
        $this->assertTrue( $res77 );
        $this->assertTrue( $res78 );
        $this->assertTrue( $res79 );
        $this->assertTrue( $res80 );
        $this->assertTrue( $res81 );
        $this->assertTrue( $res82 );
        $this->assertTrue( $res83 );
        $this->assertTrue( $res84 );
        $this->assertTrue( $res85 );
        $this->assertTrue( $res86 );
        $this->assertTrue( $res87 );
        $this->assertTrue( $res88 );
        $this->assertTrue( $res89 );
        $this->assertTrue( $res90 );
        $this->assertTrue( $res91 );
        $this->assertTrue( $res92 );
        $this->assertTrue( $res93 );
        $this->assertTrue( $res94 );
        $this->assertTrue( $res95 );
        $this->assertTrue( $res96 );
        $this->assertTrue( $res97 );
        $this->assertTrue( $res98 );
        $this->assertTrue( $res99 );
        $this->assertTrue( $res100 );
        $this->assertTrue( $res101 );
        $this->assertTrue( $res102 );
        $this->assertTrue( $res103 );
        $this->assertTrue( $res104 );
        $this->assertTrue( $res105 );
        $this->assertTrue( $res106 );
        $this->assertTrue( $res107 );
        $this->assertTrue( $res108 );
        $this->assertTrue( $res109 );
        $this->assertTrue( $res110 );
        $this->assertTrue( $res111 );
        $this->assertTrue( $res112 );
        $this->assertTrue( $res113 );
        $this->assertTrue( $res114 );
        $this->assertTrue( $res115 );
        $this->assertTrue( $res116 );
        $this->assertTrue( $res117 );
        $this->assertTrue( $res118 );
        $this->assertTrue( $res119 );
        $this->assertTrue( $res120 );
        $this->assertTrue( $res121 );
        $this->assertTrue( $res122 );
        $this->assertTrue( $res123 );
        $this->assertTrue( $res124 );
        $this->assertTrue( $res125 );
        $this->assertTrue( $res126 );
        $this->assertTrue( $res127 );
        $this->assertTrue( $res128 );
        $this->assertTrue( $res129 );
        $this->assertTrue( $res130 );
        $this->assertTrue( $res131 );
        $this->assertTrue( $res132 );
        $this->assertTrue( $res133 );
        $this->assertTrue( $res134 );
        $this->assertTrue( $res135 );
        $this->assertTrue( $res136 );
        $this->assertTrue( $res137 );
        $this->assertTrue( $res138 );
        $this->assertTrue( $res139 );
    }

    private function updates_2() {

        $db = DBManagerFactory::getInstance();

        $sql1  = "UPDATE leads_cstm SET fecha_expiracion_visa_c = NULL WHERE fecha_expiracion_visa_c = '0001-01-01'";
        $sql2  = "UPDATE leads SET birthdate = NULL WHERE birthdate  = '0001-01-01'";
        $sql3  = "UPDATE opportunities SET date_closed = NULL WHERE date_closed = '0001-01-01'";
        $sql4  = "UPDATE veta_aplicacion SET fecha_expiracion_visa = NULL WHERE fecha_expiracion_visa = '0001-01-01'";
        $sql5  = "UPDATE veta_coe SET fecha_expiracion_visa = NULL WHERE fecha_expiracion_visa = '0001-01-01'";
        $sql6  = "UPDATE veta_liquidacion SET fecha_expiracion_visa = NULL WHERE fecha_expiracion_visa = '0001-01-01'";
        $sql7  = "UPDATE veta_loo SET fecha_expiracion_visa = NULL WHERE fecha_expiracion_visa = '0001-01-01'";
        $sql8  = "UPDATE veta_pagos SET fecha_expiracion_visa = NULL WHERE fecha_expiracion_visa = '0001-01-01'";
        $sql9  = "UPDATE veta_serviciocliente SET fecha_expiracion_visa = NULL WHERE fecha_expiracion_visa = '0001-01-01'";
        $sql10 = "UPDATE veta_visa SET fecha_expiracion_visa = NULL WHERE fecha_expiracion_visa = '0001-01-01'";
        $sql11 = "UPDATE opportunities_cstm SET fecha_cierre_c = NULL WHERE fecha_cierre_c = '0001-01-01'";
        $sql12 = "UPDATE veta_seguro_cstm SET activo_c = 'Si'";
        $sql13 = "UPDATE leads SET leads.deleted = 1  WHERE LENGTH(IFNULL(first_name, '')) = 0 AND LENGTH(IFNULL(last_name, '')) = 0  AND leads.deleted = 0 AND leads.id NOT IN (SELECT veta_presupuesto_leadsleads_ida FROM veta_presupuesto_leads_c WHERE deleted = 0 )";

        $res1  = $db->query( $sql1 );
        $res2  = $db->query( $sql2 );
        $res3  = $db->query( $sql3 );
        $res4  = $db->query( $sql4 );
        $res5  = $db->query( $sql5 );
        $res6  = $db->query( $sql6 );
        $res7  = $db->query( $sql7 );
        $res8  = $db->query( $sql8 );
        $res9  = $db->query( $sql9 );
        $res10 = $db->query( $sql10 );
        $res11 = $db->query( $sql11 );
        $res12 = $db->query( $sql12 );
        $res13 = $db->query( $sql13 );

        $this->assertNotNull( $res1 );
        $this->assertNotNull( $res2 );
        $this->assertNotNull( $res3 );
        $this->assertNotNull( $res4 );
        $this->assertNotNull( $res5 );
        $this->assertNotNull( $res6 );
        $this->assertNotNull( $res7 );
        $this->assertNotNull( $res8 );
        $this->assertNotNull( $res9 );
        $this->assertNotNull( $res10 );
        $this->assertNotNull( $res11 );
        $this->assertNotNull( $res12 );
        $this->assertNotNull( $res13 );

        $this->assertTrue( $res1 );
        $this->assertTrue( $res2 );
        $this->assertTrue( $res3 );
        $this->assertTrue( $res4 );
        $this->assertTrue( $res5 );
        $this->assertTrue( $res6 );
        $this->assertTrue( $res7 );
        $this->assertTrue( $res8 );
        $this->assertTrue( $res9 );
        $this->assertTrue( $res10 );
        $this->assertTrue( $res11 );
        $this->assertTrue( $res12 );
        $this->assertTrue( $res13 );
    }

    public function escenario_pruebas() {

        $this->deletes();
        $this->updates_1( 'vetacrm_v2' );
        $this->inserts( 'vetacrm_v2' );
        $this->updates_2();
    }

    private function botame() {

        /*$db = DBManagerFactory::getInstance();

        $sql1 = 'INSERT INTO vetacrm.opportunities(
                    id ,
                    name,
                    date_entered,
                    date_modified,
                    modified_user_id,
                    created_by,
                    description,
                    deleted,
                    assigned_user_id,
                    opportunity_type,
                    campaign_id,
                    lead_source,
                    amount,
                    amount_usdollar,
                    currency_id,
                    date_closed,
                    next_step,
                    sales_stage,
                    probability
                    )
                    SELECT
                    id ,
                    name,
                    date_entered,
                    date_modified,
                    modified_user_id,
                    created_by,
                    description,
                    deleted,
                    assigned_user_id,
                    opportunity_type,
                    campaign_id,
                    lead_source,
                    amount,
                    amount_usdollar,
                    currency_id,
                    date_closed,
                    next_step,
                    sales_stage,
                    probability
                    FROM vetacrm2.opportunities';

        $sql2 = 'INSERT INTO vetacrm.opportunities_cstm(
                    id_c,
                    jjwg_maps_lng_c ,
                    jjwg_maps_lat_c ,
                    jjwg_maps_geocode_status_c ,
                    jjwg_maps_address_c ,
                    comision_c ,
                    estado_recoleccion_documento_c ,
                    fecha_apertura_cuenta_bancar_c ,
                    fecha_aplicacion_visa_c,
                    fecha_c ,
                    fecha_firma_contrato_c ,
                    fecha_otorgamiento_visa_c ,
                    fecha_solicitud_pago_contado_c ,
                    monto_dolares_australianos_c ,
                    porcentaje_pago_c,
                    revision_c  ,
                    saldo_pendiente_pago_c ,
                    estado_cartera_c ,
                    estado_gestion_comercial_c ,
                    estado_servicio_al_cliente_c ,
                    estado_visas_c,
                    estado_admisiones_c ,
                    estado_pago_institucion_c ,
                    pendiente_cartera_c,
                    pendiente_pago_colegios_c ,
                    fecha_ultimo_contacto_c,
                    fecha_proximo_contacto_c ,
                    fecha_cierre_c,
                    fecha_presupuesto_c ,
                    user_id_c,
                    user_id1_c ,
                    user_id2_c
                )
                SELECT
                    id_c,
                    jjwg_maps_lng_c ,
                    jjwg_maps_lat_c ,
                    jjwg_maps_geocode_status_c ,
                    jjwg_maps_address_c ,
                    comision_c ,
                    estado_recoleccion_documento_c ,
                    fecha_apertura_cuenta_bancar_c ,
                    fecha_aplicacion_visa_c,
                    fecha_c ,
                    fecha_firma_contrato_c ,
                    fecha_otorgamiento_visa_c ,
                    fecha_solicitud_pago_contado_c ,
                    monto_dolares_australianos_c ,
                    porcentaje_pago_c,
                    revision_c  ,
                    saldo_pendiente_pago_c ,
                    estado_cartera_c ,
                    estado_gestion_comercial_c ,
                    estado_servicio_al_cliente_c ,
                    estado_visas_c,
                    estado_admisiones_c ,
                    estado_pago_institucion_c ,
                    pendiente_cartera_c,
                    pendiente_pago_colegios_c ,
                    fecha_ultimo_contacto_c,
                    fecha_proximo_contacto_c ,
                    fecha_cierre_c,
                    fecha_presupuesto_c ,
                    user_id_c,
                    user_id1_c ,
                    user_id2_c
                    FROM vetacrm2.opportunities_cstm';

        $sql3 = 'INSERT INTO vetacrm.veta_recibo (
                    id,
                    name,
                    date_entered,
                    date_modified,
                    modified_user_id,
                    created_by,
                    description,
                    deleted,
                    assigned_user_id,
                    pais ,
                    departamento,
                    ciudad,
                    primer_pago,
                    currency_id,
                    subtotal,
                    gran_total,
                    pendiente_por_pagar,
                    pagado,
                    estado,
                    aud_usd,
                    examen_medico,
                    pesos,
                    seguro,
                    veta_tiposvisa_id_c,
                    total_visa,
                    usd,
                    usd_cop,
                    mxn,
                    clp,
                    usd_mxn,
                    usd_clp,
                    asegurador,
                    duracion,
                    tipo_seguro
                    )
                    SELECT
                    id,
                    name,
                    date_entered,
                    date_modified,
                    modified_user_id,
                    created_by,
                    description,
                    deleted,
                    assigned_user_id,
                    pais ,
                    departamento,
                    ciudad,
                    primer_pago,
                    currency_id,
                    subtotal,
                    gran_total,
                    pendiente_por_pagar,
                    pagado,
                    estado,
                    aud_usd,
                    examen_medico,
                    pesos,
                    seguro,
                    veta_tiposvisa_id_c,
                    total_visa,
                    usd,
                    usd_cop,
                    mxn,
                    clp,
                    usd_mxn,
                    usd_clp,
                    asegurador,
                    duracion,
                    tipo_seguro
                    FROM vetacrm2.veta_recibo';

        $sql4 = 'INSERT INTO vetacrm.veta_recibo_opportunities_c (
                    id,
                    date_modified,
                    deleted,
                    veta_recibo_opportunitiesveta_recibo_ida,
                    veta_recibo_opportunitiesopportunities_idb
                    )
                    SELECT
                    id,
                    date_modified,
                    deleted,
                    veta_recibo_opportunitiesveta_recibo_ida,
                    veta_recibo_opportunitiesopportunities_idb
                    FROM vetacrm2.veta_recibo_opportunities_c';

        $sql5 = 'INSERT INTO vetacrm.veta_recibo_veta_presupuesto_c (
                    id,
                    date_modified,
                    deleted,
                    veta_recibo_veta_presupuestoveta_presupuesto_ida,
                    veta_recibo_veta_presupuestoveta_recibo_idb
                    )
                    SELECT
                    id,
                    date_modified,
                    deleted,
                    veta_recibo_veta_presupuestoveta_presupuesto_ida,
                    veta_recibo_veta_presupuestoveta_recibo_idb
                    FROM vetacrm2.veta_recibo_veta_presupuesto_c';

        $sql6 = 'INSERT INTO vetacrm.veta_presupuesto (
                        id,
                        name,
                        date_entered,
                        date_modified,
                        modified_user_id,
                        created_by,
                        description,
                        deleted,
                        assigned_user_id,
                        pais,
                        departamento,
                        ciudad,
                        primer_pago,
                        currency_id,
                        subtotal,
                        gran_total,
                        aud_usd,
                        usd_cop,
                        usd,
                        pesos,
                        total_visa,
                        veta_tiposvisa_id_c,
                        examen_medico,
                        seguro,
                        mxn,
                        clp,
                        usd_mxn,
                        clp_usd,
                        asegurador,
                        duracion,
                        tipo_seguro
                        )
                        SELECT
                        id,
                        name,
                        date_entered,
                        date_modified,
                        modified_user_id,
                        created_by,
                        description,
                        deleted,
                        assigned_user_id,
                        pais,
                        departamento,
                        ciudad,
                        primer_pago,
                        currency_id,
                        subtotal,
                        gran_total,
                        aud_usd,
                        usd_cop,
                        usd,
                        pesos,
                        total_visa,
                        veta_tiposvisa_id_c,
                        examen_medico,
                        seguro,
                        mxn,
                        clp,
                        usd_mxn,
                        clp_usd,
                        asegurador,
                        duracion,
                        tipo_seguro
                        FROM vetacrm2.veta_presupuesto';

        $sql7 = 'INSERT INTO vetacrm.contacts (
                    id,
                    date_entered,
                    date_modified,
                    modified_user_id,
                    created_by,
                    description,
                    deleted,
                    assigned_user_id,
                    salutation,
                    first_name,
                    last_name,
                    title,
                    photo,
                    department,
                    do_not_call,
                    phone_home,
                    phone_mobile,
                    phone_work,
                    phone_other,
                    phone_fax,
                    lawful_basis,
                    date_reviewed,
                    lawful_basis_source,
                    primary_address_street,
                    primary_address_city,
                    primary_address_state,
                    primary_address_postalcode,
                    primary_address_country,
                    alt_address_street,
                    alt_address_city,
                    alt_address_state,
                    alt_address_postalcode,
                    alt_address_country,
                    assistant,
                    assistant_phone,
                    lead_source,
                    reports_to_id,
                    birthdate,
                    campaign_id,
                    joomla_account_id,
                    portal_account_disabled,
                    portal_user_type
                    )
                    SELECT
                    id,
                    date_entered,
                    date_modified,
                    modified_user_id,
                    created_by,
                    description,
                    deleted,
                    assigned_user_id,
                    salutation,
                    first_name,
                    last_name,
                    title,
                    photo,
                    department,
                    do_not_call,
                    phone_home,
                    phone_mobile,
                    phone_work,
                    phone_other,
                    phone_fax,
                    lawful_basis,
                    date_reviewed,
                    lawful_basis_source,
                    primary_address_street,
                    primary_address_city,
                    primary_address_state,
                    primary_address_postalcode,
                    primary_address_country,
                    alt_address_street,
                    alt_address_city,
                    alt_address_state,
                    alt_address_postalcode,
                    alt_address_country,
                    assistant,
                    assistant_phone,
                    lead_source,
                    reports_to_id,
                    birthdate,
                    campaign_id,
                    joomla_account_id,
                    portal_account_disabled,
                    portal_user_type
                    FROM vetacrm2.contacts';

        $sql8 = 'INSERT INTO vetacrm.contacts_cstm (
                        id_c,
                        jjwg_maps_lng_c,
                        jjwg_maps_lat_c,
                        jjwg_maps_geocode_status_c,
                        jjwg_maps_address_c,
                        anos_sin_estudiar_c,
                        celular_autralia_c,
                        celular_contacto_emergencia_c,
                        ciudad_c,
                        ciudad_nacimiento_c,
                        contacto_emergencia_c,
                        cuenta_bancaria_australia_c,
                        departamento_c,
                        departamento_nacimiento_c,
                        direccion_c,
                        edad_c,
                        edad_conyuge_c,
                        email_contacto_emergencia_c,
                        estado_civil_c,
                        genero_c,
                        identificacion_australia_c,
                        institucion_australia_c,
                        nivel_ingles_c,
                        nombre_conyuge_c,
                        ocupacion_conyuge_c,
                        pais_c,
                        pais_nacimiento_c,
                        pasaporte_c,
                        relacion_contacto_emergencia_c,
                        viajes_realizados_c,
                        visa_negada_c,
                        presupuesto_c,
                        currency_id,
                        fecha_viaje_c,
                        carrera_universitaria_c,
                        trabajo_actual_c,
                        fecha_expiracion_visa_c,
                        nacimiento_conyuge_c,
                        fecha_ultimo_contacto_c,
                        fecha_proximo_contacto_c,
                        fecha_de_viaje_c
                        )
                        SELECT
                        id_c,
                        jjwg_maps_lng_c,
                        jjwg_maps_lat_c,
                        jjwg_maps_geocode_status_c,
                        jjwg_maps_address_c,
                        anos_sin_estudiar_c,
                        celular_autralia_c,
                        celular_contacto_emergencia_c,
                        ciudad_c,
                        ciudad_nacimiento_c,
                        contacto_emergencia_c,
                        cuenta_bancaria_australia_c,
                        departamento_c,
                        departamento_nacimiento_c,
                        direccion_c,
                        edad_c,
                        edad_conyuge_c,
                        email_contacto_emergencia_c,
                        estado_civil_c,
                        genero_c,
                        identificacion_australia_c,
                        institucion_australia_c,
                        nivel_ingles_c,
                        nombre_conyuge_c,
                        ocupacion_conyuge_c,
                        pais_c,
                        pais_nacimiento_c,
                        pasaporte_c,
                        relacion_contacto_emergencia_c,
                        viajes_realizados_c,
                        visa_negada_c,
                        presupuesto_c,
                        currency_id,
                        fecha_viaje_c,
                        carrera_universitaria_c,
                        trabajo_actual_c,
                        fecha_expiracion_visa_c,
                        nacimiento_conyuge_c,
                        fecha_ultimo_contacto_c,
                        fecha_proximo_contacto_c,
                        fecha_de_viaje_c
                        FROM vetacrm2.contacts_cstm';

        $sql9 = 'INSERT INTO vetacrm.leads (
                    id,
                    date_entered,
                    date_modified,
                    modified_user_id,
                    created_by,
                    description,
                    deleted,
                    assigned_user_id,
                    salutation,
                    first_name,
                    last_name,
                    title,
                    photo,
                    department,
                    do_not_call,
                    phone_home,
                    phone_mobile,
                    phone_work,
                    phone_other,
                    phone_fax,
                    lawful_basis,
                    date_reviewed,
                    lawful_basis_source,
                    primary_address_street,
                    primary_address_city,
                    primary_address_state,
                    primary_address_postalcode,
                    primary_address_country,
                    alt_address_street,
                    alt_address_city,
                    alt_address_state,
                    alt_address_postalcode,
                    alt_address_country,
                    assistant,
                    assistant_phone,
                    converted,
                    refered_by,
                    lead_source,
                    lead_source_description,
                    status,
                    status_description,
                    reports_to_id,
                    account_name,
                    account_description,
                    contact_id,
                    account_id,
                    opportunity_id,
                    opportunity_name,
                    opportunity_amount,
                    campaign_id,
                    birthdate,
                    portal_name,
                    portal_app,
                    website
                    )
                    SELECT
                    id,
                    date_entered,
                    date_modified,
                    modified_user_id,
                    created_by,
                    description,
                    deleted,
                    assigned_user_id,
                    salutation,
                    first_name,
                    last_name,
                    title,
                    photo,
                    department,
                    do_not_call,
                    phone_home,
                    phone_mobile,
                    phone_work,
                    phone_other,
                    phone_fax,
                    lawful_basis,
                    date_reviewed,
                    lawful_basis_source,
                    primary_address_street,
                    primary_address_city,
                    primary_address_state,
                    primary_address_postalcode,
                    primary_address_country,
                    alt_address_street,
                    alt_address_city,
                    alt_address_state,
                    alt_address_postalcode,
                    alt_address_country,
                    assistant,
                    assistant_phone,
                    converted,
                    refered_by,
                    lead_source,
                    lead_source_description,
                    status,
                    status_description,
                    reports_to_id,
                    account_name,
                    account_description,
                    contact_id,
                    account_id,
                    opportunity_id,
                    opportunity_name,
                    opportunity_amount,
                    campaign_id,
                    NOW(),
                    portal_name,
                    portal_app,
                    website
                    FROM vetacrm2.leads';

        $sql10 = 'INSERT INTO vetacrm.leads_cstm (
                    id_c,
                    jjwg_maps_lng_c,
                    jjwg_maps_lat_c,
                    jjwg_maps_geocode_status_c,
                    jjwg_maps_address_c,
                    campaign_id_c,
                    ciudad_c,
                    currency_id,
                    departamento_c,
                    edad_c,
                    fecha_expiracion_visa_c,
                    ok_comercial_c,
                    ok_visas_c,
                    pais_c,
                    pasaporte_c,
                    presupuesto_c,
                    visa_c,
                    fecha_viaje_c,
                    expiracion_visa_c,
                    ciudad_tmp_c,
                    carrera_universitaria_c,
                    trabajo_actual_c,
                    fecha_proximo_contacto_c,
                    fecha_ultimo_contacto_c,
                    fecha_viaje_2_c,
                    fecha_primer_presupuesto_c
                    )
                    SELECT
                    id_c,
                    jjwg_maps_lng_c,
                    jjwg_maps_lat_c,
                    jjwg_maps_geocode_status_c,
                    jjwg_maps_address_c,
                    campaign_id_c,
                    ciudad_c,
                    currency_id,
                    departamento_c,
                    edad_c,
                    fecha_expiracion_visa_c,
                    ok_comercial_c,
                    ok_visas_c,
                    pais_c,
                    pasaporte_c,
                    presupuesto_c,
                    visa_c,
                    fecha_viaje_c,
                    expiracion_visa_c,
                    ciudad_tmp_c,
                    carrera_universitaria_c,
                    trabajo_actual_c,
                    fecha_proximo_contacto_c,
                    fecha_ultimo_contacto_c,
                    fecha_viaje_2_c,
                    fecha_primer_presupuesto_c
                    FROM vetacrm2.leads_cstm';

        $sql11 = 'INSERT INTO vetacrm.contacts_opportunities_1_c (
                    id,
                    date_modified,
                    deleted,
                    contacts_opportunities_1contacts_ida,
                    contacts_opportunities_1opportunities_idb
                    )
                    SELECT
                    id,
                    date_modified,
                    deleted,
                    contacts_opportunities_1contacts_ida,
                    contacts_opportunities_1opportunities_idb
                    FROM vetacrm2.contacts_opportunities_1_c';

        $sql12 = 'INSERT INTO vetacrm.leads_opportunities_1_c (
                        id,
                        date_modified,
                        deleted,
                        leads_opportunities_1leads_ida,
                        leads_opportunities_1opportunities_idb
                        )
                        SELECT
                        id,
                        date_modified,
                        deleted,
                        leads_opportunities_1leads_ida,
                        leads_opportunities_1opportunities_idb
                        FROM vetacrm2.leads_opportunities_1_c';

        $sql13 = 'INSERT INTO vetacrm.veta_recibo_contacts_c (
                        id,
                        date_modified,
                        deleted,
                        veta_recibo_contactscontacts_ida,
                        veta_recibo_contactsveta_recibo_idb
                        )
                        SELECT
                        id,
                        date_modified,
                        deleted,
                        veta_recibo_contactscontacts_ida,
                        veta_recibo_contactsveta_recibo_idb
                        FROM vetacrm2.veta_recibo_contacts_c';

        $sql14 = 'INSERT INTO vetacrm.veta_recibo_leads_c (
                    id,
                    date_modified,
                    deleted,
                    veta_recibo_leadsleads_ida,
                    veta_recibo_leadsveta_recibo_idb
                    )
                    SELECT
                    id,
                    date_modified,
                    deleted,
                    veta_recibo_leadsleads_ida,
                    veta_recibo_leadsveta_recibo_idb
                    FROM vetacrm2.veta_recibo_leads_c';

        $sql15 = 'INSERT INTO vetacrm.veta_presupuesto_contacts_c (
                    id,
                    date_modified,
                    deleted,
                    veta_presupuesto_contactscontacts_ida,
                    veta_presupuesto_contactsveta_presupuesto_idb
                    )
                    SELECT
                    id,
                    date_modified,
                    deleted,
                    veta_presupuesto_contactscontacts_ida,
                    veta_presupuesto_contactsveta_presupuesto_idb
                    FROM vetacrm2.veta_presupuesto_contacts_c';

        $sql16 = 'INSERT INTO vetacrm.veta_presupuesto_leads_c (
                    id,
                    date_modified,
                    deleted,
                    veta_presupuesto_leadsleads_ida,
                    veta_presupuesto_leadsveta_presupuesto_idb
                    )
                    SELECT
                    id,
                    date_modified,
                    deleted,
                    veta_presupuesto_leadsleads_ida,
                    veta_presupuesto_leadsveta_presupuesto_idb
                    FROM vetacrm2.veta_presupuesto_leads_c';

        $res1  = $db->query( $sql1 );
        $res2  = $db->query( $sql2 );
        $res3  = $db->query( $sql3 );
        $res4  = $db->query( $sql4 );
        $res5  = $db->query( $sql5 );
        $res6  = $db->query( $sql6 );
        $res7  = $db->query( $sql7 );
        $res8  = $db->query( $sql8 );
        $res9  = $db->query( $sql9 );
        $res10 = $db->query( $sql10 );
        $res11 = $db->query( $sql11 );
        $res12 = $db->query( $sql12 );
        $res13 = $db->query( $sql13 );
        $res14 = $db->query( $sql14 );
        $res15 = $db->query( $sql15 );
        $res16 = $db->query( $sql16 );
        $res17 = $db->query( $sql17 );
        $res18 = $db->query( $sql18 );
        $res19 = $db->query( $sql19 );
        $res20 = $db->query( $sql20 );
        $res21 = $db->query( $sql21 );
        $res22 = $db->query( $sql22 );
        $res23 = $db->query( $sql23 );
        $res24 = $db->query( $sql24 );
        $res25 = $db->query( $sql25 );
        $res26 = $db->query( $sql26 );
        $res27 = $db->query( $sql27 );
        $res28 = $db->query( $sql28 );
        $res29 = $db->query( $sql29 );
        $res30 = $db->query( $sql30 );
        $res31 = $db->query( $sql31 );
        $res32 = $db->query( $sql32 );

        $this->assertNotNull( $res1 );
        $this->assertNotNull( $res2 );
        $this->assertNotNull( $res3 );
        $this->assertNotNull( $res4 );
        $this->assertNotNull( $res5 );
        $this->assertNotNull( $res6 );
        $this->assertNotNull( $res7 );
        $this->assertNotNull( $res8 );
        $this->assertNotNull( $res9 );
        $this->assertNotNull( $res10 );
        $this->assertNotNull( $res11 );
        $this->assertNotNull( $res12 );
        $this->assertNotNull( $res13 );
        $this->assertNotNull( $res14 );
        $this->assertNotNull( $res15 );
        $this->assertNotNull( $res16 );
        $this->assertNotNull( $res17 );
        $this->assertNotNull( $res18 );
        $this->assertNotNull( $res19 );
        $this->assertNotNull( $res20 );
        $this->assertNotNull( $res21 );
        $this->assertNotNull( $res22 );
        $this->assertNotNull( $res23 );
        $this->assertNotNull( $res24 );
        $this->assertNotNull( $res25 );
        $this->assertNotNull( $res26 );
        $this->assertNotNull( $res27 );
        $this->assertNotNull( $res28 );
        $this->assertNotNull( $res29 );
        $this->assertNotNull( $res30 );
        $this->assertNotNull( $res31 );
        $this->assertNotNull( $res32 );

        $this->assertTrue( $res1 );
        $this->assertTrue( $res2 );
        $this->assertTrue( $res3 );
        $this->assertTrue( $res4 );
        $this->assertTrue( $res5 );
        $this->assertTrue( $res6 );
        $this->assertTrue( $res7 );
        $this->assertTrue( $res8 );
        $this->assertTrue( $res9 );
        $this->assertTrue( $res10 );
        $this->assertTrue( $res11 );
        $this->assertTrue( $res12 );
        $this->assertTrue( $res13 );
        $this->assertTrue( $res14 );
        $this->assertTrue( $res15 );
        $this->assertTrue( $res16 );
        $this->assertTrue( $res17 );
        $this->assertTrue( $res18 );
        $this->assertTrue( $res19 );
        $this->assertTrue( $res20 );
        $this->assertTrue( $res21 );
        $this->assertTrue( $res22 );
        $this->assertTrue( $res23 );
        $this->assertTrue( $res24 );
        $this->assertTrue( $res25 );
        $this->assertTrue( $res26 );
        $this->assertTrue( $res27 );
        $this->assertTrue( $res28 );
        $this->assertTrue( $res29 );
        $this->assertTrue( $res30 );
        $this->assertTrue( $res31 );
        $this->assertTrue( $res32 );*/
    }

    public function testSeparacionLeads() {

        error_reporting( 0 );
        //$this->escenario_pruebas();

        $c       = new Campaign();
        $c->name = "prueba";
        $c->save();

        $db = DBManagerFactory::getInstance();

        $q = "SELECT leads.id FROM leads WHERE leads.id NOT IN ( SELECT veta_presupuesto_leadsleads_ida FROM veta_presupuesto_leads_c WHERE deleted = 0 ) AND leads.deleted = 0 ";
        //$q .= " AND leads.assigned_user_id = '7afad77b-397b-4469-f4a0-5d8854836cb0' ";

        $res = $db->query( $q );

        while ( $row = $db->fetchByAssoc( $res ) )
        {
            $lead = new Lead();
            $lead->retrieve( $row[ 'id' ] );

            $campaign = new Campaign();
            $campaign->retrieve( $lead->campaign_id_c );

            if ( empty( $campaign->id ) )
            {
                $lead->campaign_id_c = $c->id;
            }

            $lead->set_estado_al_requerimiento = true;
            $lead->save();

            $q = "UPDATE veta_requerimiento SET assigned_user_id = '" . $lead->assigned_user_id . "' WHERE id = '" . $lead->reqid . "'";
            $db->query( $q );
        }


    }
}