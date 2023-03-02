<?php

class Programmer {
	public string $name;

	public function __construct($name){
		$this->name = $name;
	}
}

class Backend extends Programmer {}

class Frontend extends Programmer {}

class Company {
	public Programmer $programmer;
}

function sayHelloProgrammer(Programmer $programmer){
	echo "Hello $programmer->name " . PHP_EOL;
}

$company = new Company();

$company->programmer = new Programmer("Ikhlash");
echo $company->programmer->name . PHP_EOL;
var_dump($company);

$company->programmer = new Backend("Mulya");
echo $company->programmer->name . PHP_EOL;
var_dump($company);

$company->programmer = new Frontend("Nurahman");
echo $company->programmer->name . PHP_EOL;
var_dump($company);

sayHelloProgrammer(new Programmer("Budi"));
