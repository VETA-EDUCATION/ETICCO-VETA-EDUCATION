<?php

require_once( 'modules/Veta_Visa/Veta_Visa.php' );

class Utils
{

    const SUBTOTAL = 8759;
    const TOTAL    = 8754;
    static public $nombres = array(
        0  => array( 'first_name'            => 'Adriana',
                     'last_name'             => 'Hernandez',
                     'fecha_viaje'           => '2021-04-22',
                     'fecha_expiracion_visa' => '2025-05-23'
        ),
        1  => array( 'first_name'            => 'Alejandro',
                     'last_name'             => 'Acevedo',
                     'fecha_viaje'           => '2021-04-23',
                     'fecha_expiracion_visa' => '2025-05-24'
        ),
        2  => array( 'first_name'            => 'Angela',
                     'last_name'             => 'Mahecha',
                     'fecha_viaje'           => '2021-04-24',
                     'fecha_expiracion_visa' => '2025-05-25'
        ),
        3  => array( 'first_name'            => 'Camilo',
                     'last_name'             => 'Villamizar',
                     'fecha_viaje'           => '2021-05-22',
                     'fecha_expiracion_visa' => '2025-06-23'
        ),
        4  => array( 'first_name'            => 'Carlos',
                     'last_name'             => 'Polo',
                     'fecha_viaje'           => '2021-05-23',
                     'fecha_expiracion_visa' => '2025-06-24'
        ),
        5  => array( 'first_name'            => 'Carol',
                     'last_name'             => 'Gomez',
                     'fecha_viaje'           => '2021-05-24',
                     'fecha_expiracion_visa' => '2025-06-25'
        ),
        6  => array( 'first_name'            => 'Carolina',
                     'last_name'             => 'Pinzon',
                     'fecha_viaje'           => '2021-06-22',
                     'fecha_expiracion_visa' => '2025-07-23'
        ),
        7  => array( 'first_name'            => 'Catherine',
                     'last_name'             => 'Ospina',
                     'fecha_viaje'           => '2021-06-23',
                     'fecha_expiracion_visa' => '2025-07-24'
        ),
        8  => array( 'first_name'            => 'Claudia',
                     'last_name'             => 'Torres',
                     'fecha_viaje'           => '2021-06-24',
                     'fecha_expiracion_visa' => '2025-07-24'
        ),
        9  => array( 'first_name'            => 'Daniel',
                     'last_name'             => 'Gomez',
                     'fecha_viaje'           => '2021-07-22',
                     'fecha_expiracion_visa' => '2025-08-23'
        ),
        10 => array( 'first_name'            => 'Daniela',
                     'last_name'             => 'Guzman',
                     'fecha_viaje'           => '2021-07-23',
                     'fecha_expiracion_visa' => '2025-08-24'
        ),
        11 => array( 'first_name'            => 'Diana',
                     'last_name'             => 'Diaz',
                     'fecha_viaje'           => '2021-07-24',
                     'fecha_expiracion_visa' => '2025-08-25'
        ),
        12 => array( 'first_name'            => 'Diego',
                     'last_name'             => 'Forero',
                     'fecha_viaje'           => '2021-08-22',
                     'fecha_expiracion_visa' => '2025-09-23'
        ),
        13 => array( 'first_name'            => 'Fabian',
                     'last_name'             => 'Fino',
                     'fecha_viaje'           => '2021-08-23',
                     'fecha_expiracion_visa' => '2025-09-24'
        ),
        14 => array( 'first_name'            => 'Gabriel',
                     'last_name'             => 'Herrera',
                     'fecha_viaje'           => '2021-08-24',
                     'fecha_expiracion_visa' => '2025-09-24'
        ),
        15 => array( 'first_name'            => 'Gloria',
                     'last_name'             => 'Mendoza',
                     'fecha_viaje'           => '2021-08-25',
                     'fecha_expiracion_visa' => '2025-09-25'
        ),
        16 => array( 'first_name'            => 'Hugo',
                     'last_name'             => 'Camargo',
                     'fecha_viaje'           => '2021-08-26',
                     'fecha_expiracion_visa' => '2025-09-26'
        ),
        17 => array( 'first_name'            => 'Ingrid',
                     'last_name'             => 'Guerrero',
                     'fecha_viaje'           => '2021-08-27',
                     'fecha_expiracion_visa' => '2025-09-27'
        ),
        18 => array( 'first_name'            => 'Jorge',
                     'last_name'             => 'Rey',
                     'fecha_viaje'           => '2021-08-28',
                     'fecha_expiracion_visa' => '2025-09-28'
        ),
        19 => array( 'first_name'            => 'Juan',
                     'last_name'             => 'Ortega',
                     'fecha_viaje'           => '2022-04-22',
                     'fecha_expiracion_visa' => '2026-05-23'
        ),
        20 => array( 'first_name'            => 'Julian',
                     'last_name'             => 'Sanchez',
                     'fecha_viaje'           => '2022-04-23',
                     'fecha_expiracion_visa' => '2026-05-24'
        ),
        21 => array( 'first_name'            => 'Karen',
                     'last_name'             => 'Pulido',
                     'fecha_viaje'           => '2022-04-24',
                     'fecha_expiracion_visa' => '2026-05-25'
        ),
        22 => array( 'first_name'            => 'Laura',
                     'last_name'             => 'Mejia',
                     'fecha_viaje'           => '2022-04-25',
                     'fecha_expiracion_visa' => '2026-05-26'
        ),
        23 => array( 'first_name'            => 'Natalia',
                     'last_name'             => 'Novoa',
                     'fecha_viaje'           => '2022-04-26',
                     'fecha_expiracion_visa' => '2026-05-27'
        ),
        24 => array( 'first_name'            => 'Olga',
                     'last_name'             => 'Ovalle',
                     'fecha_viaje'           => '2022-05-22',
                     'fecha_expiracion_visa' => '2026-06-23'
        ),
        25 => array( 'first_name'            => 'Rafael',
                     'last_name'             => 'Gonzalez',
                     'fecha_viaje'           => '2021-05-23',
                     'fecha_expiracion_visa' => '2026-06-24'
        ),
    );

    /**
     * Este metodo obtiene un numero celular aleatorio
     * @return string Un telefono celular
     */
    public static function generatePhone()
    {
        $permitted_chars = '0123456789';
        $cad1            = substr( str_shuffle( $permitted_chars ), 0, 100 );
        return '300' . $cad1;
    }

    /**
     * Este método obtiene un correo aleatorio
     * @return string
     */
    public static function generateEmail()
    {
        $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
        $cad1            = substr( str_shuffle( $permitted_chars ), 0, 20 );
        return $cad1 . '@tugmail.com';
    }

    /**
     * Este metodo elimina contenido de todas las tablas y crea los seguros
     */
    public static function escenarioInicial()
    {

        $db = DBManagerFactory::getInstance();

        $q   = "DELETE FROM accounts";
        $res = $db->query( $q );

        $q   = "DELETE FROM accounts_audit";
        $res = $db->query( $q );

        $q   = "DELETE FROM accounts_bugs";
        $res = $db->query( $q );

        $q   = "DELETE FROM accounts_cases";
        $res = $db->query( $q );

        $q   = "DELETE FROM accounts_contacts";
        $res = $db->query( $q );

        $q   = "DELETE FROM accounts_cstm";
        $res = $db->query( $q );

        $q   = "DELETE FROM accounts_opportunities";
        $res = $db->query( $q );

        $q   = "DELETE FROM alerts";
        $res = $db->query( $q );

        $q   = "DELETE FROM am_projecttemplates";
        $res = $db->query( $q );

        $q   = "DELETE FROM am_projecttemplates_audit";
        $res = $db->query( $q );

        $q   = "DELETE FROM am_projecttemplates_contacts_1_c";
        $res = $db->query( $q );

        $q   = "DELETE FROM am_projecttemplates_project_1_c";
        $res = $db->query( $q );

        $q   = "DELETE FROM am_projecttemplates_users_1_c";
        $res = $db->query( $q );

        $q   = "DELETE FROM am_tasktemplates";
        $res = $db->query( $q );

        $q   = "DELETE FROM am_tasktemplates_am_projecttemplates_c";
        $res = $db->query( $q );

        $q   = "DELETE FROM am_tasktemplates_audit";
        $res = $db->query( $q );

        $q   = "DELETE FROM aobh_businesshours";
        $res = $db->query( $q );

        $q   = "DELETE FROM aod_index";
        $res = $db->query( $q );

        $q   = "DELETE FROM aod_index_audit";
        $res = $db->query( $q );

        $q   = "DELETE FROM aod_indexevent";
        $res = $db->query( $q );

        $q   = "DELETE FROM aod_indexevent_audit";
        $res = $db->query( $q );

        $q   = "DELETE FROM aok_knowledge_base_categories";
        $res = $db->query( $q );

        $q   = "DELETE FROM aok_knowledge_base_categories_audit";
        $res = $db->query( $q );

        $q   = "DELETE FROM aok_knowledgebase";
        $res = $db->query( $q );

        $q   = "DELETE FROM aok_knowledgebase_audit";
        $res = $db->query( $q );

        $q   = "DELETE FROM aok_knowledgebase_categories";
        $res = $db->query( $q );

        $q   = "DELETE FROM aop_case_events";
        $res = $db->query( $q );

        $q   = "DELETE FROM aop_case_events_audit";
        $res = $db->query( $q );

        $q   = "DELETE FROM aop_case_updates";
        $res = $db->query( $q );

        $q   = "DELETE FROM aop_case_updates_audit";
        $res = $db->query( $q );

        $q   = "DELETE FROM aor_charts";
        $res = $db->query( $q );

        $q   = "DELETE FROM aor_conditions";
        $res = $db->query( $q );

        $q   = "DELETE FROM aor_fields";
        $res = $db->query( $q );

        $q   = "DELETE FROM aor_reports";
        $res = $db->query( $q );

        $q   = "DELETE FROM aor_reports_audit";
        $res = $db->query( $q );

        $q   = "DELETE FROM aor_scheduled_reports";
        $res = $db->query( $q );

        $q   = "DELETE FROM aos_contracts";
        $res = $db->query( $q );

        $q   = "DELETE FROM aos_contracts_audit";
        $res = $db->query( $q );

        $q   = "DELETE FROM aos_contracts_documents";
        $res = $db->query( $q );

        $q   = "DELETE FROM aos_invoices";
        $res = $db->query( $q );

        $q   = "DELETE FROM aos_invoices_audit";
        $res = $db->query( $q );

        $q   = "DELETE FROM aos_line_item_groups";
        $res = $db->query( $q );

        $q   = "DELETE FROM aos_line_item_groups_audit";
        $res = $db->query( $q );

        $q   = "DELETE FROM aos_pdf_templates";
        $res = $db->query( $q );

        $q   = "DELETE FROM aos_pdf_templates_audit";
        $res = $db->query( $q );

        $q   = "DELETE FROM aos_product_categories";
        $res = $db->query( $q );

        $q   = "DELETE FROM aos_product_categories_audit";
        $res = $db->query( $q );

        $q   = "DELETE FROM aos_products";
        $res = $db->query( $q );

        $q   = "DELETE FROM aos_products_audit";
        $res = $db->query( $q );

        $q   = "DELETE FROM aos_products_quotes";
        $res = $db->query( $q );

        $q   = "DELETE FROM aos_products_quotes_audit";
        $res = $db->query( $q );

        $q   = "DELETE FROM aos_quotes";
        $res = $db->query( $q );

        $q   = "DELETE FROM aos_quotes_aos_invoices_c";
        $res = $db->query( $q );

        $q   = "DELETE FROM aos_quotes_audit";
        $res = $db->query( $q );

        $q   = "DELETE FROM aos_quotes_os_contracts_c";
        $res = $db->query( $q );

        $q   = "DELETE FROM aos_quotes_project_c";
        $res = $db->query( $q );

        $q   = "DELETE FROM aow_actions";
        $res = $db->query( $q );

        $q   = "DELETE FROM aow_conditions";
        $res = $db->query( $q );

        $q   = "DELETE FROM aow_processed";
        $res = $db->query( $q );

        $q   = "DELETE FROM aow_processed_aow_actions";
        $res = $db->query( $q );

        $q   = "DELETE FROM aow_workflow";
        $res = $db->query( $q );

        $q   = "DELETE FROM aow_workflow_audit";
        $res = $db->query( $q );

        $q   = "DELETE FROM bugs";
        $res = $db->query( $q );

        $q   = "DELETE FROM bugs_audit";
        $res = $db->query( $q );

        $q   = "DELETE FROM calls";
        $res = $db->query( $q );

        $q   = "DELETE FROM calls_contacts";
        $res = $db->query( $q );

        $q   = "DELETE FROM calls_cstm";
        $res = $db->query( $q );

        $q   = "DELETE FROM calls_leads";
        $res = $db->query( $q );

        $q   = "DELETE FROM calls_reschedule";
        $res = $db->query( $q );

        $q   = "DELETE FROM calls_reschedule_audit";
        $res = $db->query( $q );

        $q   = "DELETE FROM calls_users";
        $res = $db->query( $q );

        $q   = "DELETE FROM campaign_log";
        $res = $db->query( $q );

        $q   = "DELETE FROM campaign_trkrs";
        $res = $db->query( $q );

        $q   = "DELETE FROM campaigns";
        $res = $db->query( $q );

        $q   = "DELETE FROM campaigns_audit";
        $res = $db->query( $q );

        $q   = "DELETE FROM campaigns_cstm";
        $res = $db->query( $q );

        $q   = "DELETE FROM cases";
        $res = $db->query( $q );

        $q   = "DELETE FROM cases_audit";
        $res = $db->query( $q );

        $q   = "DELETE FROM cases_bugs";
        $res = $db->query( $q );

        $q   = "DELETE FROM cases_cstm";
        $res = $db->query( $q );

        $q   = "DELETE FROM contacts";
        $res = $db->query( $q );

        $q   = "DELETE FROM contacts_audit";
        $res = $db->query( $q );

        $q   = "DELETE FROM contacts_bugs";
        $res = $db->query( $q );

        $q   = "DELETE FROM contacts_cases";
        $res = $db->query( $q );

        $q   = "DELETE FROM contacts_cstm";
        $res = $db->query( $q );

        $q   = "DELETE FROM contacts_opportunities_1_c";
        $res = $db->query( $q );

        $q   = "DELETE FROM contacts_users";
        $res = $db->query( $q );

        $q   = "DELETE FROM cron_remove_documents";
        $res = $db->query( $q );

        $q   = "DELETE FROM document_revisions";
        $res = $db->query( $q );

        $q   = "DELETE FROM documents";
        $res = $db->query( $q );

        $q   = "DELETE FROM documents_accounts";
        $res = $db->query( $q );

        $q   = "DELETE FROM documents_bugs";
        $res = $db->query( $q );

        $q   = "DELETE FROM documents_cases";
        $res = $db->query( $q );

        $q   = "DELETE FROM documents_contacts";
        $res = $db->query( $q );

        $q   = "DELETE FROM documents_opportunities";
        $res = $db->query( $q );

        $q   = "DELETE FROM email_addr_bean_rel WHERE bean_module <> 'Users'";
        $res = $db->query( $q );

        $q   = "DELETE FROM email_addresses WHERE id NOT IN (SELECT email_address_id FROM email_addr_bean_rel)";
        $res = $db->query( $q );

        $q   = "DELETE FROM email_addresses_audit";
        $res = $db->query( $q );

        $q   = "DELETE FROM email_cache";
        $res = $db->query( $q );

        $q   = "DELETE FROM email_marketing";
        $res = $db->query( $q );

        $q   = "DELETE FROM email_marketing_prospect_lists";
        $res = $db->query( $q );

        /*$q   = "delete from email_templates";
        $res = $db->query( $q );*/

        $q   = "DELETE FROM emailman";
        $res = $db->query( $q );

        $q   = "DELETE FROM emails";
        $res = $db->query( $q );

        $q   = "DELETE FROM emails_beans";
        $res = $db->query( $q );

        $q   = "DELETE FROM emails_email_addr_rel";
        $res = $db->query( $q );

        $q   = "DELETE FROM emails_text";
        $res = $db->query( $q );

        $q   = "DELETE FROM folders";
        $res = $db->query( $q );

        $q   = "DELETE FROM folders_rel";
        $res = $db->query( $q );

        $q   = "DELETE FROM folders_subscriptions";
        $res = $db->query( $q );

        $q   = "DELETE FROM fp_event_locations";
        $res = $db->query( $q );

        $q   = "DELETE FROM fp_event_locations_audit";
        $res = $db->query( $q );

        $q   = "DELETE FROM fp_event_locations_fp_events_1_c";
        $res = $db->query( $q );

        $q   = "DELETE FROM fp_events";
        $res = $db->query( $q );

        $q   = "DELETE FROM fp_events_audit";
        $res = $db->query( $q );

        $q   = "DELETE FROM fp_events_contacts_c";
        $res = $db->query( $q );

        $q   = "DELETE FROM fp_events_fp_event_delegates_1_c";
        $res = $db->query( $q );

        $q   = "DELETE FROM fp_events_fp_event_locations_1_c";
        $res = $db->query( $q );

        $q   = "DELETE FROM fp_events_leads_1_c";
        $res = $db->query( $q );

        $q   = "DELETE FROM fp_events_prospects_1_c";
        $res = $db->query( $q );

        $q   = "DELETE FROM inbound_email";
        $res = $db->query( $q );

        $q   = "DELETE FROM inbound_email_autoreply";
        $res = $db->query( $q );

        $q   = "DELETE FROM inbound_email_cache_ts";
        $res = $db->query( $q );

        $q   = "DELETE FROM jjwg_address_cache";
        $res = $db->query( $q );

        $q   = "DELETE FROM jjwg_address_cache_audit";
        $res = $db->query( $q );

        $q   = "DELETE FROM jjwg_areas";
        $res = $db->query( $q );

        $q   = "DELETE FROM jjwg_areas_audit";
        $res = $db->query( $q );

        $q   = "DELETE FROM jjwg_maps";
        $res = $db->query( $q );

        $q   = "DELETE FROM jjwg_maps_audit";
        $res = $db->query( $q );

        $q   = "DELETE FROM jjwg_maps_jjwg_areas_c";
        $res = $db->query( $q );

        $q   = "DELETE FROM jjwg_maps_jjwg_markers_c";
        $res = $db->query( $q );

        $q   = "DELETE FROM jjwg_markers";
        $res = $db->query( $q );

        $q   = "DELETE FROM jjwg_markers_audit";
        $res = $db->query( $q );

        $q   = "DELETE FROM job_queue";
        $res = $db->query( $q );

        $q   = "DELETE FROM leads";
        $res = $db->query( $q );

        $q   = "DELETE FROM leads_audit";
        $res = $db->query( $q );

        $q   = "DELETE FROM leads_cstm";
        $res = $db->query( $q );

        $q   = "DELETE FROM leads_opportunities_1_c";
        $res = $db->query( $q );

        $q   = "DELETE FROM linked_documents";
        $res = $db->query( $q );

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

        $q   = "DELETE FROM oauth2clients";
        $res = $db->query( $q );

        $q   = "DELETE FROM oauth2tokens";
        $res = $db->query( $q );

        $q   = "DELETE FROM oauth_consumer";
        $res = $db->query( $q );

        $q   = "DELETE FROM oauth_nonce";
        $res = $db->query( $q );

        $q   = "DELETE FROM oauth_tokens";
        $res = $db->query( $q );

        $q   = "DELETE FROM opportunities";
        $res = $db->query( $q );

        $q   = "DELETE FROM opportunities_audit";
        $res = $db->query( $q );

        $q   = "DELETE FROM opportunities_cases_1_c";
        $res = $db->query( $q );

        $q   = "DELETE FROM opportunities_contacts";
        $res = $db->query( $q );

        $q   = "DELETE FROM opportunities_cstm";
        $res = $db->query( $q );

        /* $q   = "DELETE FROM outbound_email";
        $res = $db->query( $q );

        $q   = "DELETE FROM outbound_email_audit";
        $res = $db->query( $q ); */

        $q   = "DELETE FROM project";
        $res = $db->query( $q );

        $q   = "DELETE FROM project_contacts_1_c";
        $res = $db->query( $q );

        $q   = "DELETE FROM project_cstm";
        $res = $db->query( $q );

        $q   = "DELETE FROM project_task";
        $res = $db->query( $q );

        $q   = "DELETE FROM project_task_audit";
        $res = $db->query( $q );

        $q   = "DELETE FROM project_users_1_c";
        $res = $db->query( $q );

        $q   = "DELETE FROM projects_accounts";
        $res = $db->query( $q );

        $q   = "DELETE FROM projects_bugs";
        $res = $db->query( $q );

        $q   = "DELETE FROM projects_cases";
        $res = $db->query( $q );

        $q   = "DELETE FROM projects_contacts";
        $res = $db->query( $q );

        $q   = "DELETE FROM projects_opportunities";
        $res = $db->query( $q );

        $q   = "DELETE FROM projects_products";
        $res = $db->query( $q );

        $q   = "DELETE FROM prospect_list_campaigns";
        $res = $db->query( $q );

        $q   = "DELETE FROM prospect_lists";
        $res = $db->query( $q );

        $q   = "DELETE FROM prospect_lists_prospects";
        $res = $db->query( $q );

        $q   = "DELETE FROM prospects";
        $res = $db->query( $q );

        $q   = "DELETE FROM prospects_cstm";
        $res = $db->query( $q );

        $q   = "DELETE FROM releases";
        $res = $db->query( $q );

        $q   = "DELETE FROM reminders";
        $res = $db->query( $q );

        $q   = "DELETE FROM reminders_invitees";
        $res = $db->query( $q );

        $q   = "DELETE FROM saved_search";
        $res = $db->query( $q );

        $q   = "DELETE FROM schedulers";
        $res = $db->query( $q );

        $q   = "DELETE FROM securitygroups";
        $res = $db->query( $q );

        $q   = "DELETE FROM securitygroups_acl_roles";
        $res = $db->query( $q );

        $q   = "DELETE FROM securitygroups_audit";
        $res = $db->query( $q );

        $q   = "DELETE FROM securitygroups_default";
        $res = $db->query( $q );

        $q   = "DELETE FROM securitygroups_records";
        $res = $db->query( $q );

        $q   = "DELETE FROM securitygroups_users";
        $res = $db->query( $q );

        $q   = "DELETE FROM spots";
        $res = $db->query( $q );

        $q   = "DELETE FROM sugarfeed";
        $res = $db->query( $q );

        $q   = "DELETE FROM surveyquestionoptions";
        $res = $db->query( $q );

        $q   = "DELETE FROM surveyquestionoptions_audit";
        $res = $db->query( $q );

        $q   = "DELETE FROM surveyquestionoptions_surveyquestionresponses";
        $res = $db->query( $q );

        $q   = "DELETE FROM surveyquestionresponses";
        $res = $db->query( $q );

        $q   = "DELETE FROM surveyquestionresponses_audit";
        $res = $db->query( $q );

        $q   = "DELETE FROM surveyquestions";
        $res = $db->query( $q );

        $q   = "DELETE FROM surveyquestions_audit";
        $res = $db->query( $q );

        $q   = "DELETE FROM surveyresponses";
        $res = $db->query( $q );

        $q   = "DELETE FROM surveyresponses_audit";
        $res = $db->query( $q );

        $q   = "DELETE FROM surveys";
        $res = $db->query( $q );

        $q   = "DELETE FROM surveys_audit";
        $res = $db->query( $q );

        $q   = "DELETE FROM tasks";
        $res = $db->query( $q );

        $q   = "DELETE FROM tasks_cstm";
        $res = $db->query( $q );

        $q   = "DELETE FROM templatesectionline";
        $res = $db->query( $q );

        $q   = "DELETE FROM tracker";
        $res = $db->query( $q );

        $q   = "DELETE FROM vcals";
        $res = $db->query( $q );

        $q   = "DELETE FROM veta_abntaxfile";
        $res = $db->query( $q );

        $q   = "DELETE FROM veta_abntaxfile_audit";
        $res = $db->query( $q );

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

        $q   = "DELETE FROM veta_ciudadania";
        $res = $db->query( $q );

        $q   = "DELETE FROM veta_ciudadania_audit";
        $res = $db->query( $q );

        $q   = "DELETE FROM veta_ciudadania_contacts_c";
        $res = $db->query( $q );

        $q   = "DELETE FROM veta_ciudadania_leads_c";
        $res = $db->query( $q );

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

        $q   = "DELETE FROM veta_hijo";
        $res = $db->query( $q );

        $q   = "DELETE FROM veta_hijo_audit";
        $res = $db->query( $q );

        $q   = "DELETE FROM veta_hijo_contacts_c";
        $res = $db->query( $q );

        $q   = "DELETE FROM veta_informacionacademica";
        $res = $db->query( $q );

        $q   = "DELETE FROM veta_informacionacademica_audit";
        $res = $db->query( $q );

        $q   = "DELETE FROM veta_informacionacademica_contacts_c";
        $res = $db->query( $q );

        $q   = "DELETE FROM veta_informacionacademica_leads_c";
        $res = $db->query( $q );

        $q   = "DELETE FROM veta_informacionlaboral";
        $res = $db->query( $q );

        $q   = "DELETE FROM veta_informacionlaboral_audit";
        $res = $db->query( $q );

        $q   = "DELETE FROM veta_informacionlaboral_contacts_c";
        $res = $db->query( $q );

        $q   = "DELETE FROM veta_informacionlaboral_leads_c";
        $res = $db->query( $q );

        $q   = "DELETE FROM veta_liquidacion";
        $res = $db->query( $q );

        $q   = "DELETE FROM veta_liquidacion_audit";
        $res = $db->query( $q );

        $q   = "DELETE FROM veta_liquidacion_cases_c";
        $res = $db->query( $q );

        $q   = "DELETE FROM veta_liquidacion_opportunities_c";
        $res = $db->query( $q );

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

        $q   = "DELETE FROM veta_notificacionpagocolegio_audit";
        $res = $db->query( $q );

        $q   = "DELETE FROM veta_notificacionpagocolegio_veta_pagocolegios_c";
        $res = $db->query( $q );

        $q   = "DELETE FROM veta_otrosnombres";
        $res = $db->query( $q );

        $q   = "DELETE FROM veta_otrosnombres_audit";
        $res = $db->query( $q );

        $q   = "DELETE FROM veta_otrosnombres_contacts_c";
        $res = $db->query( $q );

        $q   = "DELETE FROM veta_otrosnombres_leads_c";
        $res = $db->query( $q );

        $q   = "DELETE FROM veta_pagocolegios";
        $res = $db->query( $q );

        $q   = "DELETE FROM veta_pagocolegios_audit";
        $res = $db->query( $q );

        $q   = "DELETE FROM veta_pagocolegios_opportunities_c";
        $res = $db->query( $q );

        $q   = "DELETE FROM veta_pagos";
        $res = $db->query( $q );

        $q   = "DELETE FROM veta_pagos_audit";
        $res = $db->query( $q );

        $q   = "DELETE FROM veta_pagos_veta_liquidacion_c";
        $res = $db->query( $q );

        $q   = "DELETE FROM veta_pasaporte";
        $res = $db->query( $q );

        $q   = "DELETE FROM veta_pasaporte_audit";
        $res = $db->query( $q );

        $q   = "DELETE FROM veta_pasaporte_contacts_c";
        $res = $db->query( $q );

        $q   = "DELETE FROM veta_pasaporte_leads_c";
        $res = $db->query( $q );

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

        $q   = "DELETE FROM veta_recibo_cstm";
        $res = $db->query( $q );

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

        $q   = "DELETE FROM veta_serviciosadicionales";
        $res = $db->query( $q );

        $q   = "DELETE FROM veta_serviciosadicionales_audit";
        $res = $db->query( $q );

        $q   = "DELETE FROM veta_serviciosadicionales_contacts_c";
        $res = $db->query( $q );

        $q   = "DELETE FROM veta_serviciosadicionales_leads_c";
        $res = $db->query( $q );

        $q   = "DELETE FROM veta_solvenciaeconomica";
        $res = $db->query( $q );

        $q   = "DELETE FROM veta_solvenciaeconomica_audit";
        $res = $db->query( $q );

        $q   = "DELETE FROM veta_solvenciaeconomica_contacts_c";
        $res = $db->query( $q );

        $q   = "DELETE FROM veta_solvenciaeconomica_leads_c";
        $res = $db->query( $q );

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

        Utils::crearSeguros();
    }

    /**
     * Este método crea un escenario con prospectos, contactos, requerimientos, presupuestos, cuentas de cobro, oportunidades, servicio al cliente y visas
     */
    public static function escenarioCtasCobro()
    {
        error_reporting( 0 );
        set_time_limit( 0 );
        $visa = null;
        Utils::escenarioInicial();

        for ( $i = 0; $i < 15; $i++ )
        {
            $newLead = Utils::newLead( true, $i, Utils::newCampaign() );
            Utils::createNewCtaCobro( $newLead, $i );
        }
    }

    /**
     * Este método crea un escenario con prospectos, contactos, requerimientos, presupuestos, cuentas de cobro, oportunidades, servicio al cliente y visas
     */
    public static function escenarioVisas()
    {
        error_reporting( 0 );
        set_time_limit( 30000 );
        $visa = null;
        Utils::escenarioInicial();

        for ( $i = 0; $i < 10; $i++ )
        {
            Utils::createNewVisa( $i );
        }
    }

    public static function escenarioAsignacion(){

        error_reporting( 0 );
        set_time_limit( 30000 );

        Utils::escenarioInicial();
        $campaign = Utils::newCampaign();

        for( $i = 0 ; $i < 25 ; $i++ ){
            $lead = Utils::newLead(true, $i, $campaign);
        }

        for( $i = 0 ; $i < 19 ; $i++ ){
            Utils::newLead(true, $i, $campaign);
            Utils::newLead(true, $i, $campaign);
        }
    }

    /**
     * Este método crea un escenario con prospectos, contactos, requerimientos, presupuestos, cuentas de cobro, oportunidades, aplicaciones y loos
     */
    public static function escenarioLoo()
    {
        error_reporting( 0 );
        set_time_limit( 30000 );

        Utils::escenarioInicial();

        for ( $i = 0; $i < 10; $i++ )
        {
            Utils::createNewLoo( $i );
        }
    }

    /**
     * Este método crea un escenario con prospectos, contactos, requerimientos, presupuestos, cuentas de cobro oportunidades, aplicaciones, loos y liquidaciones
     */
    public static function escenarioLiquidacion()
    {
        Utils::escenarioLoo();

        $loo  = new Veta_Loo();
        $loos = $loo->get_full_list();

        foreach ( $loos as $l )
        {

            $l->estado_loo = 'Carta_Oferta_Firmada';
            $l->save();
        }
    }

    public static function escenarioCOE()
    {
        Utils::escenarioLiquidacion();

        $liq           = new Veta_Liquidacion();
        $liquidaciones = $liq->get_full_list();

        foreach ( $liquidaciones as $l )
        {

            $l->estado_pago_colegios = 'Solicitar_COE';
            $ctaCobro                = $l->obtener_recibo();

            if ( $ctaCobro->pendiente_por_pagar * 1 > 0 )
            {

                $_REQUEST[ "relate_to" ] = 'veta_abono_veta_recibo';
                $_REQUEST[ "relate_id" ] = $ctaCobro->id;

                $abono_veta        = new Veta_Abono();
                $abono_veta->monto = $ctaCobro->pendiente_por_pagar * 1;
                $abono_veta->save();
            }

            $l->save();
        }

    }

    public static function newCampaign()
    {

        $campaign           = new Campaign();
        $campaign->name     = 'Prueba';
        $campaign->origen_c = 'Facebook';
        $campaign->save();

        // Creamos una lista de publico objetivo
        $publicoObjetivo            = new ProspectList();
        $publicoObjetivo->list_type = 'Comerciales';
        $publicoObjetivo->name      = 'Lista de prueba';
        $publicoObjetivo->save();

        $u1 = new User();
        $u1->retrieve( 'a73fe723-6822-95a9-38b6-5a99914b5881' );

        $u2 = new User();
        $u2->retrieve( '1af54b26-9b4b-e14c-912b-5e39a185027c' );

        $u3 = new User();
        $u3->retrieve( '860fb31d-1dbd-a1df-4566-5b86b11c7553' );

        $u4 = new User();
        $u4->retrieve( '7aa90754-8593-fd47-2e2e-5e4b468ff837' );

        $u5 = new User();
        $u5->retrieve( '4be17f19-eb08-b2de-a477-5a942a69015a' );

        $publicoObjetivo->load_relationship( 'users' );

        $publicoObjetivo->users->add( $u1->id );
        $publicoObjetivo->users->add( $u2->id );
        $publicoObjetivo->users->add( $u3->id );
        $publicoObjetivo->users->add( $u4->id );
        $publicoObjetivo->users->add( $u5->id );

        $campaign->load_relationship( 'prospectlists' );
        $campaign->prospectlists->add( $publicoObjetivo->id );

        return $campaign;
    }

    /**
     * Este método crea un nuevo prospecto
     * @param bool $generateEamail Indica si se debe crear un nuevo email aleatorio para el prospecto
     * @return Lead
     */
    public static function newLead( $generateEmail = true, $num = 0, $campaign = null )
    {
        $email = '';

        if ( $generateEmail )
            $email = Utils::generateEmail();

        $person = Utils::$nombres[ $num ];

        $contact                   = new Contact();
        $contact->first_name       = $person[ 'first_name' ];
        $contact->last_name        = $person[ 'last_name' ];
        $contact->fecha_de_viaje_c = $person[ 'fecha_viaje' ];

        $contact->save();

        // Creamos una campaña
        if ( $campaign == null )
        {
            $campaign = Utils::newCampaign();
        }
        else
        {
            $campaign = Utils::newCampaign();
        }


        // Creamos un prospecto y un requerimiento
        $newLead                  = new Lead();
        $newLead->first_name      = $person[ 'first_name' ];
        $newLead->last_name       = $person[ 'last_name' ];
        $newLead->email1          = $email;
        $newLead->campaign_id     = $campaign->id;
        $newLead->lead_source     = 'Facebook';
        $newLead->fecha_viaje_c   = 'Octubre 22';
        $newLead->fecha_viaje_2_c = $person[ 'fecha_viaje' ];;
        $newLead->presupuesto_c           = 1300000;
        $newLead->contact_id              = $contact->id;
        $newLead->phone_mobile            = Utils::generatePhone();
        $newLead->fecha_expiracion_visa_c = $person[ 'fecha_expiracion_visa' ];
        $newLead->save();

        $requerimientos = $newLead->get_linked_beans( 'veta_requerimiento_leads', 'Veta_Requerimiento' );

        foreach ( $requerimientos as $req )
        {
            $req->referido = 'Diego';
            $req->save();
        }

        return $newLead;
    }

    /** Este metodo crea un presupuesto
     * @param $lead
     * @return Veta_Presupuesto
     */
    public static function createNewPresupuesto( $lead )
    {
        $hook        = new SOELHooksLeads();
        $requirement = $hook->get_requirement_by_lead_id_campaign_id( $lead->id, $lead->campaign_id );

        $presupuesto                   = new Veta_Presupuesto();
        $presupuesto->pais             = "Colombia";
        $presupuesto->departamento     = "Colombia_Tolima";
        $presupuesto->ciudad           = "Colombia_Tolima_Ibague";
        $presupuesto->assigned_user_id = '1';

        //$presupuesto->subtotal = Utils::SUBTOTAL;
        //$presupuesto->gran_total = Utils::TOTAL;
        $presupuesto->asegurador  = 'Aseguradador de prueba';
        $presupuesto->duracion    = 10;
        $presupuesto->tipo_seguro = '';
        $presupuesto->descuento   = 5;

        // Todo asignar informacion sobre la relacion entre requerimiento y presupuesto
        $_REQUEST[ "relate_to" ] = 'veta_requerimiento_veta_presupuesto';
        $_REQUEST[ "relate_id" ] = $requirement->id;
        return $presupuesto;
    }

    /**
     * Este metodo crea un nuevo college y un nuevo curso asociado al college
     * @return Veta_Curso
     */
    public static function createNewCurso()
    {

        $college         = new Veta_College();
        $college->name   = 'Colegio Prueba';
        $college->pais   = 'Colombia';
        $college->estado = 'Colombia_Tolima';
        $college->ciudad = 'Colombia_Tolima_Ibague';
        $college->save();

        $curso                    = new Veta_Curso();
        $curso->name              = 'Mi Curso - ' . round( microtime( true ) * 1000 );
        $curso->veta_college_id_c = $college->id;
        $curso->intake            = $college->date_entered;
        $curso->deposito          = 3228;
        $curso->inscripcion       = 250;
        $curso->fecha_expiracion  = '2055-01-01';
        $curso->duracion          = 40;
        $curso->pps               = 188;
        $curso->costo_extra       = 0;
        $curso->costo_materiales  = 989;
        $curso->campus            = 'Mi Campus';
        $curso->jornada           = 'Tarde';
        $curso->intensidad        = 'Completa';
        $curso->tipo_curso        = 'Vet';
        $curso->tps               = 'mi tps';
        $curso->vacaciones        = 'ninguna';

        $curso->save();

        return $curso;
    }

    /**
     * Este metodo crea 10 seguros de prueba
     */
    public static function crearSeguros()
    {

        for ( $i = 1; $i < 10; $i++ )
        {

            $seguro           = new Veta_Seguro();
            $seguro->name     = 'Empresa ' . $i;
            $seguro->single   = $i * 10;
            $seguro->duracion = $i * 1;
            $seguro->couple   = $i * 2;
            $seguro->family   = $i * 3;
            $seguro->save();
        }

        $aux = 10;

    }

    /**
     * Este metodo crea una oportunidad
     * @param int $abono Si abono > 0 crea un abono a la cuenta de cobro
     * @return Opportunity
     */
    public static function createNewOpportunity( $lead, $abono = 0 )
    {

        $ctaCobro = Utils::createNewCtaCobro( $lead, $abono );

        $_GET[ "rid" ] = $ctaCobro->id;
        $proceso_venta = $ctaCobro->new_opportunity();

        return $proceso_venta;
    }

    /**
     * Este metodo crea una cuenta de cobro
     * @param int $abono Si abono > 0 crea un abono a la cuenta de cobro
     * @return Veta_CuentaCobro
     */
    public static function createNewCtaCobro( $lead, $abono = 0 )
    {

        $curso       = Utils::createNewCurso();
        $newLead     = $lead;
        $presupuesto = Utils::createNewPresupuesto( $newLead );
        $presupuesto->save();

        $detalle_presupuesto                   = new Veta_DetallePresupuesto();
        $detalle_presupuesto->veta_curso_id_c  = $curso->id;
        $detalle_presupuesto->bono             = 0;
        $detalle_presupuesto->descripcion_bono = 'Bono prueba';
        $detalle_presupuesto->save();

        $presupuesto->load_relationship( 'veta_detallepresupuesto_veta_presupuesto' );
        $presupuesto->veta_detallepresupuesto_veta_presupuesto->add( $detalle_presupuesto->id );

        $presupuesto->update_totals();

        $cuenta_cobro                                                   = new Veta_Recibo();
        $cuenta_cobro                                                   = $cuenta_cobro->new_recibo( $presupuesto );
        $cuenta_cobro->veta_recibo_veta_presupuestoveta_presupuesto_ida = $presupuesto->id;
        $cuenta_cobro->save();

        $_REQUEST[ "relate_to" ] = 'veta_abono_veta_recibo';
        $_REQUEST[ "relate_id" ] = $cuenta_cobro->id;

        if ( $abono > 0 )
        {
            $abono_veta        = new Veta_Abono();
            $abono_veta->monto = $abono;
            $abono_veta->save();
        }

        return $cuenta_cobro;
    }

    /**
     * Este metodo crea una nueva visa
     * @return Veta_Visa
     */
    public static function createNewVisa( $num )
    {
        error_reporting( 0 );
        $visa = null;
        //Utils::escenarioInicial();
        $newLead       = Utils::newLead( true, $num, Utils::newCampaign() );
        $proceso_venta = Utils::createNewOpportunity( $newLead, Utils::TOTAL );

        $sc  = new Veta_ServicioCliente();
        $scs = $sc->get_full_list();

        foreach ( $scs as $sc )
        {

            $sc->estado = 'Visa';
            $sc->save();
            $visa = $sc->get_linked_beans( 'veta_visa_veta_serviciocliente', 'Veta_Visa' );
        }

        return $visa;
    }

    /**
     * Este metodo crea una nueva carta de oferta LOO
     * @param $num
     */
    public static function createNewLoo( $num )
    {

        error_reporting( 0 );
        $visa = null;
        //Utils::escenarioInicial();
        $newLead       = Utils::newLead( true, $num, Utils::newCampaign() );
        $proceso_venta = Utils::createNewOpportunity( $newLead, Utils::TOTAL );

        $a    = new Veta_Aplicacion();
        $apps = $a->get_full_list();

        foreach ( $apps as $app )
        {
            $app->estado_aplicacion = 'Aplicacion_Enviada';
            $app->save();
        }
    }
}