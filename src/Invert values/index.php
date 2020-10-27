<?php declare(strict_types=1);

function invert(array $a): array {
    foreach($a as &$item) {
      $item = $item*(-1);
    }
    return $a;
}