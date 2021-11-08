<?php

$is_nice = false;
$has_ice_cream = true;

if ($is_nice) {
  echo 'Is nice.';
} elseif (!$is_nice && $has_ice_cream) {
  echo 'Maybe is not very nice, but there is free ice cream.';
} else {
  echo 'Is not nice.';
}
