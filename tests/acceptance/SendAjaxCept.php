<?php
$I = new WebGuy($scenario);
$I->sendAjaxPostRequest('http://localhost/backend/?r=weather/find&pr=ya&city=Москва', array('callback' => 'data'));
$I->sendAjaxGetRequest('http://localhost/backend/?r=weather/find&pr=ya&city=Москва', array('callback' => 'data'));
//assert()
?>