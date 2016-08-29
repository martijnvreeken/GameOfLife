<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace GameOfLife\Action;

/**
 * Description of Action
 *
 * @author mvreeken
 */
abstract class Action {
  /**
   *
   * @var Cell cell
   */
  protected $cell;
  
  /**
   * 
   * @param Cell $cell
   */
  public function __construct($cell) {
    $this->cell = $cell;
  }
  
  /**
   * Execute the Action on the Cell, a matter of life and death
   */
  abstract public function execute();
}
