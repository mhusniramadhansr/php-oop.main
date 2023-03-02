<?php

class Animal {
	public string $name;
}

class Cat extends Animal{

}

class Dog extends Animal {

}

interface AnimalShelter {
	public function adopt($name): Animal;
}

class CatShelter implements AnimalShelter{
	public function adopt($name): cat{
		$cat = new Cat();
		$cat->name = $name;
		return $cat;
	}
}

class DogShelter implements AnimalShelter{
	public function adopt($name): Dog{
		$dog = new Dog();
		$dog->name = $name;
		return $dog;
	}
}


$catShelter1 = new CatShelter();
$cat = $catShelter1->adopt("Kitty");

var_dump($cat);

$dogShelter1 = new DogShelter();
$dog = $dogShelter1->adopt("Doggy");

var_dump($dog);
