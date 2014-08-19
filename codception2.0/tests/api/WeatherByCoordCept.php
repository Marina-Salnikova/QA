<?php
$coord='/?r=weather/find&lat=55.753676&lon=37.619899&pr=owm';
$I = new ApiTester($scenario);
$I->wantTo('find weather in city');
$I->sendPOST($coord, []);
$I->seeResponseCodeIs(200);
$I->dontSeeResponseContains('error');
$I->dontSeeResponseContains('undefined');
$I->dontSeeResponseContains('null');
?>
