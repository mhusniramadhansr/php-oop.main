<?php

require_once "DataNamespace.php";

use Data\One\Buku as Buku1;
use Data\Two\Buku as Buku2;

use function Helper\helpMe;
use const Helper\APP;

$buku1 = new Buku1();
$buku2 = new Buku2();

echo $buku2->info();
echo APP . PHP_EOL;
helpMe();
