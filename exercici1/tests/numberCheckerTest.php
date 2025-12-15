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
  /**
   * @dataProvider numberProvider
   */
  public function testNumberChecker(int $number, bool $expectedEven, bool $expectedPositive): void
  {
    $checker = new NumberChecker($number);

    $this->assertEquals($expectedEven, $checker->isEven());
    $this->assertEquals($expectedPositive, $checker->isPositive());
  }

  public static function numberProvider(): array
  {
    return [
      'positiu parell' => [4, true, true],
      'positiu imparell' => [3, false, true],
      'negatiu parell' => [-2, true, false],
      'negatiu imparell' => [-5, false, false],
      'zero' => [0, true, false],
    ];
  }
}
