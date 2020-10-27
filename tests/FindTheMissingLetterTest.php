<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

class FindTheMissingLetterTest extends TestCase {
  public function testDescriptionExamples() {
    $this->assertEquals("e", find_missing_letter(['a','b','c','d','f']));
    $this->assertEquals("P", find_missing_letter(["O", "Q", "R", "S"]));
  }
}