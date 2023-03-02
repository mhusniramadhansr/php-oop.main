<?php

//construct adalah function yang akan dijalankan secara otomatis saat object itu dibuat
//saat membuat object sama seperti memanggil function ada ()
//mirip seperti function bisa memberikan parameter ke dalam () dengan constructor

class Person {

	var string $name;
	var ?string $country = null;

	public function __construct(string $name, string $country){
		$this->name = $name;
		$this->country = $country;
	}
}

$person1 = new Person("Udin", "Indonesia");

var_dump($person1);
