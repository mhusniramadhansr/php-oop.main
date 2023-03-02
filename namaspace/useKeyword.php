<?php

require_once "DataNamespace.php";

use Data\Two\Buku;
use function Helper\helpMe;
use const Helper\APP;

$buku2 = new Buku();

echo $buku2->info();
echo APP . PHP_EOL;
helpMe();
