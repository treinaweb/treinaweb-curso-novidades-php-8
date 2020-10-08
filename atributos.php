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

    public static function validar(object $objetoParaValidar)
    {
        $reflectionClass = new reflectionClass($objetoParaValidar::class);

        foreach ($reflectionClass->getProperties() as $propriedade) {
            $nomePropriedade = $propriedade->getName();
            $atributos = $propriedade->getAttributes(self::class);

            foreach ($atributos as $atributo) {
                $instanciaValidacao = $atributo->newInstance();
                $nomeRegra = $instanciaValidacao->regra;

                $mensagemValidacao = Regras::$nomeRegra(
                    $objetoParaValidar->$nomePropriedade,
                    $instanciaValidacao->valor
                );

                echo "$nomePropriedade: $mensagemValidacao";
            }
        }
    }
}

class Regras 
{
    public static function max(int $valor, int $maximo): string
    {
        if ($valor > $maximo) {
            return 'valor maior que o máximo';
        }

        return 'valor menor que o máximo';
    }
}

$uno = new Carro;
$uno->velocidade = 20;

Validacao::validar($uno);



