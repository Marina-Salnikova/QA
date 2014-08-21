<?php
class WebTest extends PHPUnit_Extensions_Selenium2TestCase
{
    protected function setUp()
    {
	$this->setHost('10.54.72.107');
	$this->setBrowser('chrome');
        $this->setBrowserUrl('http://2gis.ru/');
    }

    public function testCityName()
    {
        $this->url('http://2gis.ru/novosibirsk');
 	$element = $this->byClassName('dashboard__cityNameLink');
        $this->assertEquals('Новосибирск', $element->text());
    }

}
?>