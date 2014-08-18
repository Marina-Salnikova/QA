<?php
$I = new WebGuy($scenario);
$I->amOnPage('');
$I->fillField($search_field,'Barnaul');
$I->click($submit);
$I->waitForElement($marker, 10);
?>