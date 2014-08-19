<?php
$area='/?r=weather/find&lon_top=82.560544&lat_top=55.174534&lon_bottom=83.318972&lat_bottom=54.843024';
$I = new ApiTester($scenario);
$I->wantTo('find weather in city');
$I->sendPOST($area, []);
$I->seeResponseCodeIs(200);
$I->dontSeeResponseContains('error');
$I->dontSeeResponseContains('undefined');
$I->dontSeeResponseContains('null');
?>
