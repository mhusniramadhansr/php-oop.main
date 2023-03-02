<?php


interface Hello {
	public function Hello(): void;
}

$helloWorld = new class("Anonymous") implements Hello{
	public string $name;

	public function __construct(string $name){
		$this->name = $name;
	}

	public function Hello():void{
		echo "Hello $this->name welcome!".PHP_EOL;
	}

};

$helloWorld->Hello();
