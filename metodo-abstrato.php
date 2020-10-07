<?php

trait Motor {
    abstract public function ligar(array $inicializador): float;
}

class Carro {
    use Motor;
    
    function ligar(array $inicializador): float
    {
        return 100;
    }
}
