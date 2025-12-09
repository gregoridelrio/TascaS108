<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../src/speedChecker.php';

class speedCheckerTest extends TestCase
{
  public function testIsSlow()
  {
    $speed = new speedChecker(29);
    $this->assertEquals('Molt lent', $speed->speedSensor());
  }
  public function testIsSpeedOk()
  {
    $speed = new speedChecker(30);
    $this->assertEquals('Velocitat adequada', $speed->speedSensor());
  }
  public function testIsSlightExcess()
  {
    $speed = new speedChecker(61);
    $this->assertEquals('Excés lleu', $speed->speedSensor());
  }
  public function testIsModerateExcess()
  {
    $speed = new speedChecker(81);
    $this->assertEquals('Excés moderat', $speed->speedSensor());
  }
  public function testIsExcessiveSeverity()
  {
    $speed = new speedChecker(101);
    $this->assertEquals('Excés greu', $speed->speedSensor());
  }
}
