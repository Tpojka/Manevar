<?php
 
use Tpojka\Manevar\Manevar;
 
class ManevarTest extends PHPUnit_Framework_TestCase {
 
  public function testTpoLoopBack()
  {
    $manevar = new Manevar;
    $this->assertTrue($manevar->loopBack());
  }
 
}
