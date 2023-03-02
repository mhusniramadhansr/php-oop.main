<?php


$dateTime = new DateTime();
$dateTime->setTimezone(new DateTimeZone("Asia/Jakarta"));

/*

untuk mengubah waktu
$dateTime->setTime(17, 10, 10);

untuk mengubah tanggal
$dateTime->setDate(2002, 10, 10);

untuk menambah 1 hari
$dateTime->add(new DateInterval("P1D"));

untuk mengurangi 1 bulan
$minusMonth = new DateInterval("P1M");
$minusMonth->invert = true;
$dateTime->add($minusMonth);

 */

//var_dump($dateTime);
//


$stringDate = $dateTime->format("H:i:s");
echo "Waktu saat ini : $stringDate" . PHP_EOL;

$date = DateTime::createFromFormat("Y-m-d H:i:s", "2022-12-19 17:30:10", new DateTimeZone("Asia/Jakarta"));

if($date) {
	var_dump($date);
}else {
	echo "FORMAT SALAH".PHP_EOL;
}
