<?php

interface HelloWorld {
	public function sayHello():void;
}

$helloWorld = new class implements HelloWorld {

	public function sayHello():void{
		echo "Hello".PHP_EOL;
	}

};

$helloWorld->sayHello();
