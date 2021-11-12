<?php

require_once( 'tests/unit/RequerimientosPruebas.php' );
require_once( 'modules/Leads/Lead.php' );
require_once( 'custom/modules/Leads/SOELHooksLeads.php' );

class LeadTest extends \Codeception\Test\Unit
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

    /**
     * Este test prueba que 2 prospectos con la minima información no se dupliquen
     */
    public function testGetLeadByEmailPhone()
    {
        $email               = $this->generateEmail();

        // Probamos buscando por email
        $newLead             = new Lead();
        $newLead->first_name = 'Orlando';
        $newLead->last_name  = 'Rios';
        $newLead->email1     = $email;
        $newLead->save();

        $soel = new SOELHooksLeads();
        $lead = $soel->get_lead_by_email_or_phone( $newLead );
        $this->assertSame( $newLead->id, $lead->id );

        // Probamos buscando por telefono
        $newLead             = new Lead();
        $newLead->first_name = 'Francisco';
        $newLead->last_name  = 'Chavez';
        $newLead->phone_mobile = $this->generatePhone();
        $newLead->save();

        $lead = $soel->get_lead_by_email_or_phone( $newLead );
        $this->assertSame( $newLead->id, $lead->id );

    }

    private function generatePhone()
    {
        $permitted_chars = '0123456789';
        $cad1            = substr( str_shuffle( $permitted_chars ), 0, 100 );
        return '300' . $cad1;
    }

    private function generateEmail()
    {

        $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
        $cad1            = substr( str_shuffle( $permitted_chars ), 0, 20 );
        return $cad1 . '@gmail.com';

    }
}