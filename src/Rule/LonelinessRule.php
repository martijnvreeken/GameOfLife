<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace GameOfLife\Rule;

use GameOfLife\GOD;
use GameOfLife\Action\NullAction;
use GameOfLife\Action\TerminateAction;

/**
 * Description of LonelinessRule
 *
 * @author mvreeken
 */
class LonelinessRule implements Rule {
  const MIN_NEIGHBOURS = 2;
  
  /**
   * 
   * @param Cell $cell
   * @param Cell[] $neighbours
   * @return TerminateAction|NullAction
   */
  public function apply($cell, $neighbours) {
    $aliveCount = GOD::aliveCount($neighbours);
    if ($aliveCount < self::MIN_NEIGHBOURS) {
      return new TerminateAction($cell);
    }
    
    return new NullAction($cell);
  }

}
