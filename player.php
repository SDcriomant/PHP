<?php

class Player{
	
	private $Name;
	private $City;
	
	 public function __construct($Name){            //Реализация конструктора
		 $this -> Name = $Name;
	 }
	 public function setCity($City){                //Реализаация  setCity($City)
		 
		 $this->City = '( '. $City. ' )';
		 return $this;
	 }
	 
	 public function __tostring(){
		 
		 return (string)$this -> Name. ' '. (string)$this -> City;
	 }
}

?>