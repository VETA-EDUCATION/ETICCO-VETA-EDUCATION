<?php

require_once( 'tests/unit/Requerimientos.php' );
require_once( 'tests/unit/Utils.php' );

class RequerimientoTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    protected function _before()
    {
    }

    protected function _after()
    {
    }

    // Crea un requerimiento y prueba que este relacionado con prospecto y estudiante
    public function testRelaciones()
    {
        Utils::escenarioInicial();
        $lead        = Utils::newLead( true,0 , Utils::newCampaign() );
        $hook        = new SOELHooksLeads();
        $requirement = $hook->get_requirement_by_lead_id_campaign_id( $lead->id, $lead->campaign_id );

        $leads = $requirement->get_linked_beans( 'veta_requerimiento_leads', 'Lead' );
        $this->assertSame( 1, count( $leads ) );

        foreach ( $leads as $l ) {
            $this->assertSame( $lead->id, $l->id );
        }

        $contacts = $requirement->get_linked_beans( 'veta_requerimiento_contacts', 'Contact' );
        $this->assertSame( 1, count( $contacts ) );

        foreach ( $contacts as $contact ) {
            $this->assertSame( $lead->contact_id, $contact->id );
        }
    }

    // Prueba que los consecutivos del requerimiento se esten generando bien
    public function testConsecutive()
    {
        Utils::escenarioInicial();
        for ( $i = 0 ; $i < 10 ; $i++ ) {

            $newLead  = Utils::newLead(true, 0, Utils::newCampaign());
            $newLead2 = Utils::newLead(true,0, Utils::newCampaign());

            $hook         = new SOELHooksLeads();
            $requirement1 = $hook->get_requirement_by_lead_id_campaign_id( $newLead->id, $newLead->campaign_id );
            $requirement2 = $hook->get_requirement_by_lead_id_campaign_id( $newLead2->id, $newLead2->campaign_id );

            $this->assertSame( intval( $requirement1->name ) + 1, intval( $requirement2->name ) );
        }
    }

    // Prueba que si cambio el asignado a de un prospecto cambia el de todos los requerimientos
    public function testAsignadoRequerimiento()
    {
        $newLead = Utils::newLead(true,0, Utils::newCampaign());

        // Creamos una campaña
        $campaign           = new Campaign();
        $campaign->name     = 'Prueba2';
        $campaign->origen_c = 'Facebook';
        $campaign->save();

        $newLead->campaign_id     = $campaign->id;
        $newLead->lead_source     = 'Facebook';
        $newLead->fecha_viaje_c   = 'Octubre 22';
        $newLead->fecha_viaje_2_c = '2020-10-22';
        $newLead->presupuesto_c   = 1300000;

        $newLead->save();

        $newLead->assigned_user_id = '427789c4-ded9-84a4-f00a-5c1bcea7b42b';
        $newLead->save();

        $newLead->retrieve( $newLead->id );
        $requerimientos = $newLead->get_linked_beans( 'veta_requerimiento_leads', 'Veta_Requerimiento' );
        $this->assertSame( 2, count( $requerimientos ) );

        foreach ( $requerimientos as $req ) {
            $this->assertSame( '427789c4-ded9-84a4-f00a-5c1bcea7b42b', $req->assigned_user_id );
        }
    }

    // Prueba el obtener el listado de requerimientos a largo plazo y con fecha de viaje no superior a 4 meses
    public function testGetRequerimientosFechaExpiracionVencida()
    {
        Utils::escenarioInicial();
        $date_now    = date( 'Y-m-d H:i:s' );
        $date_future = strtotime( '+30 day', strtotime( $date_now ) );
        $date_future = date( 'Y-m-d H:i:s', $date_future );

        $lista = array();

        // Se crean 20 prospectos, 10 contactos 20 requerimientos y 2 campañas
        // Solo 10 prospectos cumplen la condicion
        for ( $i = 0 ; $i < 10 ; $i++ ) {

            $newLead                           = Utils::newLead(true,0, Utils::newCampaign());
            $newLead2                          = Utils::newLead( true,0, Utils::newCampaign() );
            $newLead2->fecha_expiracion_visa_c = $date_future;
            $newLead2->save();

            $contact2 = new Contact();
            $contact2->retrieve($newLead2->contact_id);
            $contact2->fecha_expiracion_visa_c = $date_future;
            $contact2->save();

            $hook                = new SOELHooksLeads();
            $requirement         = $hook->get_requirement_by_lead_id_campaign_id( $newLead->id, $newLead->campaign_id );
            $requirement->estado = 'Largo_Plazo';
            $requirement->save();

            $requirement2         = $hook->get_requirement_by_lead_id_campaign_id( $newLead2->id, $newLead2->campaign_id );
            $requirement2->estado = 'Largo_Plazo';
            $requirement2->save();

            $lista[ $requirement2->id ] = $requirement2->id;
        }

        $requirement = new Veta_Requerimiento();
        $vencidos    = $requirement->getRequerimientosFechaExpiracionVencida(4);

        $this->assertSame( 10, count( $vencidos ) );

        foreach ( $vencidos as $vencido ) {
            $this->assertSame( $vencido->id, $lista[ $vencido->id ] );
        }
    }

    // Prueba el obtener el listado de requerimientos a largo plazo y con fecha de viaje no superior a 4 meses
    public function testGetRequerimientosFechaViajeVencida()
    {
        Utils::escenarioInicial();
        $date_now    = date( 'Y-m-d' );
        $date_future = strtotime( '+30 day', strtotime( $date_now ) );
        $date_future = date( 'Y-m-d', $date_future );

        $lista = array();

        // Se crean 20 prospectos, 10 contactos 20 requerimientos y 2 campañas
        // Solo 10 prospectos cumplen la condicion
        for ( $i = 0 ; $i < 10 ; $i++ ) {

            $newLead                           = Utils::newLead(true,0, Utils::newCampaign());
            $newLead2                          = Utils::newLead( true,0, Utils::newCampaign() );
            
            $hook                = new SOELHooksLeads();
            $requirement         = $hook->get_requirement_by_lead_id_campaign_id( $newLead->id, $newLead->campaign_id );
            $requirement->estado = 'Largo_Plazo';
            $requirement->fecha_viaje = $date_future;
            $requirement->save();

            $lista[ $requirement->id ] = $requirement->id;
        }

        $requirement = new Veta_Requerimiento();
        $vencidos    = $requirement->getRequerimientosFechaViajeVencida(4);

        $this->assertSame( 10, count( $vencidos ) );

        foreach ( $vencidos as $vencido ) {
            $this->assertSame( $vencido->id, $lista[ $vencido->id ] );
        }
    }

    // Prueba que al eliminar un prospecto se eliminen sus requerimientos
    public function testEliminarProspecto(){

        error_reporting(0);
        Utils::escenarioInicial();
        $date_now    = date( 'Y-m-d' );
        $date_future = strtotime( '+30 day', strtotime( $date_now ) );
        $date_future = date( 'Y-m-d', $date_future );

        $lista = array();

        for ( $i = 0 ; $i < 10 ; $i++ ) {
            $newLead                           = Utils::newLead(true,0, Utils::newCampaign());

            $this->assertNotNull($newLead->id);
            $this->assertNotEmpty($newLead->id);
            array_push($lista, $newLead);
        }

        $lead = new Lead();
        $requerimiento = new Veta_Requerimiento();
        $leads = $lead->get_full_list();
        $requerimientos = $requerimiento->get_full_list();

        $this->assertSame(10, count($leads));
        $this->assertSame(10, count($requerimientos));

        foreach($lista as $lead){
            $lead->mark_deleted($lead->id);
        }

        $lead = new Lead();
        $requerimiento = new Veta_Requerimiento();
        $leads = $lead->get_full_list();
        $requerimientos = $requerimiento->get_full_list();

        $this->assertSame(0, count($leads));
        $this->assertSame(0, count($requerimientos));
    }
}