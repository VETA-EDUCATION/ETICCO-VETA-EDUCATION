<?php

class BaseDatos
{

    var $host_origen = 'localhost';
    var $user_origen = 'root';
    var $pass_origen = '9000580574';
    var $base_origen = 'vetacrmproduccion';

    var $host_destino = 'localhost';
    var $user_destino = 'root';
    var $pass_destino = '9000580574';
    var $base_destino = 'vetacrmdevelop';

    private function get_connection( $host , $bd ) {

        $con = new mysqli( $host , $this->user_origen , $this->pass_origen , $this->bd );

        if( $con->connect_error ) {
            $con = null;
        }

        return $con;
    }

    private function get_connection_origen() {

        $con = new mysqli( $this->host_origen , $this->user_origen , $this->pass_origen , $this->base_origen );

        if( $con->connect_error ) {
            $con = null;
        }

        return $con;
    }

    private function get_connection_destino() {

        $con = new mysqli( $this->host_destino , $this->user_destino , $this->pass_destino , $this->base_destino );

        if( $con->connect_error ) {
            $con = null;
        }

        return $con;
    }

    /**
     * Este metodo ejecuta una consulta de eliminacion
     * @param $tabla
     */
    public function delete( $tabla ) {

        $this->registrar_log( 'BORRANDO LA TABLA ' . $tabla );
        $result = 0;
        $con    = $this->get_connection_destino();

        if( $con != null ) {

            $sql = "DELETE FROM $tabla";

            if( $con->query( $sql ) === TRUE ) {
                $result = 1;
                // $this->registrar_log('........................................................'. 'Tabla eliminada');
            }

            else
                $this->registrar_log( '........................................................' . 'Error eliminando la tabla ' . $tabla );

            $con->close();
        }
        else {
            $this->registrar_log( '........................................................' . 'No se pudo crear la conexion con la BD' );
        }

        return $result;
    }

    private function obtener_campos_tabla( $tabla_destino ) {

        $campos = array();
        $con2   = $this->get_connection_destino();

        $sql    = "SELECT COLUMN_NAME, DATA_TYPE FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = '" . $this->base_destino . "' AND TABLE_NAME = '" . $tabla_destino . "'";
        $result = $con2->query( $sql );

        while( $row = $result->fetch_assoc() ) {

            if( substr_count( $row[ 'DATA_TYPE' ] , 'char' ) > 0 or substr_count( $row[ 'DATA_TYPE' ] , 'text' ) > 0 or substr_count( $row[ 'DATA_TYPE' ] , 'date' ) > 0 )
                $tipo = 'string';

            $r = array( $row[ 'COLUMN_NAME' ] => array( 'valor' => null , 'tipo' => $tipo ) );
            array_push( $campos , $r );
        }

        $con2->close();

        return $campos;
    }

    private function esta_compo_origen_en_destino( Array $record , Array $destino ) {

        $esta = false;

        foreach( $destino as $d ) {
            if( $esta == true )
                break;

            foreach( $d as $k => $v ) {

                if( $esta == true )
                    break;

                foreach( $record as $k2 => $v2 ) {
                    if( $k == $k2 ) {
                        $esta = true;
                        break;
                    }
                }
            }
        }

        return $esta;

    }

    private function obtener_campos_insert( Array $record , string $tabla_destino ) {

        $sql            = '';
        $campos_destino = $this->obtener_campos_tabla( $tabla_destino );
        $campos         = array();

        foreach( $record as $r ) {

            //foreach( $r as $clave => $valor )
            //    $this->registrar_log( '................................................................................... Procesando campo no encontrado ' . $clave );

            if( $this->esta_compo_origen_en_destino( $r , $campos_destino ) == FALSE ) {

                $campo_equivalente = $this->obtener_campo_equivalente( $r , $tabla_destino );

                if( $campo_equivalente != null )
                    array_push( $campos , $campo_equivalente );
            }
            else {
                array_push( $campos , $r );
            }
        }

        foreach( $campos as $campo ) {

            foreach( $campo as $k => $v )
                $sql .= "$k ,";
        }

        $sql = rtrim( $sql , "," );

        return $sql;
    }

    private function obtener_valores_insert( Array $record , string $tabla_destino ) {

        $con            = $this->get_connection_destino();
        $sql            = '';
        $campos_destino = $this->obtener_campos_tabla( $tabla_destino );
        $campos         = array();

        foreach( $record as $r ) {

            if( $this->esta_compo_origen_en_destino( $r , $campos_destino ) == FALSE ) {
                array_push( $campos , $this->obtener_campo_equivalente( $r , $tabla_destino ) );
            }
            else {
                //$co = array( $co => $this->obtener_tipo_columna( $co , $tabla_destino ) );
                array_push( $campos , $r );
            }
        }

        foreach( $campos as $campo ) {

            foreach( $campo as $k => $v ) {

                if( $v[ 'tipo' ] === 'date' ) {

                    if( empty( $v[ 'valor' ] ) or $v[ 'valor' ] == '0000-00-00' ) {

                        $sql .= 'NULL';

                    }
                    else {

                        $v[ 'valor' ] = str_replace( "-00" , "-01" , $v[ 'valor' ] );
                        $sql          .= "'" . mysqli_real_escape_string( $con , $v[ 'valor' ] ) . "'";

                    }
                }

                if( $v[ 'tipo' ] === 'string' ) {

                    $sql .= "'" . mysqli_real_escape_string( $con , $v[ 'valor' ] ) . "'";
                }

                if( $v[ 'tipo' ] === 'int' ) {

                    if( empty( $v[ 'valor' ] ) )
                        $v[ 'valor' ] = 0;
                    $sql .= mysqli_real_escape_string( $con , $v[ 'valor' ] );
                }

                $sql .= ",";
            }
        }

        $sql = rtrim( $sql , "," );

        return $sql;

    }

    private function obtener_tipo_columna( $col_name , $tabla_destino ) {

        $campos = array();
        $con2   = $this->get_connection_destino();

        $sql    = "SELECT COLUMN_NAME, DATA_TYPE FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = '" . $this->base_destino . "' AND TABLE_NAME = '" . $tabla_destino . "' AND COLUMN_NAME ='" . $col_name . "'";
        $result = $con2->query( $sql );

        while( $row = $result->fetch_assoc() ) {
            array_push( $campos );
        }

        $con2->close();

        return $campos;
    }

    private function migrar_registro( Array $record , string $tabla_destino ) {

        $exito = 1;
        $con   = $this->get_connection_destino();

        if( $con != null ) {

            $sql    = "INSERT INTO $tabla_destino (" . $this->obtener_campos_insert( $record , $tabla_destino ) . ") VALUES (" . $this->obtener_valores_insert( $record , $tabla_destino ) . ")";
            $result = $con->query( $sql );

            if( $result !== TRUE ) {

                $this->exito = 0;
                $this->registrar_log( '........................................................ ' . 'Error insertando registro en la tabla ' . $tabla_destino );
                $this->registrar_log( '................................................................................... ' . 'Consulta ' . $sql );
                // $this->registrar_log( '................................................................................... ' . mysqli_errno( $con ) );
                // $this->registrar_log( '................................................................................... ' .  mysqli_err($con));
            }

            $con->close();
        }
        else {
            $exito = 0;
            $this->registrar_log( '........................................................' . 'No se pudo crear la conexion con la BD1' );
        }

        return $exito;
    }

    private function obtener_registro_info( $record , $tabla , $base , $host ) {

        $registro = array();
        $con      = $this->get_connection( $host , $base );

        foreach( $record as $col_name => $valor ) {

            $tipo = 'int';

            $sql    = "SELECT DATA_TYPE FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = '" . $base . "' AND TABLE_NAME = '" . $tabla . "' AND COLUMN_NAME ='" . $col_name . "'";
            $result = $con->query( $sql );

            while( $row = $result->fetch_assoc() ) {

                if( substr_count( $row[ 'DATA_TYPE' ] , 'char' ) > 0 or substr_count( $row[ 'DATA_TYPE' ] , 'text' ) > 0 )
                    $tipo = 'string';

                if( substr_count( $row[ 'DATA_TYPE' ] , 'date' ) > 0 )
                    $tipo = 'date';

                $r = array( $col_name => array( 'valor' => $valor , 'tipo' => $tipo ) );
                array_push( $registro , $r );
            }
        }
        $con->close();

        return $registro;
    }


    /**
     * Este metodo pasa la información de la tabla origen a la tabla destino
     * @param string $tabla_origen
     * @param string $tabla_destino
     */
    public function migrar( string $tabla_origen , string $tabla_destino ) {

        $this->registrar_log( ':::::: MIGRANDO LA TABLA ' . $tabla_origen . ' a la tabla ' . $tabla_destino );
        $exito = 0;
        $con   = $this->get_connection_origen();

        if( $con != null ) {

            $sql = "SELECT * FROM $tabla_origen ";

            $result = $con->query( $sql );

            if( $result !== FALSE ) {

                if( $result->num_rows > 0 ) {

                    while( $row = $result->fetch_assoc() ) {
                        $row   = $this->obtener_registro_info( $row , $tabla_origen , $this->base_origen , 'localhost' );
                        $exito = $this->migrar_registro( $row , $tabla_destino );

                        if( $exito == 0 )
                            break;
                    }
                }
                else {
                    $this->registrar_log( '........................................................' . '0 registros encontrados en la tabla ' . $tabla_origen );
                    $exito = 1;
                }
            }
            else {
                $exito = 0;
                $this->registrar_log( '........................................................' . 'Error en la consulta ' . $sql );
            }

            $con->close();
        }
        else {
            $this->registrar_log( '........................................................' . 'No se pudo crear la conexion con la BD1' );
        }

        return $exito;

    }

    private function registrar_log( $msg ) {

        $path = date( "Y-m-d" ) . "_borrar_registros.log";
        $msg  = '[' . date( "Y-m-d H:i:s" ) . '] ' . $msg;
        error_log( $msg . PHP_EOL . PHP_EOL , 3 , $path );
    }

    public function ejecutar_origen( $sql ) {

        $exito = 1;
        $con   = $this->get_connection_origen();

        if( $con != null ) {

            $result = $con->query( $sql );

            if( $result !== TRUE ) {

                $this->exito = 0;
                $this->registrar_log( '................................................................................... ' . 'Error ejecutando la consulta ' . $sql );
            }

            $con->close();
        }
        else {
            $exito = 0;
            $this->registrar_log( '........................................................' . 'No se pudo crear la conexion con la BD1' );
        }

        return $exito;
    }

    private function obtener_campo_equivalente( Array $campo , string $tabla_destino ) {

        $campo_equivalente = null;
        $esta              = false;

        $equivalencias = array(
            'leads_cstm' => array(
                'fecha_cotizacion_c' => null ,
            ) ,
            'opportunities_cstm' => array(
                'user_id_c' => null ,
            )
        );

        // $r = array( $row[ 'COLUMN_NAME' ] => array( 'valor' => null , 'tipo' => $tipo ) );

        foreach( $equivalencias as $k => $v ) {

            if( $k == $tabla_destino ) {

                foreach( $v as $c => $equivalencia ) {

                    foreach( $campo as $kdato => $dato ) {

                        if( $c == $kdato ) {

                            foreach( $equivalencia as $ek => $ev ) {
                                $equivalencia[ $ek ][ 'valor' ] = $dato[ 'valor' ];
                            }

                            $campo_equivalente = $equivalencia;
                            $esta              = true;
                        }

                    }
                }


            }
        }

        if( $esta == false ) {

            foreach( $campo as $clave => $valor )
                $this->registrar_log( '........................................................' . 'No se encontro equivalente para el campo ' . $clave . ' en la tabla ' . $tabla_destino );
        }

        return $campo_equivalente;
    }
}

class Migracion
{

    public function procesar() {

        $e = new Eliminador();
        $e->procesar();

        $c = new Creador();
        $c->procesar();

    }
}

class Creador
{
    public function procesar() {

        $this->crear_leads();
        $this->crear_estudiantes();
        $this->crear_citas();
        $this->crear_usuarios();
        $this->crear_marketing();
        $this->crear_actividades();
        /*$this->crear_casos();
        $this->crear_oportunidades();
        $this->crear_veta();*/

    }

    private function crear_actividades() {

        $tablas_origen  = array( "notes" , "notes_cstm" , "tasks" , "tasks_cstm" , "documents" , "document_revisions" , "documents_cases" , "documents_contacts" , "documents_opportunities" , "calls" , "calls_cstm" , "calls_contacts" , "calls_leads" , "calls_users" , "calls_reschedule" , "email_addr_bean_rel" , "email_addresses" , "email_cache" , "emails" , "emails_beans" , "emails_email_addr_rel" , "emails_text" , "outbound_email" , "outbound_email_audit" );
        $tablas_destino = array( "notes" , "notes_cstm" , "tasks" , "tasks_cstm" , "documents" , "document_revisions" , "documents_cases" , "documents_contacts" , "documents_opportunities" , "calls" , "calls_cstm" , "calls_contacts" , "calls_leads" , "calls_users" , "calls_reschedule" , "email_addr_bean_rel" , "email_addresses" , "email_cache" , "emails" , "emails_beans" , "emails_email_addr_rel" , "emails_text" , "outbound_email" , "outbound_email_audit" );

        $this->migrar_tablas( $tablas_origen , $tablas_destino );
    }

    private function crear_casos() {

        $tablas_origen  = array( "cases" , "cases_audit" , "cases_cstm" );
        $tablas_destino = array( "cases" , "cases_audit" , "cases_cstm" );

        $this->migrar_tablas( $tablas_origen , $tablas_destino );
    }

    private function crear_citas() {

        $tablas_origen  = array( "meetings" , "meetings_cstm" , "meetings_contacts" , "meetings_users" );
        $tablas_destino = array( "meetings" , "meetings_cstm" , "meetings_contacts" , "meetings_users" );

        $this->migrar_tablas( $tablas_origen , $tablas_destino );
    }

    /**
     * Este metodo crea las tablas leads  leads_cstm
     */
    private function crear_leads() {

        $tablas_origen  = array( "leads" , "leads_cstm" , "leads_audit"  );
        $tablas_destino = array( "leads" , "leads_cstm" , "leads_audit" );
        $this->migrar_tablas( $tablas_origen , $tablas_destino );
    }

    /**
     * Este metodo crea las tablas contacts y  contacts_cstm
     */
    private function crear_estudiantes() {

        $tablas_origen  = array( "contacts" , "contacts_cstm" , "contacts_audit" , "contacts_cases" , "contacts_users" );
        $tablas_destino = array( "contacts" , "contacts_cstm" , "contacts_audit" , "contacts_cases" , "contacts_users" );
        $this->migrar_tablas( $tablas_origen , $tablas_destino );
    }

    private function crear_usuarios() {

        /*$db = new BaseDatos();
        $sql = "DROP TABLE IF EXISTS soel_users";
        $db->ejecutar_origen($sql);

        $sql = "CREATE TABLE soel_users AS SELECT * FROM users WHERE id <> '1'";
        $con = $db->ejecutar_origen($sql);*/

        $tablas_origen  = array( "users" , "acl_actions" , "acl_roles" , "acl_roles_actions" , "acl_roles_users" , "favorites" );
        $tablas_destino = array( "users" , "acl_actions" , "acl_roles" , "acl_roles_actions" , "acl_roles_users" , "favorites" );
        $this->migrar_tablas( $tablas_origen , $tablas_destino );
    }

    private function crear_oportunidades() {

        $tablas_origen  = array( "opportunities" , "opportunities_audit" , "opportunities_cases_1_c" , "opportunities_contacts" , "opportunities_cstm" , "contacts_opportunities_1_c" );
        $tablas_destino = array( "opportunities" , "opportunities_audit" , "opportunities_cases_1_c" , "opportunities_contacts" , "opportunities_cstm" , "contacts_opportunities_1_c" );
        $this->migrar_tablas( $tablas_origen , $tablas_destino );
    }

    private function crear_marketing() {

        $tablas_origen  = array( "campaign_log" , "campaigns" , "campaigns_audit" , "campaigns_cstm" , "email_marketing" , "email_marketing_prospect_lists" , "emailman" , "prospect_list_campaigns" , "prospect_lists" , "prospect_lists_prospects" , "prospects" , "prospects_cstm" );
        $tablas_destino = array( "campaign_log" , "campaigns" , "campaigns_audit" , "campaigns_cstm" , "email_marketing" , "email_marketing_prospect_lists" , "emailman" , "prospect_list_campaigns" , "prospect_lists" , "prospect_lists_prospects" , "prospects" , "prospects_cstm" );
        $this->migrar_tablas( $tablas_origen , $tablas_destino );
    }

    private function crear_veta() {

        $tablas_origen = array(
            "veta_aplicacion" , "veta_aplicacion_audit" , "veta_aplicacion_cases_c" , "veta_aplicacion_cstm" , "veta_aplicacion_opportunities_c" , "veta_coe" , "veta_coe_audit" , "veta_coe_cases_c" , "veta_coe_opportunities_c" , "veta_coe_veta_aplicacion_c" , "veta_correccioncoe" , "veta_correccioncoe_audit" , "veta_correccioncoe_veta_coe_c" , "veta_loo" , "veta_loo_audit" , "veta_loo_cases_c" , "veta_loo_veta_aplicacion_c" , "veta_loocorreccion" , "veta_loocorreccion_veta_loo_c"
        );

        $tablas_destino = array(
            "veta_aplicacion" , "veta_aplicacion_audit" , "veta_aplicacion_cases_c" , "veta_aplicacion_cstm" , "veta_aplicacion_opportunities_c" , "veta_coe" , "veta_coe_audit" , "veta_coe_cases_c" , "veta_coe_opportunities_c" , "veta_coe_veta_aplicacion_c" , "veta_correccioncoe" , "veta_correccioncoe_audit" , "veta_correccioncoe_veta_coe_c" , "veta_loo" , "veta_loo_audit" , "veta_loo_cases_c" , "veta_loo_veta_aplicacion_c" , "veta_loocorreccion" , "veta_loocorreccion_veta_loo_c"
        );

        $this->migrar_tablas( $tablas_origen , $tablas_destino );
    }

    private function migrar_tablas( Array $tablas_origen , Array $tablas_destino ) {
        $exito = $i = 0;

        do {
            $exito = $this->migrar( $tablas_origen[ $i ] , $tablas_destino[ $i ] );
            $i++;
        } while( $exito == 1 and $i < count( $tablas_origen ) );
    }

    private function migrar( string $tabla_origen , string $tabla_destino ) {

        $exito = 0;
        $db    = new BaseDatos();
        $exito = $db->migrar( $tabla_origen , $tabla_destino );

        return $exito;
    }
}

class Eliminador
{

    public function procesar() {

        $this->borrar_registros();
    }

    /**
     * @param array $tablas
     */
    private function borrar_tablas( Array $tablas ) {

        $exito = $i = 0;

        do {
            $exito = $this->borrar( $tablas[ $i ] );
            $i++;
        } while( $exito == 1 and $i < count( $tablas ) );
    }

    private function borrar( string $tabla ) {

        $exito = 0;
        $db    = new BaseDatos();
        $exito = $db->delete( $tabla );

        return $exito;
    }

    /**
     * Este metodo borra las tablas calls, calls_contacts, calls_leads, calls_reschedule, calls_users
     */
    private function borrar_llamadas() {

        $tablas = array( "calls" , "calls_contacts" , "calls_cstm" , "calls_leads" , "calls_reschedule" , "calls_users" );
        $this->borrar_tablas( $tablas );
    }

    /**
     * Este metodo borra las tablas de contacts, contacts_audit, contacts_bugs, contacts_cases, contacts_cstm, contacts_users
     */
    private function borrar_estudiantes() {

        $tablas = array( "contacts" , "contacts_audit" , "contacts_bugs" , "contacts_cases" , "contacts_cstm" , "contacts_users" );
        $this->borrar_tablas( $tablas );
    }

    /**
     * Este metodo borra las tablas de contacts, contacts_audit, contacts_bugs, contacts_cases, contacts_cstm, contacts_users
     */
    private function borrar_casos() {

        $tablas = array( "cases" , "cases_audit" , "cases_cstm" );
        $this->borrar_tablas( $tablas );
    }

    /**
     * Este metodo borra las tablas de email_addr_bean_rel, email_addresses, email_addresses_audit,
     */
    private function borrar_emails() {

        $tablas = array( "email_addr_bean_rel" , "email_addresses" , "email_addresses_audit" , "email_cache" , "emails" , "emails_beans" , "emails_email_addr_rel" , "emails_text" , "outbound_email" , "outbound_email_audit" );
        $this->borrar_tablas( $tablas );
    }

    /**
     * Este metodo borra las tablas de leads, leads_audit y leads_cstm
     */
    private function borrar_leads() {

        $tablas = array( "leads" , "leads_audit" , "leads_cstm" , "leads_opportunities_1_c" );
        $this->borrar_tablas( $tablas );
    }

    private function borrar_oportunidades() {

        $tablas = array( "opportunities" , "opportunities_audit" , "opportunities_cases_1_c" , "opportunities_contacts" , "opportunities_cstm" , "contacts_opportunities_1_c" );
        $this->borrar_tablas( $tablas );
    }

    /**
     * Este metodo borra las tablas meetings, meetings_contacts, meetings_cstm, meetings_leads, meetings_users
     */
    private function borrar_citas() {

        $tablas = array( "meetings" , "meetings_contacts" , "meetings_cstm" , "meetings_leads" , "meetings_users" );
        $this->borrar_tablas( $tablas );
    }

    /**
     * Este metodo borra las tablas de notes
     */
    private function borrar_notas() {

        $tablas = array( "notes" , "notes_cstm" , "documents" , "document_revisions" , "documents_cases" , "documents_contacts" , "documents_opportunities" );
        $this->borrar_tablas( $tablas );
    }

    /**
     * Este metodo borra las tablas acl_actions, acl_roles, acl_roles_actions, acl_roles_users
     */
    private function borrar_roles() {

        $tablas = array( "acl_actions" , "acl_roles" , "acl_roles_actions" , "acl_roles_users" );
        $this->borrar_tablas( $tablas );
    }

    /**
     * Este metodo borra las tablas tasks
     */
    private function borrar_tareas() {

        $tablas = array( "tasks" , "tasks_cstm" );
        $this->borrar_tablas( $tablas );
    }

    /**
     * Este metodo borra las tablas tasks
     */
    private function borrar_usuarios() {

        $tablas = array( "users" , "favorites" );
        $this->borrar_tablas( $tablas );
    }

    /**
     * Este metodo borra las tablas tasks
     */
    private function borrar_marketing() {

        $tablas = array( "campaign_log" , "campaigns" , "campaigns_audit" , "campaigns_cstm" , "email_marketing" , "email_marketing_prospect_lists" , "emailman" , "prospect_list_campaigns" , "prospect_lists" , "prospect_lists_prospects" , "prospects" , "prospects_cstm" , );
        $this->borrar_tablas( $tablas );
    }

    private function borrar_veta() {

        $tablas = array(
            "veta_aplicacion" , "veta_aplicacion_audit" , "veta_aplicacion_cases_c" , "veta_aplicacion_cstm" , "veta_aplicacion_opportunities_c" , "veta_coe" , "veta_coe_audit" , "veta_coe_cases_c" , "veta_coe_opportunities_c" , "veta_coe_veta_aplicacion_c" , "veta_coe_veta_liquidacion_c" , "veta_correccioncoe" , "veta_correccioncoe_audit" , "veta_correccioncoe_veta_coe_c" , "veta_liquidacion" , "veta_liquidacion_audit" , "veta_liquidacion_cases_c" , "veta_liquidacion_opportunities_c" , "veta_liquidacion_veta_loo_c" , "veta_loo" , "veta_loo_audit" , "veta_loo_cases_c" , "veta_loo_veta_aplicacion_c" , "veta_loocorreccion" , "veta_loocorreccion_veta_loo_c" , "veta_pagos" , "veta_pagos_veta_liquidacion_c"
        );

        $this->borrar_tablas( $tablas );
    }


    private function borrar_registros() {

        $this->borrar_leads();
        $this->borrar_llamadas();
        $this->borrar_estudiantes();
        $this->borrar_emails();
        $this->borrar_citas();
        $this->borrar_notas();
        $this->borrar_roles();
        $this->borrar_tareas();
        $this->borrar_usuarios();
        $this->borrar_casos();
        $this->borrar_marketing();
        $this->borrar_notas();
        $this->borrar_oportunidades();
        $this->borrar_veta();
    }
}

$m = new Migracion();
$m->procesar();
