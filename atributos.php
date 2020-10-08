<?php

class Carro {
    #[Validacao('max', 110)]
    public int $velocidade;
}

#[Attribute]
class Validacao {
    public function __construct(
        public string $regra,
        public int $valor
    ){}
}

$reflectionClass = new reflectionClass(Carro::class);

foreach ($reflectionClass->getProperties() as $propriedade) {
    $atributos = $propriedade->getAttributes();

    foreach ($atributos as $atributo) {
        $instanciaValidacao = $atributo->newInstance();

        var_dump($instanciaValidacao);
    }
}
