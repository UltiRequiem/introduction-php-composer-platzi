<?php

$is_logged_in = true;

switch ($is_logged_in) {
  case true:
    echo 'Welcome!';
    break;
  case false:
    echo 'Please log in.';
}
