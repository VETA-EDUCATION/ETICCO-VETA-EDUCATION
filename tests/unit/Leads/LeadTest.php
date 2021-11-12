<?php

require_once( 'tests/unit/Requerimientos.php' );
require_once( 'tests/unit/Utils.php' );
require_once( 'modules/ProspectLists/ProspectList.php' );


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
     * Este test prueba a encontrar 2 prospectos uno por email y el otro por telefono
     */
    public function testGetLeadByEmailPhone()
    {

        $email = Utils::generateEmail();

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
        $newLead               = new Lead();
        $newLead->first_name   = 'Francisco';
        $newLead->last_name    = 'Chavez';
        $newLead->phone_mobile = Utils::generatePhone();
        $newLead->save();

        $lead = $soel->get_lead_by_email_or_phone( $newLead );
        $this->assertSame( $newLead->id, $lead->id );
    }

    /**
     * Este test crea una nueva campaña y un nuevo prospecto y verifica que este creado el requerimiento
     */
    public function testGetRequirementByLeadCampaignId()
    {

        $email = Utils::generateEmail();

        // Creamos una campaña
        $campaign           = new Campaign();
        $campaign->name     = 'Prueba';
        $campaign->origen_c = 'Facebook';
        $campaign->save();

        $this->assertNotEmpty( $campaign->id );

        // Creamos un prospecto y un requerimiento
        $newLead                  = new Lead();
        $newLead->first_name      = 'Orlando';
        $newLead->last_name       = 'Rios';
        $newLead->email1          = $email;
        $newLead->campaign_id     = $campaign->id;
        $newLead->lead_source     = 'Facebook';
        $newLead->fecha_viaje_c   = 'Octubre 22';
        $newLead->fecha_viaje_2_c = '2020-10-22';
        $newLead->presupuesto_c   = 1300000;

        $newLead->save();
        $newLead->retrieve( $newLead->id );

        $hook        = new SOELHooksLeads();
        $requirement = $hook->get_requirement_by_lead_id_campaign_id( $newLead->id, $campaign->id );
        $this->assertSame( $requirement->campaign_id_c, $campaign->id );
        $this->assertSame( $requirement->fuente, $newLead->lead_source );
        $this->assertSame( $requirement->fecha_viaje_txt, $newLead->fecha_viaje_c );
        $this->assertSame( $requirement->fecha_viaje, substr( $newLead->fecha_viaje_2_c, 0, 10 ) );
        $this->assertSame( intval( $requirement->presupuesto ), intval( $newLead->presupuesto_c ) );
    }

    // Este test crea una campaña y un prospecto que genera un requerimiento luego cambia un atributo del prospecto y lo vuelve a salvar
    // finalmente prueba que no se crea un nuevo requerimiento sino que se actualiza el existente
    public function testDuplicateRequirement()
    {
        $email = Utils::generateEmail();

        // Creamos una campaña
        $campaign           = new Campaign();
        $campaign->name     = 'Prueba';
        $campaign->origen_c = 'Facebook';
        $campaign->save();

        $this->assertNotEmpty( $campaign->id );

        // Creamos un prospecto y un requerimiento
        $newLead                  = new Lead();
        $newLead->first_name      = 'Ricardo';
        $newLead->last_name       = 'Perez';
        $newLead->email1          = $email;
        $newLead->campaign_id     = $campaign->id;
        $newLead->lead_source     = 'Facebook';
        $newLead->fecha_viaje_c   = 'Octubre 22';
        $newLead->fecha_viaje_2_c = '2020-10-22';
        $newLead->presupuesto_c   = 1300000;

        $hook = new SOELHooksLeads();
        $newLead->save();
        $requirement1 = $hook->get_requirement_by_lead_id_campaign_id( $newLead->id, $campaign->id );

        $newLead->presupuesto_c = 2500;
        $newLead->save();

        $requirement2 = $hook->get_requirement_by_lead_id_campaign_id( $newLead->id, $campaign->id );
        $this->assertSame( $requirement2->campaign_id_c, $campaign->id );
        $this->assertSame( $requirement2->fuente, $newLead->lead_source );
        $this->assertSame( $requirement2->fecha_viaje_txt, $newLead->fecha_viaje_c );
        $this->assertSame( $requirement2->fecha_viaje, substr( $newLead->fecha_viaje_2_c, 0, 10 ) );
        $this->assertSame( $requirement1->id, $requirement2->id );
        $this->assertSame( intval( $requirement2->presupuesto ), intval( $newLead->presupuesto_c ) );
    }

    public function testNewLead()
    {
        error_reporting( 0 );
        set_time_limit( 30000 );

        Utils::escenarioInicial();
        $campaign = Utils::newCampaign();

        for ( $i = 0; $i < 25; $i++ )
        {
            Utils::newLead( true, $i, $campaign );
        }

        for ( $i = 0; $i < 19; $i++ )
        {
            Utils::newLead( true, $i, $campaign );
        }
    }

}