<?php

require_once( 'tests/unit/Requerimientos.php' );
require_once( 'tests/unit/Utils.php' );
require_once ('modules/SchedulersJobs/SchedulersJob.php');
require_once ('modules/Schedulers/_AddJobsHere.php');

class SchedulerTest extends \Codeception\Test\Unit
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

    public function testActualizarEstadoRequerimientos(){

       $res = actualizar_estado_requerimientos();
       $this->assertTrue($res);
    }
}