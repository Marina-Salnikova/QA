<?php
$I = new WebGuy($scenario);
$I->amOnPage('');
$I->fillField($search_field,'Москва');
$I->click($submit);
$I->waitForElement($marker, 10);
$I->click($marker);
$I->waitForElement($weather_card,10);
?>
