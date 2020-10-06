<?php

class Marca implements stringable
{
    public function __construct(
        public string $nome
    ){}

    public function __toString(): string
    {
        return $this->nome;
    }
}

class Carro {
    public function __construct(
        protected stringable $marca, 
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

$uno = new Carro(new Marca('Fiat'), 'Preto', 110, 2010, 'Mile');

echo $uno->info('marca');