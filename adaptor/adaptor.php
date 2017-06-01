<?php

class Person{
	private $name;
	private $gender;
	private $height;
	function __construct($name_in,$gender_in,$height_in){
		$this->name = $name_in;
		$this->gender = $gender_in;
		$this->height = $height_in;
		
	}
	function getName(){
		return $this->name;
	}
	function getGender(){
		return $this->gender;
	}
	function getHeight(){
		return $this->height;
	}
}
class AdaptDescribePerson{
	private $person;
	function __construct($person_in){
		$this->person = $person_in;
	}
	public function describePerson(){
		return .$this->person->getName().", ".$this->person->getGender()." and ".$this->person->getHeight(). ' inches tall';
	}
}
 
 
 
 $person = new Person('Liz', 'female', '4.0"');
 $personadapter = new AdaptDescribePerson($person);
 echo $personadapter->describePerson();
?>