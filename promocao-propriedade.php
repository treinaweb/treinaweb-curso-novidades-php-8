<?php

// class Carro {
//     protected string $marca;

//     protected string $cor;

//     public function __construct(string $marca, string $cor)
//     {
//         $this->marca = $marca;
//         $this->cor = $cor;
//     }
// }

class Carro {
    public function __construct(
        protected string $marca, 
        protected string $cor
    ){}
}

var_dump(new Carro('Uno', 'Preto'));