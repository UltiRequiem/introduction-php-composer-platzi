<?php

function get_primes($max)
{

  $arr = [];

  for ($i = 0; $i < $max; $i++) {
    if ($i % 2) {
      array_push($arr, $i);
    }
  }

  return $arr;
}

$primes_to_10 = get_primes(10);

foreach ($primes_to_10 as $num) {
  echo "$num\n";
}
