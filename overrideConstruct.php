<?php

class Manager {
	public string $name;
	public string $title;

	public function __construct($name, $title = "Manager"){
		$this->name = $name;
		$this->title = $title;
	}
}

class VicePresident extends Manager {
	public function __construct($name){
		parent::__construct($name, "VP");
	}
}

$manager1 = new Manager("Astri");
var_dump($manager1);

$vp1 = new VicePresident("Yanto");
var_dump($vp1);
