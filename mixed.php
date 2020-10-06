<?php

class Carro {
    public function __construct(
        protected string|Marca $marca, 
        protected string $cor,
        protected int $velocidadeAtual,
        protected int $ano,
        protected string $modelo,
    ){}

    /**
     * array|bool|callable|int|float|null|object|resource|string
     *
     * @param string $nomePropriedade
     * @return mixed
     */
    public function info(string $nomePropriedade): mixed
    {
        return $this->$nomePropriedade;
    }
}

$uno = new Carro('Fiat', 'Preto', 110, 2010, 'Mile');

echo $uno->info('velocidadeAtual');