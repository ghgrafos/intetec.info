<?php

namespace VmxFramework\Comportamentais\TemplateMethod;

abstract class Pagamento
{
    protected float $valor;
    protected Gateway $gateway;

    public function __construct(float $valor, Gateway $gateway)
    {
        $this->valor = $valor;
        $this->gateway = $gateway;
    }

    abstract public function calcularDesconto(): float;

    public function calcularTaxa(): float
    {
        return 0;
    }

    //É o Template Method.
    public function realizaCobranca(): bool
    {
        $valorFinal = $this->valor + $this->calcularTaxa() - $this->calcularDesconto();

        //-- Início da impressão dos valores separados (Apenas para visualização)
        echo $this->valor . ' + ' .
            $this->calcularTaxa() . ' - ' .
            $this->calcularDesconto() . ' = ';
        //-- Fim da impressão dos valores separados

        return $this->gateway->cobrar($valorFinal);
    }
}