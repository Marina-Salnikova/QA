<?php
$I = new WebGuy($scenario);
$I->amOnPage('');
$I->fillField('.//*[@class="search__input"]','Новосибирск');
$I->click('.//*[@class="search__submit"]');
$marker='.//div[@class="leaflet-marker-icon dg-customization__marker dg-customization__marker_type_mushroom leaflet-zoom-animated leaflet-clickable"][1]';
$I->waitForElement($marker, 20);
//$I->SeeElement($marker);
//$I->click($marker);
//$I->waitForElement('//*[@id="module-1-5-2-1"]');
//$textFromeElement=$I->grabTextFrom('//*[@id="module-1-5-2-1"]');
//$I->see($textFromeElement,'//*div[@class="searchResults__content"]');
?>
