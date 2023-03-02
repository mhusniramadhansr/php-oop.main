<?php

require_once "DataNamespace.php";

$buku1 = new Data\One\Buku();
$buku2 = new Data\Two\Buku();

echo $buku2->info();
echo Helper\APP . PHP_EOL;
Helper\helpMe();
