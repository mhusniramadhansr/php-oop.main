<?php

$matches = [];
$result = (bool)preg_match_all("/las|ya/i", "Ikhlash Mulyanurahman", $matches);

var_dump($result);
//var_dump($matches);

$kalimat = "Anjing lu Bangsat ngapain anjing";
$result = preg_replace("/anjing|bangsat/i", "*****", $kalimat);

var_dump($result);

$result = preg_split("/[\s,-]/", "Ikhlash Mulyanurahman,PHP-Programmer");

var_dump($result);
