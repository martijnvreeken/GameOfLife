<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace GameOfLife\Action;

/**
 * Description of NullAction
 *
 * @author mvreeken
 */
class NullAction extends Action{
  /**
   * The Null Action is here to enable a Rule to always return an Action
   * instance, thus simplifying the implementation
   * 
   * BTW This is an example of the Null Object design pattern
   */
  public function execute() {
  }
}
