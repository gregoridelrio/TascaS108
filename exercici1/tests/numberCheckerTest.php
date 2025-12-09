<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../src/numberChecker.php';

class numberCheckerTest extends TestCase
{

  public function testIsEvenWithEvenNumber()
  {
    $number = new NumberChecker(2);
    $this->assertTrue($number->isEven());
  }
  public function testIsEvenWithOddNumber()
  {
    $number = new NumberChecker(3);
    $this->assertFalse($number->isEven());
  }
  public function testIsPositiveWithPositiveNumber()
  {
    $number = new NumberChecker(5);
    $this->assertTrue($number->isPositive());
  }
  public function testIsPositiveWithNegativeNumber()
  {
    $number = new NumberChecker(-4);
    $this->assertFalse($number->isPositive());
  }
}
