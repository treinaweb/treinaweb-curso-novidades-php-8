<?php

declare(strict_types=1);

class Marca{}

class Carro {
    public function __construct(
        protected string|Marca $marca, 
        protected string $cor,
    ){}

    public function andar(
        int|string|null $aceleracao=null, 
        int|string $velocidadeMaxima,
    ): string|float {
        return $aceleracao . ' ' . $velocidadeMaxima;
    }
}

$uno = new Carro('Fiat', 'Preto',);

echo $uno->andar(velocidadeMaxima: '110', aceleracao: '5',);

echo "<br>";
var_dump($uno);