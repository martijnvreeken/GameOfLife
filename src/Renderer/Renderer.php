<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace GameOfLife\Renderer;

use \GameOfLife\World;

/**
 * Description of Renderer
 *
 * @author mvreeken
 */
abstract class Renderer {
  /**
   * @var World $world
   */
  protected $world;
  
  /**
   * 
   * @param World $world
   */
  public function __construct(World $world) {
    $this->world = $world;
  }

  abstract public function render();
}
