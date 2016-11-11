<?php 
	// this file will extend ParentClass.php

	class ChildClass extends ParentClass {
		private $location;
    private $time;
    
    public function __construct($num, $name, $prof, $loc, $time) {
      parent::_construct($num, $name, $prof);
      $this->location = $loc;
      $this->time = $time;
    }
    
    public function getLocation() {
      return $this->location;
    }
    
    public function setLocation($loc) {
      $this->location = $loc;
    }
    
    public function getTime() {
      return $this->time;
    }
    
    public function setTime($time) {
      $this->time = $time;
    }
    
    public function __toString() {
      return parent::__toString() . $this->getLocation() . "<br>" . $this->getTime() . "<br>";
    }
	}
?>