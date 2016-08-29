<?php

spl_autoload_register(function($class) {

  // explode the namespace of the class
  $segments = explode("\\", $class);

  // if the namespace does not start with TSL, then we have no business handling this
  if (array_shift($segments) !== 'GameOfLife') return;

  // define the path to the class
  $path = 'src' . DIRECTORY_SEPARATOR . implode(DIRECTORY_SEPARATOR, $segments) . '.php';

  if (file_exists($path)) {
    include $path;
  } else {
    throw new Exception("$path not found");
  }
});
