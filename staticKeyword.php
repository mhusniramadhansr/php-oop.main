<?php

class MathHelper {
	static public string $name = "Math Helper";

	static public function sum(int ...$number):int{
		$total = 0;
		foreach($number as $val){
			$total += $val;
		}
		return $total;
	}
}

echo MathHelper::$name . PHP_EOL;
echo "Hasil :  " . MathHelper::sum(10, 10, 10) . PHP_EOL;
