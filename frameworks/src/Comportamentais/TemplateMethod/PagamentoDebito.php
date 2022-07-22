<?php

namespace VmxFramework\Comportamentais\TemplateMethod;

class PagamentoDebito extends Pagamento
{
    //Calcula a taxa do Gateway.
    public function calcularTaxa(): float
    {
        //Retorna uma taxa de 4 reais.
        return 4;
    }

    //Calcula o desconto.
    public function calcularDesconto(): float
    {
        //Retorna o valor do pagamento com desconto de 5%.
        return $this->valor * 0.05;
    }
}