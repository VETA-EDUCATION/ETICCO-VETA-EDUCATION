<?php

require_once( 'tests/unit/Requerimientos.php' );
require_once( 'tests/unit/Utils.php' );

class LooTest extends \Codeception\Test\Unit {
    /**
     * @var \UnitTester
     */
    protected $tester;

    protected function _before() {
    }

    protected function _after() {
    }

    // Crea un abono a una cuenta de cobro para probar que la oportunidad generada este en estado '
    public function testCrearLoos() {

        Utils::escenarioLoo();
    }
}