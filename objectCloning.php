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

var_dump($mhs1);

$mhs2 = clone $mhs1;

var_dump($mhs2);
