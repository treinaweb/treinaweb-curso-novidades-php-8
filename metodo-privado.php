<?php

// não permite mais final em método private
// class Veiculo 
// {
//     final private function ligar(array $inicializador): float
//     {
//         return 100;
//     }
// }

class Veiculo 
{
    static private function ligar(array $inicializador): float
    {
        return 100;
    }
}

class Carro extends Veiculo 
{
    public function ligar(array $inicializador): float
    {
        return 100;
    }
}