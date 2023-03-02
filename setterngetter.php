<?php

class Category {

	private string $name;
	private bool $expensive;

	public function setName(string $nama):void {
		if( trim($nama) != ""){
			$this->name = $nama;
		}
	}
	public function getName(): string{
		return $this->name;
	}

	public function setExpensive(bool $expensive):void{
		$this->expensive = $expensive;
	}
	public function isExpensive():bool{
		return $this->expensive;
	}

}

$obj = new Category();
//var_dump($obj);
$obj->setName("Ikhlash Mulya");
echo $obj->getName() . PHP_EOL;
$obj->setExpensive(true);
echo $obj->isExpensive() . PHP_EOL;
