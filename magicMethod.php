<?php

class Mahasiswa {

	public int $id;
	public string $nama;
	public int $value;

	public function __construct($a, $b, $c){
		$this->id = $a;
		$this->nama = $b;
		$this->value = $c;
	}

	public function __clone(){
		unset($this->value);
	}

	public function __toString(){
		return "Mahasiswa id:$this->id, nama:$this->nama, nilai:$this->value" . PHP_EOL;
	}

	public function __invoke(...$arguments){
		$join = implode(",", $arguments);
		echo "invoke mahasiswa dengan argunent : $join".PHP_EOL;
	}
	
	public function __debugInfo(): array{
		return [
			"id" => $this->id,
			"nama" => $this->nama,
			"nilai" => $this->value,
			"Author" => "mlyarhmn"
		];
	}
}

$mhs1 = new Mahasiswa(172, "Ikhlash Mulyanurahman", 8);

echo $mhs1;
$mhs1(10,10,10);
var_dump($mhs1);

/*
$mhs2 = clone $mhs1;
var_dump($mhs2);
 */


