<?php
$I = new WebGuy($scenario);
$I->amOnPage('');
$I->resizeWindow(900,100);
$I->resizeWindow(1024,768);
$I->wait(3);
$I->click($marker);
$I->waitForElement($weather_card,10);
?>
