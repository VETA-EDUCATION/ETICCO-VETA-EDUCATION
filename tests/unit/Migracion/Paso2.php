<?php

require_once( 'Paso.php' );

class Paso2 extends Paso
{
    /**
     *  Obtiene el estado del requerimiento en este paso
     * @param Opportunity $o
     * @param Veta_Recibo $r
     * @return string
     */
    private function getEstadoRequerimiento( Opportunity $o, Veta_Recibo $r )
    {
        $estado = 'Asignado';
        $abono  = $r->get_primer_abono();

        if ( isset( $abono ) )
        {
            $estado = 'Cerrado';
        }

        if ( $o->sales_stage == 'Descartado' )
        {
            $estado = 'Descartado';
        }
        /*elseif ( $o->sales_stage == 'Finalizado' )
        {
            $estado = 'Completado';
        }*/

        return $estado;
    }

    /**
     * Relaciona un requerimiento con un prospecto y/o estudiante
     * @param Veta_Requerimiento $req
     * @param $person El prospecto o estudiante
     */
    private function relacionarPersona( Veta_Requerimiento $req, $person )
    {
        // Creamos la relacion con el prospecto o el estudiante
        if ( $person->module_name == 'Leads' )
        {
            $req->load_relationship( 'veta_requerimiento_leads' );
            $req->veta_requerimiento_leads->add( $person->id );
            $req->save(); // Salvamos nuevamente el requerimiento para que intente crear la relacion entre el requerimiento y el estudiante relacionado con el prospecto
        }
        else
        {
            $req->load_relationship( 'veta_requerimiento_contacts' );
            $req->veta_requerimiento_contacts->add( $person->id );

            if ( ! empty( $person->LEADID ) )
            {
                $req->load_relationship( 'veta_requerimiento_leads' );
                $req->veta_requerimiento_leads->add( $person->LEADID );
            }

        }
    }

    /**
     * Crea una relacion entre un requerimiento y un recibo
     * @param Veta_Requerimiento $req
     * @param Veta_Recibo $recibo
     */
    private function relacionarRecibo( Veta_Requerimiento $req, Veta_Recibo $recibo )
    {
        // Creamos la relacion con la cta de cobro
        $recibo->load_relationship( 'veta_requerimiento_veta_recibo' );
        $recibo->veta_requerimiento_veta_recibo->add( $req->id );
    }

    /**
     * Este metodo crea una relacion entre un requerimiento y un presupuesto
     * @param Veta_Requerimiento $req
     * @param Veta_Presupuesto $presupuesto
     */
    private function relacionarPresupuesto( Veta_Requerimiento $req, Veta_Presupuesto $presupuesto )
    {
        // Creamos la relacion con el presupuesto
        if ( isset( $presupuesto ) )
        {
            $presupuesto->load_relationship( 'veta_requerimiento_veta_presupuesto' );
            $presupuesto->veta_requerimiento_veta_presupuesto->add( $req->id );
        }
    }

    /**
     * LLena un objeto de tipo requerimiento con un registro de la BD
     * @param Veta_Requerimiento $req
     * @param $row
     * @return Contact|Lead
     */
    private function llenarRequerimiento( Veta_Requerimiento &$req, $row )
    {
        $person = null;

        if ( ! empty( $row[ 'CONTACTID' ] ) )
        {
            $person = new Contact();
            $person->retrieve( $row[ 'CONTACTID' ] );

            $req->fecha_viaje_txt        = $person->fecha_viaje_c;
            $req->fecha_viaje            = $person->fecha_de_viaje_c;
            $req->presupuesto            = $person->presupuesto_c;
            $req->assigned_user_id       = $person->assigned_user_id;
            $req->fecha_proximo_contacto = $person->fecha_proximo_contacto_c;
            $req->fecha_ultimo_contacto  = $person->fecha_ultimo_contacto_c;

            if ( empty( $req->campaign_id_c ) )
            {
                $req->campaign_id_c = $person->campaign_id_c;
                $req->fuente        = $person->lead_source;
            }

            if ( ! empty( $row[ 'LEADID' ] ) )
            {
                $person->LEADID = $row[ 'LEADID' ];
            }
        }

        if ( /*empty( $row[ 'CONTACTID' ] ) and*/ ! empty( $row[ 'LEADID' ] ) )
        {
            $person = new Lead();
            $person->retrieve( $row[ 'LEADID' ] );

            $req->fecha_viaje_txt        = $person->fecha_viaje_txt;
            $req->fecha_viaje            = $person->fecha_viaje_2_c;
            $req->presupuesto            = $person->presupuesto_c;
            $req->campaign_id_c          = $person->campaign_id_c;
            $req->fuente                 = $person->lead_source;
            $req->assigned_user_id       = $person->assigned_user_id;
            $req->fecha_proximo_contacto = $person->fecha_proximo_contacto_c;
            $req->fecha_ultimo_contacto  = $person->fecha_ultimo_contacto_c;
        }

        return $person;
    }

    /**
     * Ejecuta el paso 2
     */
    function ejecutar()
    {
        $c  = $this->crearCampana();
        $db = DBManagerFactory::getInstance();

        $q = "SELECT DISTINCT 
                    veta_recibo_opportunities_c.veta_recibo_opportunitiesopportunities_idb AS OPORTUNIDADID,
                    veta_recibo.id AS RECIBOID,
                    veta_recibo_leads_c.veta_recibo_leadsleads_ida AS LEADID,
                    veta_recibo_contacts_c.veta_recibo_contactscontacts_ida AS CONTACTID,
                    veta_recibo_veta_presupuesto_c.veta_recibo_veta_presupuestoveta_presupuesto_ida AS PRESUPUESTOID
                    FROM veta_recibo
                    INNER JOIN veta_recibo_opportunities_c ON veta_recibo_opportunities_c.veta_recibo_opportunitiesveta_recibo_ida = veta_recibo.id AND veta_recibo_opportunities_c.deleted = 0
                    LEFT JOIN veta_recibo_leads_c ON veta_recibo_leads_c.veta_recibo_leadsveta_recibo_idb = veta_recibo.id AND veta_recibo_leads_c.deleted = 0
                    LEFT JOIN veta_recibo_contacts_c ON veta_recibo_contacts_c.veta_recibo_contactsveta_recibo_idb = veta_recibo.id AND veta_recibo_contacts_c.deleted = 0
                    LEFT JOIN veta_recibo_veta_presupuesto_c ON veta_recibo_veta_presupuesto_c.veta_recibo_veta_presupuestoveta_recibo_idb = veta_recibo.id AND veta_recibo_veta_presupuesto_c.deleted = 0
                    WHERE veta_recibo.deleted = 0 
                    AND (veta_recibo_leads_c.veta_recibo_leadsleads_ida IS NOT NULL OR veta_recibo_contacts_c.veta_recibo_contactscontacts_ida IS NOT NULL) ";

        // $q .= " AND veta_recibo_leads_c.veta_recibo_leadsleads_ida = '46c14b7d-914d-3679-9d4d-5fd249cd07b7'";

        $res = $db->query( $q );

        while ( $row = $db->fetchByAssoc( $res ) )
        {
            $presupuesto                      = null;
            $req                              = new Veta_Requerimiento();
            $req->set_estado_al_requerimiento = true;

            $o = new Opportunity();
            $o->retrieve( $row[ 'OPORTUNIDADID' ] );

            $recibo = new Veta_Recibo();
            $recibo->retrieve( $row[ 'RECIBOID' ] );

            if ( ! empty( $row[ 'PRESUPUESTOID' ] ) )
            {
                $presupuesto = new Veta_Presupuesto();
                $presupuesto->retrieve( $row[ 'PRESUPUESTOID' ] );

                $req->fecha_primer_presupuesto = $presupuesto->date_entered;
            }

            $person = $this->llenarRequerimiento( $req, $row );

            $req->estado = $this->getEstadoRequerimiento( $o, $recibo );
            $req->save();

            $this->relacionarPersona( $req, $person );
            $this->relacionarRecibo( $req, $recibo );
            $this->relacionarPresupuesto( $req, $presupuesto );
        }
    }

    function mostrarResultado()
    {
        $db = DBManagerFactory::getInstance();

        $q = "SELECT DISTINCT 
                veta_recibo_opportunities_c.veta_recibo_opportunitiesopportunities_idb AS OPORTUNIDADID,
                veta_recibo.id AS RECIBOID,
                veta_recibo_leads_c.veta_recibo_leadsleads_ida AS LEADID,
                veta_recibo_contacts_c.veta_recibo_contactscontacts_ida AS CONTACTID,
                veta_recibo_veta_presupuesto_c.veta_recibo_veta_presupuestoveta_presupuesto_ida AS PRESUPUESTOID,
                opportunities.name AS OPORTUNIDAD,
                veta_recibo.name AS RECIBO,
                veta_requerimiento.name AS REQUERIMIENTO,
                veta_requerimiento.id AS REQUERIMIENTOID,
                opportunities.sales_stage AS ETAPAVENTAS,
                veta_recibo.estado AS ESTADORECIBO,
                veta_requerimiento.estado AS ESTADOREQUERIMIENTO,
                CONCAT(leads.first_name, ' ' ,leads.last_name) AS PROSPECTO,
                CONCAT(contacts.first_name, ' ' ,contacts.last_name) AS CONTACTO,
                leads_cstm.fecha_proximo_contacto_c AS PROXIMOCONTACTOLEAD,
                leads_cstm.fecha_ultimo_contacto_c AS ULTIMOCONTACTOLEAD,
                veta_requerimiento.fecha_proximo_contacto AS PROXIMOCONTACTOREQ,
                veta_requerimiento.fecha_ultimo_contacto AS ULTIMOCONTACTOREQ,    
                veta_presupuesto.name AS PRESUPUESTO
                FROM veta_recibo
                INNER JOIN veta_recibo_opportunities_c ON veta_recibo_opportunities_c.veta_recibo_opportunitiesveta_recibo_ida = veta_recibo.id AND veta_recibo_opportunities_c.deleted = 0 
                INNER JOIN opportunities ON opportunities.id = veta_recibo_opportunities_c.veta_recibo_opportunitiesopportunities_idb AND opportunities.deleted = 0
                LEFT JOIN veta_recibo_leads_c ON veta_recibo_leads_c.veta_recibo_leadsveta_recibo_idb = veta_recibo.id AND veta_recibo_leads_c.deleted = 0
                LEFT JOIN veta_recibo_contacts_c ON veta_recibo_contacts_c.veta_recibo_contactsveta_recibo_idb = veta_recibo.id AND veta_recibo_contacts_c.deleted = 0
                LEFT JOIN veta_recibo_veta_presupuesto_c ON veta_recibo_veta_presupuesto_c.veta_recibo_veta_presupuestoveta_recibo_idb = veta_recibo.id AND veta_recibo_veta_presupuesto_c.deleted = 0 
                LEFT JOIN veta_requerimiento_veta_recibo_c ON veta_requerimiento_veta_recibo_c.veta_requerimiento_veta_reciboveta_recibo_idb = veta_recibo.id AND veta_requerimiento_veta_recibo_c.deleted = 0 
                LEFT JOIN veta_requerimiento ON veta_requerimiento.id = veta_requerimiento_veta_recibo_c.veta_requerimiento_veta_reciboveta_requerimiento_ida AND veta_requerimiento.deleted = 0 
                LEFT JOIN leads ON leads.id = veta_recibo_leads_c.veta_recibo_leadsleads_ida AND leads.deleted = 0 
                LEFT JOIN contacts ON contacts.id = veta_recibo_contacts_c.veta_recibo_contactscontacts_ida AND contacts.deleted = 0 
                LEFT JOIN veta_presupuesto ON veta_presupuesto.id = veta_recibo_veta_presupuesto_c.veta_recibo_veta_presupuestoveta_presupuesto_ida  
                INNER JOIN leads_cstm ON leads.id = leads_cstm.id_c
                WHERE veta_recibo.deleted = 0 
                AND (veta_recibo_leads_c.veta_recibo_leadsleads_ida IS NOT NULL OR veta_recibo_contacts_c.veta_recibo_contactscontacts_ida IS NOT NULL)";

        // $q .= " AND leads.id = '46c14b7d-914d-3679-9d4d-5fd249cd07b7'";

        $res = $db->query( $q );

        $html = "<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">
                <TABLE  class=\"table table-striped table-hover\" style='overflow-y: auto; height: 50vh;'>
                <THEAD class=\"thead-dark\" style='position: sticky;top: 0;'>
                    <TR>
                        <TH scope=\"col\" style='position: sticky;top: 0;'>#</TH>
                        <TH scope=\"col\" style='position: sticky;top: 0;'>PROCESO VENTAS</TH>
                        <TH scope=\"col\" style='position: sticky;top: 0;'>CUENTA COBRO</TH>
                        <TH scope=\"col\" style='position: sticky;top: 0;'>PRESUPUESTO</TH>
                        <TH scope=\"col\" style='position: sticky;top: 0;'>REQUERIMIENTO</TH>
                        <TH scope=\"col\" style='position: sticky;top: 0;'>PROSPECTO</TH>
                        <TH scope=\"col\" style='position: sticky;top: 0;'>CONTACTO</TH>     
                        <TH scope=\"col\" style='position: sticky;top: 0;'>ETAPA VENTAS</TH>
                        <TH scope=\"col\" style='position: sticky;top: 0;'>ESTADO RECIBO</TH>
                        <TH scope=\"col\" style='position: sticky;top: 0;'>ESTADO REQUERIMIENTO</TH>
                        <TH scope=\"col\" style='position: sticky;top: 0;'>PROXIMO CONTACTO LEAD</TH>  
                        <TH scope=\"col\" style='position: sticky;top: 0;'>ULTIMO CONTACTO LEAD</TH>            
                        <TH scope=\"col\" style='position: sticky;top: 0;'>PROXIMO CONTACTO REQ</TH>
                        <TH scope=\"col\" style='position: sticky;top: 0;'>ULTIMO CONTACTO REQ</TH>          
                    </TR>            
                </THEAD>
                <TBODY>";

        $i = 1;
        while ( $row = $db->fetchByAssoc( $res ) )
        {

            $html .= "<TR>
                        <TD>$i</TD>
                        <TD><a href='index.php?module=Opportunities&action=DetailView&record=" . $row[ 'OPORTUNIDADID' ] . "' target='_blank'>" . $row[ 'OPORTUNIDAD' ] . "</a></TD>
                        <TD><a href='index.php?module=Veta_Recibo&action=DetailView&record=" . $row[ 'RECIBOID' ] . "' target='_blank'>" . $row[ 'RECIBO' ] . "</a></TD>
                        <TD><a href='index.php?module=Veta_Presupuesto&action=DetailView&record=" . $row[ 'PRESUPUESTOID' ] . "' target='_blank'>" . $row[ 'PRESUPUESTO' ] . "</a></TD>
                        <TD><a href='index.php?module=Veta_Requerimiento&action=DetailView&record=" . $row[ 'REQUERIMIENTOID' ] . "' target='_blank'>" . $row[ 'REQUERIMIENTO' ] . "</a></TD>
                        <TD><a href='index.php?module=Leads&action=DetailView&record=" . $row[ 'LEADID' ] . "' target='_blank'>" . $row[ 'PROSPECTO' ] . "</a></TD>
                        <TD><a href='index.php?module=Contacts&action=DetailView&record=" . $row[ 'CONTACTID' ] . "' target='_blank'>" . $row[ 'CONTACTO' ] . "</a></TD>                        
                        <TD>" . $row[ 'ETAPAVENTAS' ] . "</a></TD>
                        <TD>" . $row[ 'ESTADORECIBO' ] . "</a></TD>
                        <TD>" . $row[ 'ESTADOREQUERIMIENTO' ] . "</a></TD>                        
                        <TD>" . $row[ 'PROXIMOCONTACTOLEAD' ] . "</a></TD>
                        <TD>" . $row[ 'ULTIMOCONTACTOLEAD' ] . "</a></TD>
                        <TD>" . $row[ 'PROXIMOCONTACTOREQ' ] . "</a></TD>
                        <TD>" . $row[ 'ULTIMOCONTACTOREQ' ] . "</a></TD>
                    </TR>";

            $i++;
        }

        $html .= "</TBODY></TABLE>";

        $q = "SELECT DISTINCT 
                    opportunities.id AS OID,
                    opportunities.name AS ONAME,
                    opportunities_cstm.estado_admisiones_c AS ESTADOADMISIONES,
                    opportunities_cstm.estado_cartera_c AS ESTADOCARTERA,
                    opportunities_cstm.estado_gestion_comercial_c AS ESTADOCOMERCIAL,
                    opportunities_cstm.estado_pago_institucion_c AS ESTADOPAGOINSTITUCION,
                    opportunities_cstm.estado_recoleccion_documento_c AS ESTADORECOLECCIONDOC,
                    opportunities_cstm.estado_servicio_al_cliente_c AS ESTADOSERVICIOCLIENTE,
                    opportunities_cstm.estado_visas_c AS ESTADOVISAS
                    FROM opportunities 
                    INNER JOIN opportunities_cstm ON opportunities_cstm.id_c = opportunities.id 
                    WHERE 
                    opportunities.id NOT IN (SELECT veta_recibo_opportunitiesopportunities_idb FROM veta_recibo_opportunities_c WHERE deleted = 0 )
                    AND opportunities.deleted = 0";

        $res = $db->query( $q );

        $html .= "<h1>Procesos de Venta sin Recibo</h1>";

        $html .= "<TABLE  class=\"table table-striped table-hover\" style='overflow-y: auto; height: 50vh;'>
                <THEAD class=\"thead-dark\" style='position: sticky;top: 0;'>
                    <TR>
                        <TH scope=\"col\" style='position: sticky;top: 0;'>#</TH>
                        <TH scope=\"col\" style='position: sticky;top: 0;'>PROCESO VENTAS</TH>
                        <TH scope=\"col\" style='position: sticky;top: 0;'>ESTADO ADMISIONES</TH>
                        <TH scope=\"col\" style='position: sticky;top: 0;'>ESTADO CARTERA</TH>
                        <TH scope=\"col\" style='position: sticky;top: 0;'>ESTADO COMERCIAL</TH>
                        <TH scope=\"col\" style='position: sticky;top: 0;'>ESTADO PAGO INSTITUCION</TH>
                        <TH scope=\"col\" style='position: sticky;top: 0;'>ESTADO RECOLECCION DOC</TH>
                        <TH scope=\"col\" style='position: sticky;top: 0;'>ESTADO SERV CLIENTE</TH>
                        <TH scope=\"col\" style='position: sticky;top: 0;'>ESTADO VISAS</TH>
                    </TR>
                </THEAD>
                <TBODY>";

        $i = 1;
        while ( $row = $db->fetchByAssoc( $res ) )
        {

            $html .= "<TR>
                        <TD>$i</TD>
                        <TD><a href='index.php?module=Opportunities&action=DetailView&record=" . $row[ 'OID' ] . "' target='_blank'>" . $row[ 'ONAME' ] . "</a></TD>                   
                        <TD>" . $row[ 'ESTADOADMISIONES' ] . "</a></TD>
                        <TD>" . $row[ 'ESTADOCARTERA' ] . "</a></TD>
                        <TD>" . $row[ 'ESTADOCOMERCIAL' ] . "</a></TD>
                        <TD>" . $row[ 'ESTADOPAGOINSTITUCION' ] . "</a></TD>
                        <TD>" . $row[ 'ESTADORECOLECCIONDOC' ] . "</a></TD>
                        <TD>" . $row[ 'ESTADOSERVICIOCLIENTE' ] . "</a></TD>
                        <TD>" . $row[ 'ESTADOVISAS' ] . "</a></TD>
                    </TR>";

            $i++;
        }

        $html .= "</TBODY></TABLE>";

        echo $html;
    }
}