<?php

class CreateLeadCest
{
    public function _before( ApiTester $I )
    {
    }

    private function generateEmail()
    {
        $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
        $cad1            = substr( str_shuffle( $permitted_chars ), 0, 20 );
        return $cad1 . '@gmail.com';
    }

    private function getSessionId( ApiTester $I )
    {
        $data = array(
            'user_auth' =>
                array(
                    'user_name' => 'soel',
                    'password' => '869e6b24288603dff00067ac9365b913',
                ),
            'application_name' => 'SoapTest',
        );

        $I->haveHttpHeader( 'accept', 'application/json' );
        $I->haveHttpHeader( 'content-type', 'application/json' );

        $I->sendGET( '', [
            'method' => 'login',
            'input_type' => 'JSON',
            'response_type' => 'JSON',
            'rest_data' => json_encode( $data )
        ] );
        
        $I->seeResponseCodeIs( 200 );
        $I->seeResponseIsJson();
        $I->seeResponseContains( '"module_name":"Users"' );
        $sid = $I->grabDataFromResponseByJsonPath( '$.id' )[ 0 ];

        return $sid;
    }

    // Prueba que al crear un prospecto y este ya exista se actualiza el prospecto existente
    public function duplicateLeadTest( ApiTester $I )
    {
        $sessionid = $this->getSessionId( $I );
        $email               = $this->generateEmail();
        
        $data = array (
            'session' => $sessionid,
            'module_name' => 'Leads',
            'name_value_list' =>
                array (
                    0 =>
                        array (
                            'name' => 'first_name',
                            'value' => 'Jhon',
                        ),
                    1 =>
                        array (
                            'name' => 'last_name',
                            'value' => 'Doe',
                        ),
                    2 =>
                        array (
                            'name' => 'fecha_expiracion_visa_c',
                            'value' => '2020-02-20',
                        ),
                    3 =>
                        array (
                            'name' => 'phone_mobile',
                            'value' => '3114664112221',
                        ),
                    4 =>
                        array (
                            'name' => 'email1',
                            'value' => $email,
                        ),
                    6 =>
                        array (
                            'name' => 'campaign_id_c',
                            'value' => '64e2718e-793e-4b9f-6bc9-5cfd124c7ad6',
                        ),
                ),
        );

        $I->haveHttpHeader( 'accept', 'application/json' );
        $I->haveHttpHeader( 'content-type', 'application/json' );
        
        $I->sendGET( '', [
            'method' => 'set_entry',
            'input_type' => 'JSON',
            'response_type' => 'JSON',
            'rest_data' => json_encode( $data )
        ] );

        $I->seeResponseCodeIs( 200 );
        $I->seeResponseIsJson();
        $I->seeResponseContains( '"entry_list"' );
        $I->seeResponseContains( '"Jhon"' );
        $I->seeResponseContains( '"Doe"' );

        $leadId = $I->grabDataFromResponseByJsonPath( '$.id' )[ 0 ];
        $I->seeResponseContains( $leadId );

        $data = array (
            'session' => $sessionid,
            'module_name' => 'Leads',
            'name_value_list' =>
                array (
                    0 =>
                        array (
                            'name' => 'first_name',
                            'value' => 'Diana',
                        ),
                    1 =>
                        array (
                            'name' => 'last_name',
                            'value' => 'Diaz',
                        ),
                    2 =>
                        array (
                            'name' => 'fecha_expiracion_visa_c',
                            'value' => '2020-02-20',
                        ),
                    3 =>
                        array (
                            'name' => 'phone_mobile',
                            'value' => '3114664112221',
                        ),
                    4 =>
                        array (
                            'name' => 'email1',
                            'value' => $email,
                        ),
                    6 =>
                        array (
                            'name' => 'campaign_id_c',
                            'value' => '64e2718e-793e-4b9f-6bc9-5cfd124c7ad6',
                        ),
                ),
        );
        $I->sendGET( '', [
            'method' => 'set_entry',
            'input_type' => 'JSON',
            'response_type' => 'JSON',
            'rest_data' => json_encode( $data )
        ] );
        $I->seeResponseCodeIs( 200 );
        $I->seeResponseIsJson();
        $I->seeResponseContains( '"entry_list"' );
        $I->seeResponseContains( $leadId );
        $I->seeResponseContains( '"Diana"' );
        $I->seeResponseContains( '"Diaz"' );
        
    }

    // Prueba actualizar un prospecto existente
    public function updateLeadTest( ApiTester $I )
    {
        $sessionid = $this->getSessionId( $I );
        $email               = $this->generateEmail();

        $data = array (
            'session' => $sessionid,
            'module_name' => 'Leads',
            'name_value_list' =>
                array (
                    0 =>
                        array (
                            'name' => 'first_name',
                            'value' => 'Edgar',
                        ),
                    1 =>
                        array (
                            'name' => 'last_name',
                            'value' => 'Sanchez',
                        ),
                    2 =>
                        array (
                            'name' => 'fecha_expiracion_visa_c',
                            'value' => '2020-02-20',
                        ),
                    3 =>
                        array (
                            'name' => 'phone_mobile',
                            'value' => '3114664112221',
                        ),
                    4 =>
                        array (
                            'name' => 'email1',
                            'value' => $email,
                        ),
                    6 =>
                        array (
                            'name' => 'campaign_id_c',
                            'value' => '64e2718e-793e-4b9f-6bc9-5cfd124c7ad6',
                        ),
                ),
        );

        $I->haveHttpHeader( 'accept', 'application/json' );
        $I->haveHttpHeader( 'content-type', 'application/json' );

        $I->sendGET( '', [
            'method' => 'set_entry',
            'input_type' => 'JSON',
            'response_type' => 'JSON',
            'rest_data' => json_encode( $data )
        ] );

        $I->seeResponseCodeIs( 200 );
        $I->seeResponseIsJson();
        $I->seeResponseContains( '"entry_list"' );
        $I->seeResponseContains( '"Edgar"' );
        $I->seeResponseContains( '"Sanchez"' );

        $leadId = $I->grabDataFromResponseByJsonPath( '$.id' )[ 0 ];
        $I->seeResponseContains( $leadId );

        $data = array (
            'session' => $sessionid,
            'module_name' => 'Leads',
            'name_value_list' =>
                array (
                    0 =>
                        array (
                            'name' => 'id',
                            'value' => $leadId,
                        ),
                    1 =>
                        array (
                            'name' => 'first_name',
                            'value' => 'Diana',
                        ),
                    2 =>
                        array (
                            'name' => 'last_name',
                            'value' => 'Diaz',
                        ),
                    3 =>
                        array (
                            'name' => 'fecha_expiracion_visa_c',
                            'value' => '2020-02-20',
                        ),
                    4 =>
                        array (
                            'name' => 'phone_mobile',
                            'value' => '3114664112221',
                        ),
                    5 =>
                        array (
                            'name' => 'email1',
                            'value' => $email,
                        ),
                    6 =>
                        array (
                            'name' => 'campaign_id_c',
                            'value' => '64e2718e-793e-4b9f-6bc9-5cfd124c7ad6',
                        ),
                ),
        );
        $I->sendGET( '', [
            'method' => 'set_entry',
            'input_type' => 'JSON',
            'response_type' => 'JSON',
            'rest_data' => json_encode( $data )
        ] );
        $I->seeResponseCodeIs( 200 );
        $I->seeResponseIsJson();
        $I->seeResponseContains( '"entry_list"' );
        $I->seeResponseContains( $leadId );
        $I->seeResponseContains( '"Diana"' );
        $I->seeResponseContains( '"Diaz"' );

    }
}
