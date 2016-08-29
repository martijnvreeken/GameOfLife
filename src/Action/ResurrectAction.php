<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace GameOfLife\Action;

/**
 * Description of ResurrectAction
 *
 * @author mvreeken
 */
class ResurrectAction extends Action {
  /**
   * Resurrect a dead cell, if the cell was already alive, no harm done
   */
  public function execute() {
    $this->cell->resurrect();
  }
}
