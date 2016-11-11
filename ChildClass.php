<?php 
	// this file will extend ParentClass.php

	class ChildClass extends ParentClass {
		private $location;
    private $time;
    
    public function __construct($l, $t) {
      $this->location = $l;
      $this->time = $t;
    }
    
    public function getLocation() {
      return $this->location;
    }
    
    public function setLocation($l) {
      $this->location = $l;
    }
    
    public function getTime() {
      return $this->time;
    }
    
    public function setTime($t) {
      $this->time = $t;
    }
    
    public function __toString() {
      return parent::__toString() . $this->getLocation() . "<br>" . $this->getTime() . "<br>";
    }
	}
?>