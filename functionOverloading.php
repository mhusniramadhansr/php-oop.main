<?php


class Zero {

	public function __call($name, $arguments){
		$join = join(",", $arguments);
		echo "Call function $name with $join" . PHP_EOL;
	}

	public static function __callStatic($name, $arguments){
		$join = join(",", $arguments);
		echo "Call static function $name with $join" . PHP_EOL;
	}
}

$obj = new Zero();
$obj->fungsi(10, 10, 100);

Zero::fungsi(10,10,10);
