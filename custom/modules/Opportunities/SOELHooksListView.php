<?php

class SOELHooksListView
{
    function ver_oficina( $focus, $event, $args )
    {

        $person = $this->get_person( $focus );

        if ( isset( $person ) )
        {

            $u = new User();
            $u->retrieve( $person->assigned_user_id );
            $focus->soel_oficina = $u->address_city;
        }

        $this->set_vistos_buenos( $focus );
    }

    /**
     * Este metodo establece los vistos buenos para la oportunidad los cuales son tomados del prospecto
     * @param $focus
     */
    private function set_vistos_buenos( $focus )
    {

        $focus->soel_visto_bueno_comercial = 0;

        /*$query = "SELECT estudiante.id as eid, prospecto.id as pid,
                    IFNULL(prospecto_cstm.ok_comercial_c, IFNULL(convertido_cstm.ok_comercial_c,0) ) as visto_bueno_comercial, 
                    IFNULL(prospecto_cstm.ok_visas_c, IFNULL(convertido_cstm.ok_visas_c,0) ) as visto_bueno_visas,
                    prospecto.id AS PROSPECTO_ID,
                    TRIM(UPPER(CONCAT(prospecto.first_name, ' ', prospecto.last_name))) AS PROSPECTO
                    FROM opportunities venta 
                    LEFT JOIN contacts_opportunities_1_c ON contacts_opportunities_1_c.contacts_opportunities_1opportunities_idb = venta.id AND contacts_opportunities_1_c.deleted = 0
                    LEFT JOIN contacts estudiante ON estudiante.id = contacts_opportunities_1_c.contacts_opportunities_1contacts_ida 
                    LEFT JOIN leads_opportunities_1_c ON leads_opportunities_1_c.leads_opportunities_1opportunities_idb = venta.id AND leads_opportunities_1_c.deleted = 0
                    LEFT JOIN leads prospecto ON prospecto.id = leads_opportunities_1_c.leads_opportunities_1leads_ida 
                    LEFT JOIN leads_cstm prospecto_cstm ON prospecto_cstm.id_c = prospecto.id 
                    LEFT JOIN leads convertido ON convertido.contact_id = estudiante.id
                    LEFT JOIN leads_cstm convertido_cstm on convertido_cstm.id_c = convertido.id                     
                    WHERE venta.deleted = 0 AND venta.id = '" . $focus->id . "'";*/

        $query = "SELECT 
                    IFNULL(veta_requerimiento.visto_bueno_comercial, 0 ) as visto_bueno_comercial,
                    IFNULL(veta_requerimiento.visto_bueno_visas, 0 ) as visto_bueno_visas
                 FROM opportunities venta   
                 LEFT JOIN veta_recibo_opportunities_c ON veta_recibo_opportunities_c.veta_recibo_opportunitiesopportunities_idb = venta.id AND veta_recibo_opportunities_c.deleted =0
                 LEFT JOIN veta_requerimiento_veta_recibo_c ON veta_requerimiento_veta_recibo_c.veta_requerimiento_veta_reciboveta_recibo_idb = veta_recibo_opportunities_c.veta_recibo_opportunitiesveta_recibo_ida AND veta_requerimiento_veta_recibo_c.deleted = 0
                 LEFT JOIN veta_requerimiento ON veta_requerimiento.id = veta_requerimiento_veta_recibo_c.veta_requerimiento_veta_reciboveta_requerimiento_ida AND veta_requerimiento.deleted = 0 
                 WHERE venta.deleted = 0 AND venta.id = '" . $focus->id . "'";


        $result = $focus->db->query( $query, true, "Error obteniendo el visto bueno comercial del requerimiento" );
        $row    = $focus->db->fetchByAssoc( $result );

        if ( $row != null )
        {

            $focus->soel_visto_bueno_comercial = $row[ 'visto_bueno_comercial' ];
            $focus->soel_visto_bueno_visas     = $row[ 'visto_bueno_visas' ];
        }
    }

    private function get_person( Opportunity $o )
    {

        $p = null;

        $leads    = $o->get_linked_beans( 'leads_opportunities_1', 'Leads' );
        $contacts = $o->get_linked_beans( 'contacts_opportunities_1', 'Contacts' );

        foreach ( $leads as $lead )
        {
            $p = $lead;
        }

        foreach ( $contacts as $contact )
        {
            $p = $contact;
        }

        return $p;
    }

    function procesar( &$bean, $event, $args )
    {
        $this->asignar_info( $bean );
        $this->asignar_info_person( $bean );
    }

    private function asignar_info( &$bean )
    {
        global $current_user;
        $dateformat = $current_user->getPreference( 'datef' );

        $query = "SELECT  
                    veta_requerimiento.referido AS REFERIDO,
                    veta_requerimiento.fecha_viaje AS FECHAVIAJE,
                    veta_requerimiento.id AS ID_REQUERIMIENTO,
                    veta_requerimiento.name AS REQUERIMIENTO,   
                    veta_requerimiento.localizacion AS LOCALIZACION
                FROM opportunities 
                INNER JOIN veta_recibo_opportunities_c ON veta_recibo_opportunities_c.veta_recibo_opportunitiesopportunities_idb = opportunities.id AND veta_recibo_opportunities_c.deleted = 0 
                INNER JOIN veta_requerimiento_veta_recibo_c ON veta_requerimiento_veta_recibo_c.veta_requerimiento_veta_reciboveta_recibo_idb = veta_recibo_opportunities_c.veta_recibo_opportunitiesveta_recibo_ida AND veta_requerimiento_veta_recibo_c.deleted = 0
                INNER JOIN veta_requerimiento ON veta_requerimiento.id =  veta_requerimiento_veta_recibo_c.veta_requerimiento_veta_reciboveta_requerimiento_ida
                 WHERE veta_requerimiento.deleted = 0 AND opportunities.deleted = 0 AND opportunities.id = '" . $bean->id . "'";

        $result = $bean->db->query( $query, true, "Error obteniendo informacion del comercial asociado al proceso de venta " . $bean->id );
        $row    = $bean->db->fetchByAssoc( $result );

        if ( $row != null )
        {
            $bean->soel_localizacion = $row[ 'LOCALIZACION' ];
            $bean->soel_referido = $row[ 'REFERIDO' ];

            if ( ! empty( $row[ 'FECHAVIAJE' ] ) )
            {
                $aux                    = date_create( $row[ 'FECHAVIAJE' ] );
                $bean->soel_fecha_viaje = date_format( $aux, $dateformat );
            }

            $loc                      = "index.php?action=DetailView&module=Veta_Requerimiento&record={$row['ID_REQUERIMIENTO']}";
            $bean->soel_requerimiento = "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='{$loc}' target=\"_blank\" style='border:none;' >{$row['REQUERIMIENTO']}</a>";
        }

        return $bean;
    }

    public function get_persona( $bean )
    {

        $p = null;

        $leads    = $bean->get_linked_beans( 'leads_opportunities_1', 'Leads' );
        //$contacts = $bean->get_linked_beans( 'contacts_opportunities_1', 'Contacts' );

        foreach ( $leads as $lead )
        {
            $p = $lead;
        }

        /*foreach ( $contacts as $contact )
        {
            $p = $contact;
        }*/

        return $p;

    }

    private function asignar_info_person( &$bean )
    {
        $person = $this->get_persona( $bean );

        if ( isset( $person ) )
        {
            $bean->soel_fecha_expiracion_visa = $person->fecha_expiracion_visa_c;
            $bean->soel_ciudad_tmp = $person->ciudad_tmp_c;
        }

        return $bean;
    }
}