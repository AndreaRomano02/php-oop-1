<?php
require_once __DIR__ . '/Actor.php';

class Movie
{
  public $title;
  public $run_time;
  public $genre;
  public $cast;

  /**
   * @param Actor[] $cast
   */
  public function __construct(String $title, Int $run_time, $genre, $cast)
  {
    $this->title  = $title;
    $this->run_time = $run_time;
    $this->genre = $genre;
    $this->cast = $cast;
  }

  public function toUppercaseTitle()
  {
    return strtoupper($this->title);
  }

  public function getRunTime()
  {
    return $this->run_time . 'min';
  }
}
