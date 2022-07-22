<?php

namespace VmxFramework\Comportamentais\TemplateMethod;

class PagamentoDinheiro extends Pagamento
{
    //Calcula o desconto.
    public function calcularDesconto(): float
    {
        //Retorna o valor do pagamento com desconto de 10%.
        return $this->valor * 0.1;
    }
}