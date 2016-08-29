<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace GameOfLife;

/**
 * Description of GOD
 *
 * @author mvreeken
 */
class GOD {
  private $world;
  
  /**
   * 
   * @param int $width
   * @param int $height
   */
  public function bigBang($width, $height) {
    $cells = [];
    for ($y = 0; $y < $height; $y++) {
      for ($x = 0; $x < $width; $x++) {
        $random_life = (bool)rand(0, 1);
        $cell = new Cell($random_life, $x, $y);
        $cells[$x][$y] = $cell;
      }
    }
    $this->world = new World($width, $height, $cells);
    return $this->world;
  }
  
  public function nextGeneration() {
    $actions = [];
    
    $loniness = new Rule\LonelinessRule();
    $overcrowded = new Rule\OvercrowdedRule();
    $resurrect = new Rule\ResurrectRule();
    // convert the two-dimensional array to a single 'queue'
    $population = call_user_func_array('array_merge', $this->world->getPopulation());

    foreach ($population as $cell) {
      $neighbours = $this->getNeighbours($cell);
      $actions[] = $loniness->apply($cell, $neighbours);
      $actions[] = $overcrowded->apply($cell, $neighbours);
      $actions[] = $resurrect->apply($cell, $neighbours);
    }
    
    foreach ($actions as $action) {
      $action->execute();
    }
  }
  
  /**
   * 
   * @param Cell $cell
   * @return Cell[]
   */
  public function getNeighbours(Cell $cell) {
    $neighbours = [];
    $x = $cell->getX();
    $y = $cell->getY();
    $neighbours[] = $this->world->getCell($x-1, $y-1);
    $neighbours[] = $this->world->getCell($x, $y-1);
    $neighbours[] = $this->world->getCell($x+1, $y-1);

    $neighbours[] = $this->world->getCell($x-1, $y);
    $neighbours[] = $this->world->getCell($x+1, $y);

    $neighbours[] = $this->world->getCell($x-1, $y+1);
    $neighbours[] = $this->world->getCell($x, $y+1);
    $neighbours[] = $this->world->getCell($x+1, $y+1);
    return array_filter($neighbours);
  }
  
  /**
   * 
   * @param Cell[] $cells
   * @return int
   */
  static public function aliveCount($cells) {
    $count = 0;
    foreach($cells as $cell) {
      if($cell->isAlive()) {
        $count++;
      }
    }
    return $count;
  }
}