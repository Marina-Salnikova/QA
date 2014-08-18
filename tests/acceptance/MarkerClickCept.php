<?php
$I = new WebGuy($scenario);
$I->amOnPage('');
$I->fillField('.//*[@class="search__input"]','Москва');
$I->click('.//*[@class="search__submit"]');
$I->waitForElement($marker, 10);
$I->click($marker);
$I->waitForElement('.//div[@class="dg-popup__container"]');
//$textFromeElement=$I->grabTextFrom('//*[@id="module-1-5-2-1"]');
//$I->see($textFromeElement,'//*div[@class="searchResults__content"]');
?>
