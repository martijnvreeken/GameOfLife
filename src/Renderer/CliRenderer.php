<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace GameOfLife\Renderer;

/**
 * Description of CliRenderer
 *
 * @author mvreeken
 */
class CliRenderer extends Renderer {
  public function render() {
    $stream = fopen('php://output', 'a');
    for ($y = 0; $y < $this->world->getHeight(); $y++) {
      for ($x = 0; $x < $this->world->getWidth(); $x++) {
        $cell = $this->world->getCell($x, $y);
        $char = $cell->isAlive() ? "*" : " ";
        fputs($stream, $char);
      }
      fputs($stream, "\n");
    }
    fclose($stream);
    usleep(400000);
  }
}
