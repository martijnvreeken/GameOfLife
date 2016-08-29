<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace GameOfLife\Action;

/**
 * Description of TerminateAction
 *
 * @author mvreeken
 */
class TerminateAction extends Action {
  /**
   * Terminate a living cell, if the cell was already dead, no harm done. I hope
   */
  public function execute() {
    $this->cell->terminate();
  }
}
