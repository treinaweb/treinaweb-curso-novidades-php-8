<?php

class Carro {
    public function __construct(
        protected string $marca, 
        protected string $cor
    ){}

    public function andar(int $aceleracao, int $velocidadeMaxima)
    {
        echo $aceleracao . ' ' . $velocidadeMaxima;
    }
}

$uno = new Carro(marca: 'Fiat', cor: 'Preto');

$uno->andar(velocidadeMaxima: 110, aceleracao: 5);

echo "<br>";
var_dump($uno);