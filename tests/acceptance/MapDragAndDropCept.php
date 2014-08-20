<?php
$I = new WebGuy($scenario);
$I->amOnPage('');
$I->dragAndDrop('#map','#map');
$I->wait(3);
$I->click($marker);
?>