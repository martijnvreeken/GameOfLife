<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace GameOfLife;

/**
 * Description of Cell
 *
 * @author mvreeken
 */
class Cell {
  private $alive;
  private $x;
  private $y;
  
  /**
   * 
   * @param bool $alive
   * @param int $xcoord
   * @param int $ycoord
   */
  public function __construct($alive, $xcoord, $ycoord) {
    $this->alive = $alive;
    $this->x = $xcoord;
    $this->y = $ycoord;
  }
  
  /**
   * 
   * @return bool
   */
  public function isAlive() {
    return $this->alive;
  }
  
  /**
   * 
   * @return int
   */
  public function getX() {
    return $this->x;
  }
  
  /**
   * 
   * @return int
   */
  public function getY() {
    return $this->y;
  }
  
  /**
   * Terminate a living cell
   */
  public function terminate() {
    $this->alive = false;
  }
  
  /**
   * Resurrect a dead cell
   */
  public function resurrect() {
    $this->alive = true;
  }
}