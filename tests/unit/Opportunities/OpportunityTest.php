<?php

require_once( 'tests/unit/Requerimientos.php' );
require_once( 'tests/unit/Utils.php' );

class OpportunityTest extends \Codeception\Test\Unit {
    /**
     * @var \UnitTester
     */
    protected $tester;

    protected function _before() {
    }

    protected function _after() {
    }

    // Prueba que los consecutivos del requerimiento se esten generando bien
    public function testConsecutive() {

        for ( $i = 0; $i < 10; $i++ ) {

            $_GET[ "rid" ] = -1;
            $o1            = new Opportunity();
            $o2            = new Opportunity();

            $o1->save();
            $o2->save();

            $this->assertNotEmpty( $o1->id );
            $this->assertNotEmpty( $o2->id );

            $this->assertSame( intval( $o1->name ) + 1, intval( $o2->name ) );
        }

    }

    // Crea un abono a una cuenta de cobro para probar que la oportunidad generada este en estado '
    public function testNuevoAbono1() {

        Utils::escenarioInicial();
        $newLead     = Utils::newLead(true, 0 , Utils::newCampaign());
        $proceso_venta = Utils::createNewOpportunity( $newLead, 1000);

        $proceso_venta->retrieve( $proceso_venta->id );

        $this->assertSame( 'Abono', $proceso_venta->estado_cartera_c );
        $this->assertSame( substr( $newLead->fecha_viaje_2_c, 0, 10 ), $proceso_venta->fecha_viaje_c );
    }

    // Prueba que no se pueda eliminar un prospecto que tiene una oportunidad
    public function testEliminarProspectoConOportunidad() {

        error_reporting( 0 );
        Utils::escenarioInicial();
        $newLead     = Utils::newLead(true, 0 ,  Utils::newCampaign());
        $proceso_venta = Utils::createNewOpportunity( $newLead );

        $leads  = $newLead->get_full_list();
        $ventas = $proceso_venta->get_full_list();

        $this->assertEquals( 1, count( $leads ) );
        $this->assertEquals( 1, count( $ventas ) );

        try {
            $newLead->mark_deleted( $newLead->id );
        }
        catch ( Exception $e ) {

        }

        $leads  = $newLead->get_full_list();
        $ventas = $proceso_venta->get_full_list();

        $this->assertEquals( 1, count( $leads ) );
        $this->assertEquals( 1, count( $ventas ) );
    }

    // Prueba que no se pueda eliminar un estudiante que tiene una oportunidad
    public function testEliminarContactoConOportunidad() {

        error_reporting( 0 );

        $exito = false;

        Utils::escenarioInicial();
        $newLead     = Utils::newLead(true, 0 , Utils::newCampaign());

        $contacto = new Contact();
        $contacto->retrieve( $newLead->contact_id );

        $proceso_venta = Utils::createNewOpportunity( $newLead );

        $contactos = $contacto->get_full_list();
        $ventas    = $proceso_venta->get_full_list();

        $this->assertEquals( 1, count( $contactos ) );
        $this->assertEquals( 1, count( $ventas ) );

        try {
            $contacto->mark_deleted( $contacto->id );

        }
        catch ( Exception $e ) {
            $this->assertEquals( SOELHooksContacts::ELIMINARESTUDIANTECONPROCESO, $e->getMessage() );
            $exito = true;
        }

        $this->assertEquals( true, $exito );
        $contactos = $contacto->get_full_list();
        $ventas    = $proceso_venta->get_full_list();

        $this->assertEquals( 1, count( $contactos ) );
        $this->assertEquals( 1, count( $ventas ) );
    }

    public function testCrearLoo() {

        error_reporting(0);
        Utils::escenarioInicial();
        $newLead     = Utils::newLead(true,0, Utils::newCampaign());
        $proceso_venta = Utils::createNewOpportunity( $newLead );

        $a    = new Veta_Aplicacion();
        $apps = $a->get_full_list();

        $a                    = $apps[ 0 ];
        $a->estado_aplicacion = 'Aplicacion_Enviada';
        $a->save();

        $loo  = new Veta_Loo();
        $loos = $loo->get_full_list();
        $loo  = $loos[ 0 ];

        $loo->estado_loo = "Carta_Oferta_Firmada";
        $loo->save();

        $liquidacion   = new Veta_Liquidacion();
        $liquidaciones = $liquidacion->get_full_list();
        $liquidacion   = $liquidaciones[ 0 ];

        // Creamos abonos
        $cuenta_cobro            = new Veta_Recibo();
        $cuentas_cobro           = $cuenta_cobro->get_full_list();
        $cuenta_cobro            = $cuentas_cobro[ 0 ];
        $_REQUEST[ "relate_to" ] = 'veta_abono_veta_recibo';
        $_REQUEST[ "relate_id" ] = $cuenta_cobro->id;

        $abono        = new Veta_Abono();
        $abono->monto = 10000;
        $abono->save();

        $liquidacion->estado_pago_colegios = 'Solicitar_COE';
        $liquidacion->save();

        $coe  = new Veta_COE();
        $coes = $coe->get_full_list();
        $coe  = $coes[ 0 ];
    }
}