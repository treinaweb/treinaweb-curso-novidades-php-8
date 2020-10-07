<?php

class Veiculo 
{
    static protected function ligar(): static
    {
        return new static;
    }

    static public function ignicao() 
    {
        var_dump(self::ligar());
    }
}

class Carro extends Veiculo
{
    static public function ignicao() 
    {
        var_dump(parent::ligar());
    }
}

Veiculo::ignicao();
Carro::ignicao();


