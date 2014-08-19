<?php 
$I = new ApiTester($scenario);
$I->wantTo('find weather in city');
$I->sendPOST('/?r=weather/find&city=Novosibirsk&pr=ya', []);
$I->seeResponseCodeIs(200);
$I->dontSeeResponseContains('error');
$I->dontSeeResponseContains('undefined');
$I->dontSeeResponseContains('null');
?>
