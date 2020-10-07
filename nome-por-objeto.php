<?php

namespace App\Models;

class Carro{}

echo Carro::class;

$uno = new Carro;

echo "<br>";
echo get_class($uno);

echo "<br>";
echo $uno::class;

$nomeClasse = $uno::class;
$nomeClasse = get_class($uno);

$uno2 = new $nomeClasse;

echo "<br>";
var_dump($uno, $uno2);
