<?php

namespace VmxFramework\Criacionais\FactoryMethod\Caixa;

use VmxFramework\Criacionais\FactoryMethod\Boleto;

class BancoCaixaBoleto10Dias extends Boleto
{
    public function __construct(float $valor)
    {
        parent::__construct($valor);
        $this->juros = 0.02;
        $this->desconto = 0.1;
        $this->multa = 0.05;
    }
}