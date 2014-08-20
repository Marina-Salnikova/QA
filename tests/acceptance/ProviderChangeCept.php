<?php
$I = new WebGuy($scenario);
$I->amOnPage('');
$I->see('main_provider');
$I->see('provider');
$I->click('.//div[@class="selectors__button"][1]');
$I->see('main_provider');
$I->click('.//div[@class="selectors__button"][1]');
$I->see('provider');
$I->click('.//div[@class="selectors__button"][2]');
$I->see('main_provider');
?>