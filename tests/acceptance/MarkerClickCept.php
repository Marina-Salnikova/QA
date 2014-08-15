<?php
$I = new WebGuy($scenario);
$I->amOnPage('');
$I->fillField('.//*[@class="search__input"]','Новосибирск');
$I->click('.//*[@class="search__submit"]');
$I->waitForElement($marker, 20);
//$I->click($marker);
//$I->waitForElement('//*[@id="module-1-5-2-1"]');
//$textFromeElement=$I->grabTextFrom('//*[@id="module-1-5-2-1"]');
//$I->see($textFromeElement,'//*div[@class="searchResults__content"]');
?>
