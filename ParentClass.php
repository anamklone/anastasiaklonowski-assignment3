<?php
	// This is the file for the parent class

	class ParentClass {
    private $classNumber;
    private $className;
    private $professor;
    
    public function __construct($num, $name, $prof) {
      $this->classNumber = $num;
      $this->className = $name;
      $this->professor = $prof;
    }
    
    public function getClassNumber() {
      return $this->classNumber;
    }
    
    public function setClassNumber($num) {
      $this->classNumber = $num;
    }
    
    public function getClassName() {
      return $this->className;
    }
    
    public function setClassName($name) {
      $this->className = $name;
    }
    
    public function getProfessor() {
      return $this->professor;
    }
    
    public function setProfessor($prof) {
      $this->professor = $prof;
    }
    
    public function __toString() {
      return $this->getClassNumber() . " " . $this.getClassName() . "<br>" . $this.getProfessor() . "<br>";
    }
  }
?>