<?php

namespace VmxFramework\Criacionais\FactoryMethod;

abstract class Boleto
{
    protected float $valor;
    protected float $juros;
    protected float $desconto;
    protected float $multa;

    public function __construct(float $valor)
    {
        $this->valor = $valor;
    }

    public function calcularJuros(): float
    {
        return $this->valor * $this->juros;
    }

    public function calcularDesconto(): float
    {
        return $this->valor * $this->desconto;
    }

    public function calcularMulta(): float
    {
        return $this->valor * $this->multa;
    }
}