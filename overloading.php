<?php

class Zero {
	private string $properties;

	public function __set($nama, $value){
		$this->$nama = $value;
	}

	public function __get($name){
		return $this->$name;
	}

	public function __isset($name){
		return isset($this->$name);
	}

	public function __unset($name){
		echo "Unsetting : $name";
		unset($this->$name);
	}

}

$obj = new Zero();
$obj->properties = "Ikhlash Mulyanurahman";

var_dump($obj);

echo $obj->properties . PHP_EOL;

var_dump(isset($obj->cpp));
unset($obj->properties);
