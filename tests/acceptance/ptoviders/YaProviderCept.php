<?php
$I = new WebGuy($scenario);
$I->amOnPage('');
$I->seeElement('#ya');
$I->click('#ya');
$I->wait(2);
$I->click($marker);
?>