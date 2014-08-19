<?php
$I = new WebGuy($scenario);
$I->amOnPage('');
$I->fillField($search_field,'Omsk');
$I->click($submit);
$I->waitForElement($marker, 10);
?>