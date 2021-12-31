<?php 

class NewLeadCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
        $I->amOnPage('/fasdfadsf');
        $I->see('Welcome fasfasdfas');
    }

    // tests
    public function tryToTest2(AcceptanceTester $I)
    {
        $I->amOnPage('/fasdfadsf');
        $I->see('Welcome fasfasdfas');
    }
}
