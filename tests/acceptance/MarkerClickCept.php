<?php
$I = new WebGuy($scenario);
$I->amOnPage('');
$I->resizeWindow(800,900);
$I->resizeWindow(900,1000);
$I->waitForElement($marker, 10);
$I->click($marker);
$I->waitForElement('.//div[@class="dg-popup__container"]',10);
//$textFromeElement=$I->grabTextFrom('//*[@id="module-1-5-2-1"]');
//$I->see($textFromeElement,'//*div[@class="searchResults__content"]');
?>
