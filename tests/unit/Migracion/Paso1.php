<?php

class Paso1
{

    function ejecutar()
    {

        $c       = new Campaign();
        $c->name = "prueba";
        $c->save();

        $db = DBManagerFactory::getInstance();

        $q = "SELECT leads.id FROM leads WHERE leads.id NOT IN ( SELECT veta_presupuesto_leadsleads_ida FROM veta_presupuesto_leads_c WHERE deleted = 0 ) AND leads.deleted = 0 ";
        $q .= " AND leads.assigned_user_id IN ( '3382f722-8bc0-d505-163a-5e586591d5ec' , '6911d9c8-c5ef-c7aa-a72e-5be885fdabc6' , '8b470c76-4159-bbde-0161-5e28d4ffee93' )";

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

    function mostrarResultado()
    {

        $db = DBManagerFactory::getInstance();

        $q = "SELECT 
                leads.id AS 'ID PROSPECTO', 
                CONCAT(leads.first_name , \" \" , leads.last_name ) AS PROSPECTO,
                leads.status AS 'ESTADO DEL PROSPECTO',
                veta_requerimiento.estado AS 'ESTADO DEL REQUERIMIENTO', 
                veta_requerimiento.id AS 'ID REQUERIMIENTO',
                veta_requerimiento.name AS 'NRO REQUERIMIENTO',
                leads_cstm.fecha_proximo_contacto_c AS 'PROXIMO CONTACTO PROSPECTO',
                leads_cstm.fecha_ultimo_contacto_c AS 'ULTIMO CONTACTO PROSPECTO',
                veta_requerimiento.fecha_proximo_contacto AS 'PROXIMO CONTACTO REQUERIMIENTO',
                veta_requerimiento.fecha_ultimo_contacto AS 'ULTIMO CONTACTO REQUERIMIENTO',
                leads.assigned_user_id  AS 'LEADS ASSIGNED',
                veta_requerimiento.assigned_user_id AS 'REQ ASSIGNED'
            FROM leads 
                LEFT JOIN veta_requerimiento_leads_c ON veta_requerimiento_leads_c.veta_requerimiento_leadsleads_ida = leads.id AND veta_requerimiento_leads_c.deleted = 0 
                INNER JOIN veta_requerimiento ON veta_requerimiento.id = veta_requerimiento_leads_c.veta_requerimiento_leadsveta_requerimiento_idb AND veta_requerimiento.deleted = 0 
                INNER JOIN leads_cstm ON leads_cstm.id_c = leads.id 
            WHERE 
                leads.id NOT IN (SELECT veta_presupuesto_leadsleads_ida FROM veta_presupuesto_leads_c WHERE deleted = 0 ) 
                AND leads.deleted = 0 
                AND leads.assigned_user_id  IN ( '3382f722-8bc0-d505-163a-5e586591d5ec' , '6911d9c8-c5ef-c7aa-a72e-5be885fdabc6' , '8b470c76-4159-bbde-0161-5e28d4ffee93' )";

        $res = $db->query( $q );

        $html = "<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">
                <TABLE  class=\"table table-striped table-hover\" style='overflow-y: auto; height: 50vh;'>
                <THEAD class=\"thead-dark\">
                    <TR>
                        <TH scope=\"col\" style='position: sticky;top: 0;'>#</TH>
                        <TH scope=\"col\" style='position: sticky;top: 0;'>ID PROSPECTO</TH>
                        <TH scope=\"col\" style='position: sticky;top: 0;'>PROSPECTO</TH>
                        <TH scope=\"col\" style='position: sticky;top: 0;'>ESTADO PROSPECTO</TH>
                        <TH scope=\"col\" style='position: sticky;top: 0;'>ESTADO REQUERIMIENTO</TH>                        
                        <TH scope=\"col\" style='position: sticky;top: 0;'>ID REQUERIMIENTO</TH>
                        <TH scope=\"col\" style='position: sticky;top: 0;'>NRO REQUERIMIENTO</TH>                        
                        <TH scope=\"col\" style='position: sticky;top: 0;'>PROX CONTACTO PROSPECTO</TH>
                        <TH scope=\"col\" style='position: sticky;top: 0;'>ULTIMO CONTACTO PROSPECTO</TH>
                        <TH scope=\"col\" style='position: sticky;top: 0;'>PROX CONTACTO REQ</TH>
                        <TH scope=\"col\" style='position: sticky;top: 0;'>ULTIMO CONTACTO REQ</TH>
                        <TH scope=\"col\" style='position: sticky;top: 0;'>COMERCIAL PROSPECTO</TH>
                        <TH scope=\"col\" style='position: sticky;top: 0;'>REQUERIMIENTO PROSPECTO</TH>
                    </TR>            
                </THEAD>
                <TBODY>";

        $i = 1;
        while ( $row = $db->fetchByAssoc( $res ) )
        {

            $html .= "<TR>
                        <TD>$i</TD>
                        <TD>" . $row[ 'ID PROSPECTO' ] . "</TD>
                        <TD><a href='index.php?module=Leads&action=DetailView&record=" . $row[ 'ID PROSPECTO' ] . "' target='_blank'>" . $row[ 'PROSPECTO' ] . "</a></TD>
                        <TD>" . $row[ 'ESTADO DEL PROSPECTO' ] . "</TD>
                        <TD>" . $row[ 'ESTADO DEL REQUERIMIENTO' ] . "</TD>
                        <TD>" . $row[ 'ID REQUERIMIENTO' ] . "</TD>
                        <TD><a href='index.php?module=Veta_Requerimiento&action=DetailView&record=" . $row[ 'ID REQUERIMIENTO' ] . "' target='_blank'>" . $row[ 'NRO REQUERIMIENTO' ] . "</a></TD>
                        <TD>" . $row[ 'PROXIMO CONTACTO PROSPECTO' ] . "</TD>
                        <TD>" . $row[ 'ULTIMO CONTACTO PROSPECTO' ] . "</TD>
                        <TD>" . $row[ 'PROXIMO CONTACTO REQUERIMIENTO' ] . "</TD>
                        <TD>" . $row[ 'ULTIMO CONTACTO REQUERIMIENTO' ] . "</TD>
                        <TD>" . $row[ 'LEADS ASSIGNED' ] . "</TD>
                        <TD>" . $row[ 'REQ ASSIGNED' ] . "</TD>
                    </TR>";
            $i++;
        }

        $html .= "</TBODY></TABLE>";

        echo $html;
    }
}