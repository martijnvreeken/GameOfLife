<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace GameOfLife\Rule;

/**
 *
 * @author mvreeken
 */
interface Rule {
  /**
   * 
   * @param Cell $cell
   * @param Cell[] $neighbours
   * @return Action\Action
   *   returns an implemention of the Action interface
   */
  public function apply($cell, $neighbours);
}
