<?php
require 'autoload.php';

$god = new GameOfLife\GOD();
$world = $god->bigBang(50, 20);
$cli = new GameOfLife\Renderer\CliRenderer($world);
$cli->render();

while(true) {
  system('clear');
  $god->nextGeneration();
  $cli->render();
}