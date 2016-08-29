<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace GameOfLife\Rule;

use GameOfLife\GOD;
use GameOfLife\Action\ResurrectAction;
use GameOfLife\Action\NullAction;

/**
 * Description of ResurrectRule
 *
 * @author mvreeken
 */
class ResurrectRule implements Rule {
  const RESURRECT_COUNT = 3;
  
  /**
   * 
   * @param Cell $cell
   * @param Cell[] $neighbours
   * @return NullAction|ResurrectAction
   */
  public function apply($cell, $neighbours) {
    $aliveCount = GOD::aliveCount($neighbours);
    if($aliveCount === self::RESURRECT_COUNT) {
      return new ResurrectAction($cell);
    }
    return new NullAction($cell);
  }
}
