<?php

namespace VmxFramework\Criacionais\FactoryMethod\BancoDoBrasil;

use VmxFramework\Criacionais\FactoryMethod\Banco;
use VmxFramework\Criacionais\FactoryMethod\Boleto;

class BancoDoBrasil extends Banco
{
    protected function criarBoleto(int $vencimentoBoleto, float $valor): Boleto
    {
        return new BancoDoBrasilBoleto10Dias($valor);
    }
}
