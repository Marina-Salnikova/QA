<?php
$I = new WebGuy($scenario);
$I->amOnPage('');
$I->seeElement('#ya');
$I->seeElement('#ow');
$I->seeElement('#wu');
$I->click('#ow');
$I->click('#wu');
$I->click('#ya');
?>