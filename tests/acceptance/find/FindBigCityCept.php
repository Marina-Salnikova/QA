<?php
$I = new WebGuy($scenario);
$I->amOnPage('');
$I->fillField($search_field,'Владивосток');
$I->click($submit);
$I->waitForElement($marker2, 10);
?>