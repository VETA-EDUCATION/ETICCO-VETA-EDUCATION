<?php

class OperacionesEstudiante
{

    /**
     * Este metodo obtiene el id de un estudiante desde sus llamadas
     * @param aCase $caso
     * @return string|null
     */
    public function get_id_from_calls( aCase $caso ) {
        $cid = null;
        $es  = $caso->get_linked_beans( 'calls_contacts' , 'Contacts' );

        foreach( $es as $e ) {
            $cid = $e->id;
        }

        return $cid;
    }

    public function get_id_from_parent( $arguments ) {

        $cid = null;

        switch( $arguments["related_bean"]->object_name ) //SOEL: Revisar
        {
            case "Opportunity":
                $cid = $arguments["related_id"];
                break;
            case "Veta_Aplicacion":
                $cid = $arguments["related_id"];
                break;
            case "Veta_Loo":
                $cid = $arguments["related_id"];
                break;
            case "Veta_COE":
                $cid = $arguments["related_id"];
                break;
            case "Veta_Visa":
                $cid = $arguments["related_id"];
                break;
            case "Veta_Liquidacion":
                $cid = $arguments["related_id"];
                break;
            case "Contact":
                $cid = $arguments["related_id"];
                break;
        }

        return $cid;

    }

    /**
     * @param $cid
     * @return string|null
     */
    private function get_id_from_contact( $id ) {

        $cid = null;
        $c  = new Contact();
        $c->retrieve( $id );

        $es = $c->get_linked_beans( 'contacts_cases' , 'Contacts' );

        foreach( $es as $e ) {
            $cid = $e->id;
        }

        return $cid;
    }

    /**
     * @param $oid
     * @return string|null
     */
    private function get_id_from_oportunidad( $oid ) {

        $cid = null;
        $o   = new Opportunity();
        $o->retrieve( $oid );

        $es = $o->get_linked_beans( 'contacts_opportunities_1' , 'Contacts' );

        foreach( $es as $e ) {
            $cid = $e->id;
        }

        return $cid;
    }

    /**
     * @param $appid
     * @return |null
     */
    private function get_id_from_app( $appid ) {

        $cid = null;
        $app = new Veta_Aplicacion();
        $app->retrieve( $appid );

        $ops = $app->get_linked_beans( 'veta_aplicacion_opportunities' , 'Opportunities' );

        foreach( $ops as $o ) {
            $cid = $this->get_id_from_oportunidad( $o->id );
        }

        return $cid;
    }

    /**
     * @param $looid
     * @return |null
     */
    private function get_id_from_loo( $looid ) {

        $cid = null;
        $loo = new Veta_Loo();
        $loo->retrieve( $looid );

        $apps = $loo->get_linked_beans( 'veta_loo_veta_aplicacion' , 'Veta_Aplicacion' );

        foreach( $apps as $app ) {
            $cid = $this->get_id_from_app( $app->id );
        }

        return $cid;
    }

    /**
     * @param $coeid
     * @return |null
     */
    private function get_id_from_coe( $coeid ) {

        $cid = null;
        $coe = new Veta_COE();
        $coe->retrieve( $coeid );

        $apps = $coe->get_linked_beans( 'veta_coe_veta_aplicacion' , 'Veta_Aplicacion' );

        foreach( $apps as $app ) {
            $cid = $this->get_id_from_app( $app->id );
        }

        return $cid;
    }

    /**
     * @param $visaid
     * @return |null
     */
    private function get_id_from_visa( $visaid ) {

        $cid  = null;
        $visa = new Veta_Visa();
        $visa->retrieve( $visaid );

        $cid = $visa->contact_id_c;

        return $cid;
    }

    /**
     * @param $lid
     * @return string|null
     */
    private function get_id_from_liquidacion( $lid ) {
        $cid = null;
        $l   = new Veta_Liquidacion();
        $l->retrieve( $lid );

        $loos = $l->get_linked_beans( 'veta_liquidacion_veta_loo' , 'Veta_Loo' );

        foreach( $loos as $loo ) {
            $cid = $this->get_id_from_loo($loo->id);
        }

        return $cid;
    }
}