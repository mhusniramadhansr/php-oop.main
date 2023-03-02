<?php

interface Animal {

	function name(): string;
	function age(): int;

}

class Cat implements Animal {

	function name(): string{
		return "Luna";
	}
	function age(): int{
		return 3;
	}

	public function informasi(): void{
		echo "Name : " . $this->name() . PHP_EOL;
		echo "Age : " . $this->age() . PHP_EOL;
	}

}

$obj = new Cat();
$obj->informasi();
