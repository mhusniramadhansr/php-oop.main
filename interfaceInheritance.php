<?php

interface Ras {
	function getRas(): string;
}

interface IsBeautiful {
	function isBeautiful(): bool;
}

interface Animal extends Ras {

	function name(): string;
	function age(): int;

}

class Cat implements Animal, IsBeautiful {

	function name(): string{
		return "Luna";
	}
	function age(): int{
		return 3;
	}
	function getRas(): string{
		return "Persia";
	}
	function isBeautiful(): bool{
		return true;
	}

	public function informasi(): void{
		echo "Name : " . $this->name() . PHP_EOL;
		echo "Age : " . $this->age() . PHP_EOL;
		echo "Ras : " . $this->getRas() . PHP_EOL;
		echo "is beautiful : ";
		echo ($this->isBeautiful() == 1) ? "Yes\n" : "No\n";
	}

}

$obj = new Cat();
$obj->informasi();
