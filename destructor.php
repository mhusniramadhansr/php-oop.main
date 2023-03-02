<?php

//saat program berhenti artinya object yang sudah dibuat akan dihapus dari memory
//Destruct adalah funcrion yang akan dipanggil secara otomatis saat object dihapus dari memory
//Destruct tidak boleh menggunakan parameter

class Person {

	var string $name;
	var ?string $country = null;

	public function __construct(string $name, string $country){
		$this->name = $name;
		$this->country = $country;
	}

	public function __destruct(){
		echo "Object person has destroyed!" . PHP_EOL;
	}
}

$person1 = new Person("Udin", "Indonesia");

var_dump($person1);
