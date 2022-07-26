<?php

namespace VmxFramework\Criacionais\FactoryMethod\BancoDoBrasil;

use VmxFramework\Criacionais\FactoryMethod\Boleto;

class BancoDoBrasilBoleto30Dias extends Boleto
{
    public function __construct(float $valor)
    {
        parent::__construct($valor);
        $this->juros = 0.05;
        $this->desconto = 0.02;
        $this->multa = 0.05;
    }
}