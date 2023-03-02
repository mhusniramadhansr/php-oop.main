<?php

class Aplikasi {
	const AUTHOR = "Ikhlash Mulyanurahman";
	//Best Practice constant menggunakan uppercase

	function info(){
		echo "Author : " . self::AUTHOR . PHP_EOL;
		//self keyword untuk mengakses constant di dalam class nya
	}

}

//Mengakses constant
echo Aplikasi::AUTHOR . PHP_EOL;

$app1 = new Aplikasi();
$app1->info();
