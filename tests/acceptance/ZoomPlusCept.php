<?php
$I = new WebGuy($scenario);
$I->amOnPage('');
$I->doubleClick('#map');
$I->wait(3);
$I->click($marker);
?>