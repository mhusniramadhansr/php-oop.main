<?php

class Mahasiswa {
	public string $nama;
	public int $value;

	public function __clone(){
		unset($this->value);
	}
}

$mhs1 = new Mahasiswa();
$mhs1->nama = "Ikhlash Mulyanurahman";
$mhs1->value = 8;

$mhs2 = new Mahasiswa();
$mhs2->nama = "Ikhlash Mulyanurahman";
$mhs2->value = 8;

var_dump($mhs1 == $mhs2);
var_dump($mhs1 === $mhs2);

$mhs3 = $mhs1;

var_dump($mhs3 === $mhs1);
