<?php
$I = new WebGuy($scenario);
$I->amOnPage('');
$I->seeElement('#ya');
$I->seeElement('#ow');
$I->seeElement('#wu');
$I->click('#ow');
//$I->seeElement('.//*[@class="selectors__button _ow _selected"]');
$I->click('#wu');
//$I->seeElement('.//*[@class="selectors__button _wu _selected"]');
$I->click('#ya');
//$I->seeElement('.//*[@class="selectors__button _ya _selected"]');
?>