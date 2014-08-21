<?php
$I = new WebGuy($scenario);
$I->amOnPage('');
$I->seeElement('#ya');
$I->seeElement('#ow');
$I->seeElement('#wu');
$I->click('#ow');
$I->wait(2);
$I->click($marker);
$I->waitForElement($weather_card,5);
$I->click('#wu');
//$I->wait(2);
//$I->click('.//div[@class="marker clickable cluster"][1]');
$I->click('#ya');
$I->wait(2);
$I->click($marker);
?>