<?php 

class NewLeadCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    private function generateEmail()
    {

        $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
        $cad1            = substr( str_shuffle( $permitted_chars ), 0, 20 );
        return $cad1 . '@gmail.com';

    }

    private function generatePhone()
    {
        $permitted_chars = '0123456789';
        $cad1            = substr( str_shuffle( $permitted_chars ), 0, 100 );
        return '300' . $cad1;
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
        // Vamos a la pagina de inicio de sesion
        $I->amOnPage('/index.php?action=Login&module=Users&action=Login&login_language=es_ES');
        $I->see('Supercharged by SuiteCRM');

        $I->fillField('user_name','soel');
        $I->fillField('username_password','agassi');
        $I->click('bigbutton');
        $I->see('ADMISIONES');

        // Vamos a crear un prospecto
        $I->amOnPage('/index.php?module=Leads&action=EditView&return_module=Leads&return_action=DetailView');
        $I->see('CREAR');
        $I->see('Primer Nombre');
        $I->see('Apellidos');
        $I->see('Correo electrónico');
        $I->see('Principal');
        $I->see('GUARDAR');

        // LLenamos el prospecto y le damos clic salvar
        $phone = $this->generatePhone();
        $I->fillField('first_name','Francisco');
        $I->fillField('last_name','Peña');
        $I->fillField('phone_mobile', $phone);

        $I->click("//form[@id='EditView']/div[@class='buttons']/input[1]");
                       

        $I->see($phone);
        $I->see('Francisco');
        $I->see('Peña');
        $I->see('1 de ');



    }

    
}
