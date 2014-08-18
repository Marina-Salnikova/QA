<?php
$I = new WebGuy($scenario);
$I->amOnPage('');
$I->fillField($search_field,'Карасук');
$I->click($submit);
$I->waitForElement($marker, 10);
?>