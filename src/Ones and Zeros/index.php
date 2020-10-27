<?php declare(strict_types=1);

function binaryArrayToNumber($arr) {
  return bindec(implode(',', $arr));
}