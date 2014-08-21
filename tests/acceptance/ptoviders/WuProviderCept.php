<?php
$I = new WebGuy($scenario);
$I->amOnPage('');
$I->seeElement('#wu');
$I->click('#wu');
$I->wait(2);
$I->click($marker);
?>