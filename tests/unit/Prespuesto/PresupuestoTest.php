<?php

require_once( 'tests/unit/Requerimientos.php' );
require_once( 'tests/unit/Utils.php' );

class PresupuestoTest extends \Codeception\Test\Unit {
    /**
     * @var \UnitTester
     */
    protected $tester;

    protected function _before() {
    }

    protected function _after() {
    }

    /**
     * Este metodo crea varios presupuestos y prueba que su consecutivo funciona bien
     */
    public function testConsecutivo() {

        Utils::escenarioInicial();

        $presupuestos = array();
        $max          = 10;
        $newLead      = Utils::newLead(true, 0, Utils::newCampaign());

        for ( $i = 0; $i < $max; $i++ ) {
            $presupuesto = Utils::createNewPresupuesto( $newLead );
            $presupuesto->save();
            array_push( $presupuestos, $presupuesto );
        }

        for ( $i = 0; $i < $max; $i++ ) {

            if ( $i > 0 ) {
                $this->assertSame( intval( $presupuestos[ $i ]->name ), intval( $presupuestos[ $i - 1 ]->name ) + 1 );
            }
        }
    }

    /**
     * Este metodo prueba que al crear un presupuesto este quede relacionado con el estudiante, el prospecto y el requerimiento
     */
    public function testRelaciones() {

        Utils::escenarioInicial();

        $newLead     = Utils::newLead(true,0, Utils::newCampaign());
        $presupuesto = Utils::createNewPresupuesto( $newLead );
        $presupuesto->save();

        $leads = $presupuesto->get_linked_beans( 'veta_presupuesto_leads', 'Lead' );
        $this->assertSame( 1, count( $leads ) );

        foreach ( $leads as $lead ) {
            $this->assertSame( $newLead->id, $lead->id );
        }

        $contacts = $presupuesto->get_linked_beans( 'veta_presupuesto_contacts', 'Contact' );
        $this->assertSame( 1, count( $contacts ) );

        foreach ( $contacts as $contact ) {
            $this->assertSame( $newLead->contact_id, $contact->id );
        }

        $requerimientos = $presupuesto->get_linked_beans( 'veta_requerimiento_veta_presupuesto', 'Veta_Requerimiento' );
        $this->assertSame( 1, count( $requerimientos ) );
    }

    public function testFechaPrimerPresupuesto() {

        Utils::escenarioInicial();

        $newLead = Utils::newLead(true,0, Utils::newCampaign());

        $presupuesto1 = Utils::createNewPresupuesto( $newLead );
        $presupuesto1->save();

        $presupuesto2 = Utils::createNewPresupuesto( $newLead );
        $presupuesto2->save();

        $presupuesto3 = Utils::createNewPresupuesto( $newLead );
        $presupuesto3->save();

        $presupuesto1->retrieve( $presupuesto1->id );
        $requerimientos = $presupuesto1->get_linked_beans( 'veta_requerimiento_veta_presupuesto', 'Veta_Requerimiento' );

        foreach ( $requerimientos as $req ) {
            $this->assertSame( $req->fecha_primer_presupuesto, substr( $presupuesto1->date_entered, 0, 10 ) );
        }
    }

    public function testDescuentoPresupuesto() {

        error_reporting( 0 );

        Utils::escenarioInicial();
        $curso   = Utils::createNewCurso();
        $newLead = Utils::newLead(true,0, Utils::newCampaign());

        $contacto = new Contact();
        $contacto->retrieve( $newLead->contact_id );

        $presupuesto = Utils::createNewPresupuesto( $newLead );
        $presupuesto->save();

        $detalle_presupuesto                   = new Veta_DetallePresupuesto();
        $detalle_presupuesto->veta_curso_id_c  = $curso->id;
        $detalle_presupuesto->bono             = 0;
        $detalle_presupuesto->descripcion_bono = 'Bono prueba';
        $detalle_presupuesto->save();

        $presupuesto->load_relationship( 'veta_detallepresupuesto_veta_presupuesto' );
        $presupuesto->veta_detallepresupuesto_veta_presupuesto->add( $detalle_presupuesto->id );
        $presupuesto->update_totals();

        $p = new Veta_Presupuesto();
        $p->retrieve( $presupuesto->id );

        $dt = new Veta_DetallePresupuesto();
        $dt->retrieve( $detalle_presupuesto->id );

        $this->assertSame( (int)$dt->total_curso, 8759 );
        $this->assertSame( (int)$p->subtotal, 8759 );
        $this->assertSame( (int)$p->gran_total, 8754 );
    }

    /**
     * Este metodo prueba que no se puede genearar un presupuesto si el prospecto no tiene celular
     */
    public function testValidarCelularProspecto() {

        $exito = false;

        try {
            Utils::escenarioInicial();

            $newLead               = Utils::newLead(true,0, Utils::newCampaign());
            $newLead->phone_mobile = '';
            $newLead->save();

            $presupuesto = Utils::createNewPresupuesto( $newLead );
            $presupuesto->save();
        }
        catch ( Exception $e ) {
            $this->assertEquals( $e->getMessage(), Veta_Presupuesto::PROSPECTOSINCELULAR );
            $exito = true;
        }

        $this->assertEquals( true, $exito );
    }

    /**
     * Este metodo prueba que no se puede genearar un presupuesto si el prospecto no tiene email
     */
    public function testValidarEmailProspecto() {

        $exito = false;
        try {
            Utils::escenarioInicial();

            $newLead = Utils::newLead( false,0, Utils::newCampaign() );

            $presupuesto = Utils::createNewPresupuesto( $newLead );
            $presupuesto->save();
        }
        catch ( Exception $e ) {
            $this->assertEquals( $e->getMessage(), Veta_Presupuesto::PROSPECTOSINEMAIL );
            $exito = true;
        }

        $this->assertEquals( true, $exito );
    }

    /**
     * Este metodo prueba que no se puede genearar un presupuesto si el requerimiento no referido
     */
    public function testValidarReferidoRequerimiento() {

        $exito = false;

        try {
            Utils::escenarioInicial();

            $newLead = Utils::newLead(true, 0, Utils::newCampaign());

            $requerimientos = $newLead->get_linked_beans( 'veta_requerimiento_leads', 'Veta_Requerimiento' );

            foreach ( $requerimientos as $req ) {
                $req->referido = '';
                $req->save();
            }

            $presupuesto = Utils::createNewPresupuesto( $newLead );
            $presupuesto->save();
        }
        catch ( Exception $e ) {
            $this->assertEquals( $e->getMessage(), Veta_Presupuesto::REQUERIMIENTOSINREFERIDO );
            $exito = true;
        }

        $this->assertEquals( true, $exito );
    }

    /**
     * Este metodo prueba que no se puede genearar un presupuesto si el requerimiento no referido
     */
    public function testValidarFuenteRequerimiento() {

        $exito = false;

        try {
            Utils::escenarioInicial();

            $newLead = Utils::newLead(true, 0, Utils::newCampaign());

            $requerimientos = $newLead->get_linked_beans( 'veta_requerimiento_leads', 'Veta_Requerimiento' );

            foreach ( $requerimientos as $req ) {
                $req->fuente = '';
                $req->save();
            }

            $presupuesto = Utils::createNewPresupuesto( $newLead );
            $presupuesto->save();
        }
        catch ( Exception $e ) {
            $this->assertEquals( $e->getMessage(), Veta_Presupuesto::REQUERIMIENTOSINFUENTE );
            $exito = true;
        }

        $this->assertEquals( true, $exito );
    }
}