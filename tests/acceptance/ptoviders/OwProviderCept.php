<?php
$I = new WebGuy($scenario);
$I->amOnPage('');
$I->seeElement('#ow');
$I->click('#ow');
$I->wait(2);
$I->click($marker);
?>