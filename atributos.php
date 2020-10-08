<?php

class Carro {
    #[Validacao('max', 110)]
    public int $velocidade;
}