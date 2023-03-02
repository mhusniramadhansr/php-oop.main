<?php

class Mahasiswa {

	private string $nama;
	private int $nim;
	private string $jurusan;

	public function __set($properties, $value){
		$this->$properties = $value;
	}

	public function __get($properties){
		return $this->$properties;
	}


}

$mhs1 = new Mahasiswa();

$mhs1->nama = "Ikhlash Mulyanurahman";
$mhs1->nim = 217200012;
$mhs1->jurusan = "Teknik Informatika";

var_dump($mhs1);
