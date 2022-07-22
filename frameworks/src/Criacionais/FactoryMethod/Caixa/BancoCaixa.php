<?php

namespace VmxFramework\Criacionais\FactoryMethod\Caixa;

use VmxFramework\Criacionais\FactoryMethod\Banco;
use VmxFramework\Criacionais\FactoryMethod\Boleto;

class BancoCaixa extends Banco
{
    protected function criarBoleto(int $vencimentoBoleto, float $valor): Boleto
    {
        switch ($vencimentoBoleto) {
            case 10;
                return new BancoCaixaBoleto10Dias($valor);
            case 30;
                return new BancoCaixaBoleto30Dias($valor);
            case 60;
                return new BancoCaixaBoleto60Dias($valor);
            default:
                throw new \Exception('Vencimento Indisponível');
        }
    }
}
