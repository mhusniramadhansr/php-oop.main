<?php

class MahasiswaTeknik {
	public function sayHello(string $name){
		echo "Hello $name! saya mahasiswa Teknik" . PHP_EOL;
	}
}

class MahasiswaFikom extends MahasiswaTeknik {	
	public function sayHello(string $name){
		echo "Hello $name! saya mahasiswa Fikom" . PHP_EOL;
	}
	//Override adalah menimpa function yang sudah diturunkan / di parent class

	public function getParentFunc(){
		parent::sayHello("Anonim");
	}
	//jika sudah terlanjur dioverride, saat ingin mengakses func di parent, gunakan keyword "parent" untuk mengakses function yang ada di parent
}

$mhsTeknik1 = new MahasiswaTeknik();
$mhsTeknik1->sayHello("Budi");

$mhsFikom1 = new MahasiswaFikom();
$mhsFikom1->sayHello("Udin");
$mhsFikom1->getParentFunc();
