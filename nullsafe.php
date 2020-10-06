<?php

class Marca {
    public ?string $nome=null;
}

class Carro {
    public ?Marca $marca=null;
}

class Venda {
    public ?Carro $carro=null;
}

$fiat = new Marca;
$fiat->nome = 'Fiat';

$uno = new Carro;
$uno->marca = $fiat;

$venda = new Venda;
$venda->carro = $uno;

echo $venda?->carro?->marca?->nome;
echo "<br>";

if ($venda !== null) {
    $carro = $venda->carro;

    if ($carro !== null) {
        $marca = $carro->marca;

        if ($marca !== null) {
            $nomeMarca = $marca->nome;

            if ($nomeMarca !== null){
                echo $nomeMarca;
            }
        }
    }
}