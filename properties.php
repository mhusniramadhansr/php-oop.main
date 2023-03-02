<?php

//Membuat Class
class Person{

	//membuat propertie
	//var $nama;
	//var $address;

	//kita bisa mendeklarasikan type data nya
	//var string $nama;
	//var string $address;
	var int $noRumah;

	//kita bisa membuat default value
	var string $nama = "Anonymous";

	//membuat nullable properties
	var ?string $address = null;
	
}

//Membuat Object dari Class
$person1 = new Person();

//memanipulasi properties pada object
$person1->nama = "Ikhlash";
$person1->address = "Cianjur";
$person1->noRumah = 10;

var_dump($person1);
