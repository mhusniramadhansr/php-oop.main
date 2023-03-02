<?php

class Data implements \IteratorAggregate {

	var string $first = "First";
	public string $second = "Second";
	protected string $third = "Third";
	private string $fourth = "Fourth";

	
	public function getIterator(): Iterator{
		yield "first" => $this->first;
		yield "second" => $this->second;
		yield "third" => $this->third;
		yield "fourth" => $this->fourth;
	}
}

$obj = new Data();

foreach($obj as $key => $value){
	echo "$key : $value" . PHP_EOL;
}
