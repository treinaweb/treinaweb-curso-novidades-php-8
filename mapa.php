<?php

$objeto = new stdClass;

$mapa = new WeakMap;

$mapa[$objeto] = 'está na chave do objeto';

var_dump($mapa);

unset($objeto);

echo "<br>";
var_dump($mapa);


// $a = 'a';
// $lista[$a] = 'está na chave da variavel a';

// var_dump($lista);

// unset($a);

// echo "<br>";
// var_dump($lista);