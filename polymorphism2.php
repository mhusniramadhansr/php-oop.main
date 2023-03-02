<?php

class Mahasiswa {
	public string $name;

	public function __construct($name){
		$this->name = $name;
	}

}

class Kampus {
	public Mahasiswa $mhs;
}

$data1 = new Kampus();

$data1->mhs = new Mahasiswa("Ikhlash");
var_dump($data1);
