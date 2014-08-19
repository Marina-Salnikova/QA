<?php
$I = new WebGuy($scenario);
$I->amOnPage('');
$I->resizeWindow(900,100);
$I->resizeWindow(1024,768);
$I->waitForElement($marker, 10);
$I->click($marker);
$I->waitForElement($weather_card,10);
//$textFromeElement=$I->grabTextFrom('//*[@id="module-1-5-2-1"]');
//$I->see($textFromeElement,'//*div[@class="searchResults__content"]');
?>
