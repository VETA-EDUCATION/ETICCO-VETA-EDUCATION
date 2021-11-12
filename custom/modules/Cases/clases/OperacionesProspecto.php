<?php

class OperacionesProspecto
{

    /**
     * Este metodo obtiene el id de un prospecto desde sus llamadas
     * @param aCase $caso
     * @return string|null
     */
    public function get_id_from_calls( aCase $caso ) {
        $lid = null;
        $leads  = $caso->get_linked_beans( 'calls_leads' , 'Leads' );

        foreach( $leads as $l ) {
            $lid = $l->id;
        }

        return $lid;
    }

    public function get_id_from_parent( $arguments ) {

        $lid = null;

        switch($arguments["related_bean"]->object_name ) //SOEL: Revisar
        {
            case "Opportunity":
                $lid = $arguments["related_id"];
                break;
            case "Veta_Aplicacion":
                $lid = $arguments["related_id"];
                break;
            case "Veta_Loo":
                $lid = $arguments["related_id"];
                break;
            case "Veta_COE":
                $lid = $arguments["related_id"];
                break;
            case "Veta_Visa":
                $lid = $arguments["related_id"];
                break;
            case "Veta_Liquidacion":
                $lid = $arguments["related_id"];
                break;
            case "Lead":
                $lid =  $arguments["related_id"];
                break;
        }

        return $lid;

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
     * @param aCase $caso
     * @return |null
     */
    public function get_id_from_request( $arguments ) {

        $lid = null;

        switch($arguments["related_module"] ) {

            case "Opportunities":
                $lid = $this->get_id_from_oportunidad($arguments["related_id"] );
                break;
            case "Veta_Aplicacion":
                $lid = $this->get_id_from_app( $arguments["related_id"]);
                break;
            case "Veta_Loo":
                $lid = $this->get_id_from_loo( $arguments["related_id"] );
                break;
            case "Veta_COE":
                $lid = $this->get_id_from_coe( $arguments["related_id"] );
                break;
            case "Veta_Visa":
                $lid = $this->get_id_from_visa($arguments["related_id"]);
                break;
            case "Veta_Liquidacion":
                $lid = $this->get_id_from_liquidacion( $arguments["related_id"] );
                break;
        }

        return $lid;
    }

    /**
     * @param $oid
     * @return string|null
     */
    private function get_id_from_oportunidad( $oid ) {

        $lid = null;
        $o   = new Opportunity();
        $o->retrieve( $oid );

        $es = $o->get_linked_beans( 'leads_opportunities_1' , 'Leads' );

        foreach( $es as $e ) {
            $lid = $e->id;
        }

        return $lid;
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