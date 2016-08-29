<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace GameOfLife;

/**
 * Description of World
 *
 * @author mvreeken
 */
class World {
  private $width;
  private $height;
  private $population;
  
  /**
   * 
   * @param int $width
   * @param int $height
   * @param Cell[] $cells
   * @throws \InvalidArgumentException
   */
  public function __construct($width, $height, $cells) {
    $this->width = $width;
    $this->height = $height;
    $this->population = $cells;
  }
  
  /**
   * 
   * @return int
   */
  public function getWidth() {
    return $this->width;
  }
  
  /**
   * 
   * @return int
   */
  public function getHeight() {
    return $this->height;
  }
  
  /**
   * 
   * @param Cell[] $cells
   */
  public function setPopulation($cells) {
    $this->population = $cells;
  }
  
  /**
   * 
   * @return Cell[]
   */
  public function getPopulation() {
    return $this->population;
  }
  
  /**
   * 
   * @param int $x
   * @param int $y
   * @return Cell|null
   */
  public function getCell($x, $y) {
    if ($x <0 || $x > $this->width - 1) {
      return null;
    }

    if ($y <0 || $y > $this->height - 1) {
      return null;
    }
    
    return $this->population[$x][$y];
  }
}