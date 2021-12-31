<?php

class Veta_RequerimientoViewNew extends ViewEdit
{
    public function __construct()
    {
        parent::__construct();
    }

    public function display()
    {
        $this->load_lead_info();
        $this->load_contact_info();

        $this->ss->assign( "TELCASA", $this->TELCASA );
        $this->ss->assign('CELULAR' , $this->CELULAR);
        $this->ss->assign('FECHA_EXPIRACION_VISA', $this->FECHA_EXPIRACION_VISA);
        $this->ss->assign('EMAIL', $this->EMAIL);

        parent::display();
    }

    /**
     * Carga información adicional que tiene como origen el prospecto
     */
    private function load_lead_info()
    {
        global $current_user;
        $dateformat    = $current_user->getPreference( 'datef' );

        $query = "SELECT leads.id AS ID, 
                    CONCAT(leads.first_name, ' ' , leads.last_name) AS NOMBRE,
                    CONCAT(asignado.first_name, ' ', asignado.last_name) AS ASIGNADO,
                    TRIM(UPPER(asignado.address_city)) AS OFICINA,
                    leads.phone_home as TELCASA,
                    leads.phone_mobile as CELULAR,
                    leads_cstm.fecha_expiracion_visa_c AS FECHA_EXPIRACION_VISA,
                    leads_cstm.expiracion_visa_c AS FECHAEXPIRACIONVISATEXTO,
                    leads_cstm.edad_c AS EDAD,
                    leads.date_modified AS FECHAMODIFICACION,
                    if(leads.converted = 1, \"YES\", \"NO\" )AS CONVERTIDO,
                    leads.status AS ESTADO,
                    leads.lead_source AS FUENTE,
                    leads_cstm.pais_c AS PAIS,
                    leads_cstm.departamento_c AS DPTO,
                    leads_cstm.ciudad_c AS CIUDAD,
                    leads_cstm.visa_c AS VISA,
                    leads_cstm.pasaporte_c AS PASAPORTE,
                    leads_cstm.ciudad_tmp_c AS CIUDADTMP,
                    leads_cstm.carrera_universitaria_c AS CARRERAUNIVERSITARIA,
                    leads_cstm.trabajo_actual_c AS TRABAJOACTUAL,
                    campaigns.name as CAMPANA                    
                FROM leads 
                INNER JOIN leads_cstm ON leads_cstm.id_c = leads.id 
                INNER JOIN veta_requerimiento_leads_c ON veta_requerimiento_leads_c.veta_requerimiento_leadsleads_ida = leads.id AND veta_requerimiento_leads_c.deleted = 0 
                INNER JOIN veta_requerimiento ON veta_requerimiento.id = veta_requerimiento_leads_c.veta_requerimiento_leadsveta_requerimiento_idb                
                LEFT JOIN users asignado ON asignado.id = leads.assigned_user_id AND asignado.deleted = 0
                LEFT JOIN campaigns ON campaigns.id = leads.campaign_id AND campaigns.deleted = 0 
                WHERE veta_requerimiento.deleted = 0 AND veta_requerimiento.id = '" . $this->bean->id . "'";

        $result = $this->bean->db->query( $query, true,
            "Error obteniendo informacion del prospecto asociado al requerimiento " . $this->bean->id
        );
        $row    = $this->bean->db->fetchByAssoc( $result );

        if ( $row != null )
        {
            $lead = new Lead();
            $lead->retrieve( $row[ 'ID' ] );

            $this->TELCASA   = $row[ 'TELCASA' ];
            $this->CELULAR   = $row[ 'CELULAR' ];

            $this->EMAIL     = $lead->email1;

            if ( ! empty($row[ 'FECHA_EXPIRACION_VISA' ]) )
            {
                $aux                                       = date_create( $row[ 'FECHA_EXPIRACION_VISA' ] );
                $this->FECHA_EXPIRACION_VISA = date_format( $aux, $dateformat );
            }
        }
    }

    private function load_contact_info()
    {
        global $current_user;
        $dateformat    = $current_user->getPreference( 'datef' );

        $query = "SELECT contacts.id AS ID, 
                    CONCAT(contacts.first_name, ' ' , contacts.last_name) AS NOMBRE,
                    CONCAT(asignado.first_name, ' ', asignado.last_name) AS ASIGNADO,
                    TRIM(UPPER(asignado.address_city)) AS OFICINA,
                    contacts.phone_home AS TELCASA,
                    contacts.phone_mobile AS CELULAR,
                    contacts.lead_source AS FUENTE,
                    contacts_cstm.pais_c AS PAIS,
                    contacts_cstm.departamento_c AS DEPARTAMENTO,
                    contacts_cstm.ciudad_c AS CIUDAD,     
                    contacts_cstm.fecha_expiracion_visa_c AS FECHA_EXPIRACION_VISA,
                    contacts.date_modified AS FECHAMODIFICACION,
                    contacts_cstm.visa_c AS VISA,
                    contacts_cstm.carrera_universitaria_c AS CARRERAUNIVERSITARIA,
                    contacts_cstm.trabajo_actual_c AS TRABAJOACTUAL,
                    contacts_cstm.pasaporte_c AS PASAPORTE,
                    campaigns.name as CAMPANA                                   
                FROM contacts 
                INNER JOIN contacts_cstm ON contacts_cstm.id_c = contacts.id 
                INNER JOIN veta_requerimiento_contacts_c ON veta_requerimiento_contacts_c.veta_requerimiento_contactscontacts_ida = contacts.id AND veta_requerimiento_contacts_c.deleted = 0 
                INNER JOIN veta_requerimiento ON veta_requerimiento.id = veta_requerimiento_contacts_c.veta_requerimiento_contactsveta_requerimiento_idb                
                LEFT JOIN users asignado ON asignado.id = contacts.assigned_user_id AND asignado.deleted = 0
                LEFT JOIN campaigns ON campaigns.id = contacts.campaign_id AND campaigns.deleted = 0 
                 WHERE veta_requerimiento.deleted = 0 AND veta_requerimiento.id = '" . $this->bean->id . "'";

        $result = $this->bean->db->query( $query, true,
            "Error obteniendo informacion del contacto asociado al requerimiento " . $this->bean->id
        );
        $row    = $this->bean->db->fetchByAssoc( $result );

        if ( $row != null )
        {
            $contact = new Contact();
            $contact->retrieve( $row[ 'ID' ] );

            $this->TELCASA   = empty( $this->TELCASA ) ? $row[ 'TELCASA' ] : $this->TELCASA;
            $this->CELULAR   = empty( $this->CELULAR ) ? $row[ 'CELULAR' ] : $this->CELULAR;
            $this->EMAIL     = empty( $this->EMAIL ) ? $contact->email1 : $this->EMAIL;

            if ( ! empty($row[ 'FECHA_EXPIRACION_VISA' ]) AND empty( $this->FECHA_EXPIRACION_VISA ) )
            {
                $aux                                       = date_create( $row[ 'FECHA_EXPIRACION_VISA' ] );
                $this->FECHA_EXPIRACION_VISA = date_format( $aux, $dateformat );
            }
        }
    }

    public function preDisplay()
    {
        // parent::preDisplay(); // TODO: Change the autogenerated stub

        $metadataFile = "modules/Veta_Requerimiento/metadata/newviewdefs.php";
        $this->ev = new EditView();
        $this->ev->ss =& $this->ss;
        $this->ev->view = "update";

        $this->ev->setup($this->module, $this->bean, $metadataFile, 'include/EditView/EditView.tpl', true, 'newviewdefs');
    }

}
