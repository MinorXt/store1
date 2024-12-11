<?php


namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class FirstCest
{
    public function _before(AcceptanceTester $I)
    {
        $I->amOnPage('/store1/index.php');
    }

    // tests
    public function addProduct(AcceptanceTester $I)
    {
        $I->click('#add_product');
        $I->fillField('#name', 'name4');
        $I->fillField('#price', '100');
        $I->fillField('#article', '004');
        $I->click('#btn');
        $I->see('name4');
    }
}
