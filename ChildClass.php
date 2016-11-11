<?php 
	// this file will extend ParentClass.php

	class ChildClass extends ParentClass {
		private $location;
    private $when;
    
    public function __construct($num, $name, $prof, $loc, $when) {
      parent::__construct($num, $name, $prof);
      echo "<!-- Adding location and time -->";
      $this->location = $loc;
      $this->when = $when;
    }
    
    public function getLocation() {
      return $this->location;
    }
    
    public function setLocation($loc) {
      $this->location = $loc;
    }
    
    public function getTime() {
      return $this->when;
    }
    
    public function setTime($when) {
      $this->when = $when;
    }
    
    public function __toString() {
      $string = parent::__toString() . $this->getLocation() . "<br>" . $this->getTime() . "<br>";
      return $string;
    }
	}
?>