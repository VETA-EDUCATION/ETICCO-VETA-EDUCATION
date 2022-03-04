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

        $querySolicitados =	"SELECT SUM(T1.SUMAS) AS CUENTA FROM 
(select COUNT(*) as SUMAS from doc_docssolicitados dd , doc_docssolicitados_opportunities_c ddoc 
where dd.id = ddoc.doc_docssolicitados_opportunitiesdoc_docssolicitados_idb 
and ddoc.deleted = 0 and dd.deleted =0
and ddoc.doc_docssolicitados_opportunitiesopportunities_ida ='".$focus->id."' UNION ALL
select count(*) AS SUMAS from doc_documentos_adic_opportunities_c ddaoc 
where ddaoc.deleted = 0 and ddaoc.doc_documentos_adic_opportunitiesopportunities_idb ='".$focus->id."') T1";

        $resultSolicitados = $focus->db->query($querySolicitados, true, "Error obteniendo el visto bueno comercial del requerimiento");
        $rowSolicitados = $focus->db->fetchByAssoc($resultSolicitados);

        $docssolicitados = 0;
        if($rowSolicitados != null){
            $focus->soel_docs_solicitados = $rowSolicitados['CUENTA'];
            $docssolicitados = $rowSolicitados['CUENTA'];
        }

        $queryPendientes =	"SELECT SUM(T1.SUMAS) AS CUENTA FROM(
SELECT count(*) as SUMAS FROM doc_docssolicitados as a, doc_docssolicitados_opportunities_c as b
WHERE a.id=b.doc_docssolicitados_opportunitiesdoc_docssolicitados_idb and b.deleted=0 and a.deleted=0 and a.estadodocumento= 'Aprobado' and b.doc_docssolicitados_opportunitiesopportunities_ida = '".$focus->id."'
UNION ALL
select count(*) as SUMAS from doc_documentos_adic dda ,doc_documentos_adic_opportunities_c ddaoc 
where dda.id = ddaoc.doc_documentos_adic_opportunitiesdoc_documentos_adic_ida 
and dda.estadodocumento ='Aprobado' and dda.deleted = 0 and ddaoc.deleted =0 and ddaoc.doc_documentos_adic_opportunitiesopportunities_idb = '".$focus->id."') T1";
        $resultPendientes = $focus->db->query($queryPendientes, true, "Error obteniendo el visto bueno comercial del requerimiento");
        $rowPendientes = $focus->db->fetchByAssoc($resultPendientes);

        if($rowPendientes != null){
            $focus->soel_docs_cargados = $rowPendientes['CUENTA'];
            $focus->soel_docs_pendientes = $docssolicitados - $rowPendientes['CUENTA'];
        }

        $queryCargados =	"SELECT SUM(T1.SUMAS) AS CUENTA FROM(
SELECT count(*) as SUMAS FROM doc_docssolicitados as a, doc_docssolicitados_opportunities_c as b
WHERE a.id=b.doc_docssolicitados_opportunitiesdoc_docssolicitados_idb and b.deleted=0 and a.deleted=0 and a.estadodocumento= 'Cargado' and b.doc_docssolicitados_opportunitiesopportunities_ida = '".$focus->id."'
UNION ALL
select count(*) as SUMAS from doc_documentos_adic dda ,doc_documentos_adic_opportunities_c ddaoc 
where dda.id = ddaoc.doc_documentos_adic_opportunitiesdoc_documentos_adic_ida 
and dda.estadodocumento ='Cargado' and dda.deleted = 0 and ddaoc.deleted =0 and ddaoc.doc_documentos_adic_opportunitiesopportunities_idb = '".$focus->id."') T1";
        $resultCargados = $focus->db->query($queryCargados, true, "Error obteniendo el visto bueno comercial del requerimiento");
        $rowCargados = $focus->db->fetchByAssoc($resultCargados);

        if($rowCargados != null){
            $focus->soel_docs_cargados = $rowCargados['CUENTA'];
        }

        $queryAprobados =	"SELECT SUM(T1.SUMAS) AS CUENTA FROM(
			SELECT count(*) as SUMAS FROM doc_docssolicitados as a, doc_docssolicitados_opportunities_c as b
			WHERE a.id=b.doc_docssolicitados_opportunitiesdoc_docssolicitados_idb and b.deleted=0 and a.deleted=0 and a.estadodocumento= 'Aprobado' and b.doc_docssolicitados_opportunitiesopportunities_ida = '".$focus->id."'
			UNION ALL
			select count(*) as SUMAS from doc_documentos_adic dda ,doc_documentos_adic_opportunities_c ddaoc 
			where dda.id = ddaoc.doc_documentos_adic_opportunitiesdoc_documentos_adic_ida 
			and dda.estadodocumento ='Aprobado' and dda.deleted = 0 and ddaoc.deleted =0 and ddaoc.doc_documentos_adic_opportunitiesopportunities_idb = '".$focus->id."') T1";
        $resultAprobados = $focus->db->query($queryAprobados, true, "Error obteniendo el visto bueno comercial del requerimiento");
        $rowAprobados = $focus->db->fetchByAssoc($resultAprobados);

        if($rowAprobados != null){
            $focus->soel_docs_aprobados = $rowAprobados['CUENTA'];
        }

        $queryFechaEstudiantes = "select dd.date_entered as fecha
		from doc_docssolicitados dd , doc_docssolicitados_opportunities_c docop
		where docop.doc_docssolicitados_opportunitiesopportunities_ida ='".$focus->id."' 
		and docop.doc_docssolicitados_opportunitiesdoc_docssolicitados_idb = dd.id 
		UNION
		select dc.date_modified as fecha 
		from doc_comentarios dc , doc_comentarios_opportunities_c dcoc 
		where dc.id = dcoc.doc_comentarios_opportunitiesdoc_comentarios_idb 
		and dcoc.doc_comentarios_opportunitiesopportunities_ida ='".$focus->id."' 
		and dc.date_entered is null
		UNION
		select dda.fechacargado as fecha from doc_documentos_adic dda ,doc_docssolicitados_opportunities_c ddoc where dda.id = ddoc.doc_docssolicitados_opportunitiesdoc_docssolicitados_idb and ddoc.doc_docssolicitados_opportunitiesopportunities_ida ='".$focus->id."' order by fecha desc limit 1";
        $resultFechaEstudiantes = $focus->db->query($queryFechaEstudiantes, true, "Error obteniendo el visto bueno comercial del requerimiento");
        $rowFechaEstudiantes = $focus->db->fetchByAssoc($resultFechaEstudiantes);
        if($rowFechaEstudiantes != null){
            $focus->soel_date_estudiante = $rowFechaEstudiantes['fecha'];
        }

        $queryFechaAsesor = "select dd.fechaaprobado as fecha
from doc_docssolicitados dd , doc_docssolicitados_opportunities_c docop
where docop.doc_docssolicitados_opportunitiesopportunities_ida ='".$focus->id."'
and dd.id = docop.doc_docssolicitados_opportunitiesdoc_docssolicitados_idb 
UNION
select dc.date_entered as fecha 
from doc_comentarios dc , doc_comentarios_opportunities_c dcoc 
where dc.id = dcoc.doc_comentarios_opportunitiesdoc_comentarios_idb 
and dcoc.doc_comentarios_opportunitiesopportunities_ida ='".$focus->id."' 
UNION
select dda.fechaaprobado as fecha from doc_documentos_adic dda ,doc_docssolicitados_opportunities_c ddoc where dda.id = ddoc.doc_docssolicitados_opportunitiesdoc_docssolicitados_idb and ddoc.doc_docssolicitados_opportunitiesopportunities_ida ='".$focus->id."'
order by fecha desc limit 1
";
        $resultFechaAsesor = $focus->db->query($queryFechaAsesor, true, "Error obteniendo el visto bueno comercial del requerimiento");
        $rowFechaAsesor= $focus->db->fetchByAssoc($resultFechaAsesor);
        if($rowFechaAsesor!= null){
            $focus->soel_date_asesor= $rowFechaAsesor['fecha'];
        }

        $queryCampus = "select vc.campus as CAMPUS from veta_curso vc 
                        inner join veta_detallerecibo vd on vc.id = vd.veta_curso_id_c 
                        inner join veta_detallerecibo_veta_recibo_c vdvrc on vd.id = vdvrc.veta_detallerecibo_veta_reciboveta_detallerecibo_idb 
                        inner join veta_recibo vr on vdvrc.veta_detallerecibo_veta_reciboveta_recibo_ida = vr.id 
                        inner join veta_recibo_opportunities_c vroc on vr.id = vroc.veta_recibo_opportunitiesveta_recibo_ida 
                        where vroc.veta_recibo_opportunitiesopportunities_idb ='".$focus->id."' order by vc.intake desc limit 1";

        $resultCampus = $focus->db->query($queryCampus, true, "Error obteniendo campus");
        $rowCampus = $focus->db->fetchByAssoc($resultCampus);
        if($rowCampus!= null){
            $focus->soel_campus= $rowCampus['CAMPUS'];
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
		
		$p = $o;		

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

    public function get_estudiante( $bean )
    {

        $p = null;

        $leads    = $bean->get_linked_beans( 'contacts_opportunities_1', 'Contacts' );
        //Opportunities
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
            $bean->soel_mobile_phone_lead = $person->phone_mobile;
            $bean->soel_email_lead = $person->email1;
        } else {
            $estudiante = $this->get_estudiante( $bean );
            if ( isset( $estudiante ) )
            {
                /*
                
                $bean->soel_ciudad_tmp = $estudiante->ciudad_tmp_c; 
                */
                $bean->soel_fecha_expiracion_visa = $estudiante->fecha_expiracion_visa_c;
                $bean->soel_mobile_phone_lead = $estudiante->phone_mobile;
                $bean->soel_email_lead = $estudiante->email1;
            }

        }

        return $bean;
    }
}