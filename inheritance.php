<?php

class Mahasiswa {
	public string $nama;
	public int $nim;
}

class MhsTeknik extends Mahasiswa {
	//Inheritance atau pewarisan jadi class MhsTeknik akan mewarisi properties, function, dan constant yang ada di class Mahasiswa
}

$mhs1 = new MhsTeknik();
$mhs1->nama = "Ikhlash Mulyanurahman";
$mhs1->nim = 217200012;

var_dump($mhs1);
