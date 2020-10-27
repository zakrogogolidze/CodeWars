<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

class InvertTest extends TestCase {
  public function testFixed() {
    $this->assertEquals([-1, -2, -3, -4, -5], invert([1, 2, 3, 4, 5]));
    $this->assertEquals([-1, 2, -3, 4, -5], invert([1, -2, 3, -4, 5]));
    $this->assertEquals([], invert([]));
    $this->assertEquals([0], invert([0]));
  }
}
