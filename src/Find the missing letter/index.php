<?php declare(strict_types=1);

function find_missing_letter(array $array): string {
  $alphas = array_merge(range('A', 'Z'), range('a', 'z'));
  foreach($alphas as $k=>&$item) {
    if($item ===  $array[0]) {
      $start = $item;
      $start_k = $k;
    }
    if($item === max($array)) {
      $end = $item;
      $end_k = $k;
    }
  }
  
  $arr_range = range($alphas[$start_k], $alphas[$end_k]);
  $arr_diff = array_diff($arr_range, $array);
  $diff_letter = implode($arr_diff);
    
  return $diff_letter;
}