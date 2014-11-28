<?php
class Example extends PHPUnit_Extensions_SeleniumTestCase
{
  protected function setUp()
  {
    $this->setBrowser("*chrome");
    $this->setBrowserUrl("https://10.117.29.3/");
  }

  public function testMyTestCase()
  {
    $this->open("/webapps/");
    $this->selectFrame("mainFrame");
    $this->type("id=login", "amauricio");
    $this->type("id=passw", "mauricio");
    $this->click("name=Submit");
    $this->waitForPageToLoad("30000");
    $this->click("//ul[@id='menuA']/li[6]/ul/li/a/span");
    $this->waitForPageToLoad("30000");
    $this->assertEquals("Consultar Solicitud", $this->getTitle());
    
  }
  
}
?>