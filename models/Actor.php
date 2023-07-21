<?php
class Actor
{
  public $first_name;
  public $last_name;
  public $age;

  public function __construct(String $first_name, String $last_name, Int $age)
  {
    $this->first_name = $first_name;
    $this->last_name = $last_name;
    $this->age = $age;
  }

  public function getFullName()
  {
    return $this->first_name . '' . $this->last_name;
  }
}
