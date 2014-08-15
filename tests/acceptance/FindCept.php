<?php
$I = new WebGuy($scenario);
$I->amOnPage('');
$I->fillField('.//*[@class="search__input"]','Новосибирск');
$I->click('.//*[@class="search__submit"]');
$I->waitForElement($marker, 10);
?>
