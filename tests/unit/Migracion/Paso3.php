<?php

require_once( 'Paso.php' );

class Paso3 extends Paso
{
    function ejecutar()
    {
        $c  = $this->crearCampana();
        $db = DBManagerFactory::getInstance();

        $query = "SELECT
                        veta_presupuesto.id AS PRESUPUESTO_ID,
                        veta_presupuesto_contacts_c.veta_presupuesto_contactscontacts_ida AS ESTUDIANTE_ID,
                        veta_presupuesto_leads_c.veta_presupuesto_leadsleads_ida AS PROSPECTO_ID
                        FROM veta_presupuesto
                        LEFT JOIN veta_presupuesto_contacts_c ON veta_presupuesto_contacts_c.veta_presupuesto_contactsveta_presupuesto_idb = veta_presupuesto.id AND veta_presupuesto_contacts_c.deleted = 0
                        LEFT JOIN veta_presupuesto_leads_c ON veta_presupuesto_leads_c.veta_presupuesto_leadsveta_presupuesto_idb = veta_presupuesto.id AND veta_presupuesto_leads_c.deleted = 0
                        WHERE 
                        veta_presupuesto.id NOT IN (SELECT veta_recibo_veta_presupuestoveta_presupuesto_ida FROM veta_recibo_veta_presupuesto_c WHERE deleted = 0)
                        AND veta_presupuesto.deleted = 0
                        AND (veta_presupuesto_contacts_c.veta_presupuesto_contactscontacts_ida IS NOT NULL OR veta_presupuesto_leads_c.veta_presupuesto_leadsleads_ida IS NOT NULL ) 
                        ";

        $res = $db->query( $query );

        while ( $row = $db->fetchByAssoc( $res ) )
        {
            $presupuesto = new Veta_Presupuesto();
            $presupuesto->retrieve( $row[ 'PRESUPUESTO_ID' ] );

            $requerimiento                              = new Veta_Requerimiento();
            $requerimiento->set_estado_al_requerimiento = true;
            $person                                     = $this->llenarRequerimiento( $requerimiento, $row );

            $requerimiento->fecha_primer_presupuesto = $presupuesto->date_entered;

            $requerimiento->save();

            $this->relacionarPersona( $requerimiento, $person );
            $this->relacionarPresupuesto( $requerimiento, $presupuesto );

            $q = "UPDATE veta_requerimiento SET assigned_user_id = '" . $person->assigned_user_id . "' WHERE id = '" . $requerimiento->id . "'";
            $db->query( $q );
        }

        $aux = 5;
    }

    function mostrarResultado()
    {
        $db = DBManagerFactory::getInstance();

        // Consultamos los requerimientos asociados a los presupuestos
        $query = "SELECT DISTINCT
                    veta_presupuesto.id AS PRESUPUESTO_ID,
                    veta_presupuesto.name AS PRESUPUESTO,
                    leads.id AS LEAD_ID,
                    contacts.id AS CONTACT_ID,
                    CONCAT(IFNULL(leads.first_name,''), ' ', IFNULL(leads.last_name,''))       AS PROSPECTO,
                    CONCAT(IFNULL(contacts.first_name,''), ' ', IFNULL(contacts.last_name,'')) AS CONTACTO,
                    veta_requerimiento.id AS REQUERIMIENTO_ID,
                    veta_requerimiento.name AS REQUERIMIENTO,
                    leads.status AS ESTADO_PROSPECTO,
                    leads_cstm.fecha_proximo_contacto_c AS PROXIMOCONTACTOLEAD,
                    leads_cstm.fecha_ultimo_contacto_c AS ULTIMOCONTACTOLEAD,
                    veta_requerimiento.fecha_proximo_contacto AS PROXIMOCONTACTOREQ,
                    veta_requerimiento.fecha_ultimo_contacto AS ULTIMOCONTACTOREQ,  
                    veta_requerimiento.estado AS ESTADO_REQUERIMIENTO,
                    veta_requerimiento.assigned_user_id AS COMERCIAL_REQUERIMIENTO,
                    leads.assigned_user_id AS COMERCIAL_PROSPECTO,
                    contacts.assigned_user_id AS COMERCIAL_CONTACTO   
                    FROM veta_presupuesto
                    INNER JOIN veta_requerimiento_veta_presupuesto_c ON veta_requerimiento_veta_presupuesto_c.veta_requerimiento_veta_presupuestoveta_presupuesto_idb = veta_presupuesto.id AND veta_requerimiento_veta_presupuesto_c.deleted = 0
                    INNER JOIN veta_requerimiento ON veta_requerimiento.id = veta_requerimiento_veta_presupuesto_c.veta_requerimiento_veta_presupuestoveta_requerimiento_ida AND veta_requerimiento.deleted = 0
                    LEFT JOIN veta_presupuesto_contacts_c ON veta_presupuesto_contacts_c.veta_presupuesto_contactsveta_presupuesto_idb = veta_presupuesto.id AND veta_presupuesto_contacts_c.deleted = 0
                    LEFT JOIN veta_presupuesto_leads_c ON veta_presupuesto_leads_c.veta_presupuesto_leadsveta_presupuesto_idb = veta_presupuesto.id AND veta_presupuesto_leads_c.deleted = 0
                    LEFT JOIN leads ON leads.id = veta_presupuesto_leads_c.veta_presupuesto_leadsleads_ida AND leads.deleted = 0
                    LEFT JOIN contacts ON contacts.id = veta_presupuesto_contacts_c.veta_presupuesto_contactscontacts_ida AND contacts.deleted = 0 
                    INNER JOIN leads_cstm ON leads.id = leads_cstm.id_c
                    WHERE
                    veta_presupuesto.deleted = 0
                    AND veta_presupuesto.id NOT IN (SELECT veta_recibo_veta_presupuestoveta_presupuesto_ida FROM veta_recibo_veta_presupuesto_c WHERE deleted = 0)";

        $res = $db->query( $query );

        $html = "<h1>Requerimientos creados</h1>";

        $html .= "<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">
                <TABLE  class=\"table table-striped table-hover\" style='overflow-y: auto; height: 50vh;'>
                <THEAD class=\"thead-dark\" style='position: sticky;top: 0;'>
                    <TR>
                        <TH scope=\"col\" style='position: sticky;top: 0;'>#</TH>
                        <TH scope=\"col\" style='position: sticky;top: 0;'>PRESUPUESTO</TH>
                        <TH scope=\"col\" style='position: sticky;top: 0;'>REQUERIMIENTO</TH>
                        <TH scope=\"col\" style='position: sticky;top: 0;'>PROSPECTO</TH>
                        <TH scope=\"col\" style='position: sticky;top: 0;'>CONTACTO</TH>     
                        <TH scope=\"col\" style='position: sticky;top: 0;'>ESTADO PROSPECTO</TH>
                        <TH scope=\"col\" style='position: sticky;top: 0;'>ESTADO REQUERIMIENTO</TH> 
                        <TH scope=\"col\" style='position: sticky;top: 0;'>PROXIMO CONTACTO LEAD</TH>  
                        <TH scope=\"col\" style='position: sticky;top: 0;'>ULTIMO CONTACTO LEAD</TH>            
                        <TH scope=\"col\" style='position: sticky;top: 0;'>PROXIMO CONTACTO REQ</TH>
                        <TH scope=\"col\" style='position: sticky;top: 0;'>ULTIMO CONTACTO REQ</TH> 
                        
                        <TH scope=\"col\" style='position: sticky;top: 0;'>COMERCIAL REQUERIMIENTO</TH> 
                        <TH scope=\"col\" style='position: sticky;top: 0;'>COMERCIAL PROSPECTO</TH> 
                        <TH scope=\"col\" style='position: sticky;top: 0;'>COMERCIAL ESTUDIANTE</TH>    
                                               
                    </TR>            
                </THEAD>
                <TBODY>";

        $i = 1;
        while ( $row = $db->fetchByAssoc( $res ) )
        {

            $html .= "<TR>
                        <TD>$i</TD>
                        <TD><a href='index.php?module=Veta_Presupuesto&action=DetailView&record=" . $row[ 'PRESUPUESTO_ID' ] . "' target='_blank'>" . $row[ 'PRESUPUESTO' ] . "</a></TD>
                        <TD><a href='index.php?module=Veta_Requerimiento&action=DetailView&record=" . $row[ 'REQUERIMIENTO_ID' ] . "' target='_blank'>" . $row[ 'REQUERIMIENTO' ] . "</a></TD>
                        <TD><a href='index.php?module=Leads&action=DetailView&record=" . $row[ 'PROSPECTO_ID' ] . "' target='_blank'>" . $row[ 'PROSPECTO' ] . "</a></TD>
                        <TD><a href='index.php?module=Contacts&action=DetailView&record=" . $row[ 'ESTUDIANTE_ID' ] . "' target='_blank'>" . $row[ 'ESTUDIANTE' ] . "</a></TD>                        
                        <TD>" . $row[ 'ESTADO_PROSPECTO' ] . "</a></TD>
                        <TD>" . $row[ 'ESTADO_REQUERIMIENTO' ] . "</a></TD>
                        <TD>" . $row[ 'PROXIMOCONTACTOLEAD' ] . "</a></TD>
                        <TD>" . $row[ 'ULTIMOCONTACTOLEAD' ] . "</a></TD>
                        <TD>" . $row[ 'PROXIMOCONTACTOREQ' ] . "</a></TD>
                        <TD>" . $row[ 'ULTIMOCONTACTOREQ' ] . "</a></TD>                        
                         <TD>" . $row[ 'COMERCIAL_REQUERIMIENTO' ] . "</a></TD>
                          <TD>" . $row[ 'COMERCIAL_PROSPECTO' ] . "</a></TD>
                           <TD>" . $row[ 'COMERCIAL_CONTACTO' ] . "</a></TD>
                    </TR>";

            $i++;
        }

        $html .= "</TBODY></TABLE>";

        // Mostramos los presupuestos que quedaron sin requerimiento
        $query = "SELECT DISTINCT
                        veta_presupuesto.id                                  AS PRESUPUESTO_ID,
                        veta_presupuesto.name                                AS PRESUPUESTO,
                        leads.id                                             AS LEAD_ID,
                        contacts.id                                          AS CONTACT_ID,
                        CONCAT(IFNULL(leads.first_name,''), ' ', IFNULL(leads.last_name,''))       AS PROSPECTO,
                        CONCAT(IFNULL(contacts.first_name,''), ' ', IFNULL(contacts.last_name,'')) AS CONTACTO,
                        leads.status                                         AS ESTADO_PROSPECTO
                    FROM veta_presupuesto
                             LEFT JOIN veta_presupuesto_contacts_c ON veta_presupuesto_contacts_c.veta_presupuesto_contactsveta_presupuesto_idb = veta_presupuesto.id AND veta_presupuesto_contacts_c.deleted = 0
                             LEFT JOIN veta_presupuesto_leads_c ON veta_presupuesto_leads_c.veta_presupuesto_leadsveta_presupuesto_idb = veta_presupuesto.id AND veta_presupuesto_leads_c.deleted = 0
                             LEFT JOIN leads ON leads.id = veta_presupuesto_leads_c.veta_presupuesto_leadsleads_ida AND leads.deleted = 0
                             LEFT JOIN contacts ON contacts.id = veta_presupuesto_contacts_c.veta_presupuesto_contactscontacts_ida AND contacts.deleted = 0
                    WHERE veta_presupuesto.deleted = 0
                      AND veta_presupuesto.id NOT IN (SELECT veta_recibo_veta_presupuestoveta_presupuesto_ida FROM veta_recibo_veta_presupuesto_c WHERE deleted = 0)
                      AND veta_presupuesto.id NOT IN (SELECT veta_requerimiento_veta_presupuestoveta_presupuesto_idb FROM veta_requerimiento_veta_presupuesto_c WHERE deleted = 0)";
        $res   = $db->query( $query );

        $html .= "<h1>Presupuestos sin requerimiento</h1>";

        $html .= "<TABLE  class=\"table table-striped table-hover\" style='overflow-y: auto; height: 50vh;'>
                <THEAD class=\"thead-dark\" style='position: sticky;top: 0;'>
                      <TR>
                        <TH scope=\"col\" style='position: sticky;top: 0;'>#</TH>
                        <TH scope=\"col\" style='position: sticky;top: 0;'>PRESUPUESTO</TH>
                        <TH scope=\"col\" style='position: sticky;top: 0;'>PROSPECTO</TH>
                        <TH scope=\"col\" style='position: sticky;top: 0;'>CONTACTO</TH>     
                        <TH scope=\"col\" style='position: sticky;top: 0;'>ESTADO PROSPECTO</TH>
                    </TR>            
                </THEAD>
                <TBODY>";

        $i = 1;
        while ( $row = $db->fetchByAssoc( $res ) )
        {

            $html .= "<TR>
                        <TD>$i</TD>
                        <TD><a href='index.php?module=Veta_Presupuesto&action=DetailView&record=" . $row[ 'PRESUPUESTO_ID' ] . "' target='_blank'>" . $row[ 'PRESUPUESTO' ] . "</a></TD>
                        <TD><a href='index.php?module=Leads&action=DetailView&record=" . $row[ 'PROSPECTO_ID' ] . "' target='_blank'>" . $row[ 'PROSPECTO' ] . "</a></TD>
                        <TD><a href='index.php?module=Contacts&action=DetailView&record=" . $row[ 'ESTUDIANTE_ID' ] . "' target='_blank'>" . $row[ 'ESTUDIANTE' ] . "</a></TD>                        
                        <TD>" . $row[ 'ESTADO_PROSPECTO' ] . "</a></TD>
                    </TR>";

            $i++;
        }

        echo $html;
    }

    /**
     * LLena un requerimiento con la informacion de la BD
     * @param Veta_Requerimiento $req , es una variable por referencia
     * @param $row
     * @return Contact|Lead
     */
    private function llenarRequerimiento( Veta_Requerimiento &$req, $row )
    {
        $person = null;

        if ( ! empty( $row[ 'ESTUDIANTE_ID' ] ) )
        {
            $person = new Contact();
            $person->retrieve( $row[ 'ESTUDIANTE_ID' ] );

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

        if ( /*empty( $row[ 'ESTUDIANTE_ID' ] ) and*/ ! empty( $row[ 'PROSPECTO_ID' ] ) )
        {
            $person = new Lead();
            $person->retrieve( $row[ 'PROSPECTO_ID' ] );

            $req->fecha_viaje_txt        = $person->fecha_viaje_txt;
            $req->fecha_viaje            = $person->fecha_viaje_2_c;
            $req->presupuesto            = $person->presupuesto_c;
            $req->campaign_id_c          = $person->campaign_id_c;
            $req->fuente                 = $person->lead_source;
            $req->assigned_user_id       = $person->assigned_user_id;
            $req->estado                 = $person->status;
            $req->fecha_proximo_contacto = $person->fecha_proximo_contacto_c;
            $req->fecha_ultimo_contacto  = $person->fecha_ultimo_contacto_c;
        }

        return $person;
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
     * Este metodo crea una relacion entre un requerimiento y un presupuesto
     * @param Veta_Requerimiento $req
     * @param Veta_Presupuesto $presupuesto
     */
    private function relacionarPresupuesto( Veta_Requerimiento $req, Veta_Presupuesto $presupuesto )
    {
        $presupuesto->load_relationship( 'veta_requerimiento_veta_presupuesto' );
        $presupuesto->veta_requerimiento_veta_presupuesto->add( $req->id );
    }
}