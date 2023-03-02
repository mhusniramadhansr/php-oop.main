<?php

namespace Data;

abstract class Animals {
	public string $name;

	public abstract function run(): void;
}

class Cat extends Animals {

	public function __construct($a){
		$this->name = $a;
	}

	public function run(): void{
		echo "Cat $this->name is running" . PHP_EOL;
	}
}
