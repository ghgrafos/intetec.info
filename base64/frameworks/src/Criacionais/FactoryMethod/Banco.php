<?php

namespace VmxFramework\Criacionais\FactoryMethod;

abstract class Banco
{
    public function gerarBoleto(int $vencimentoBoleto, float $valor): Boleto
    {
        $boleto = $this->criarBoleto($vencimentoBoleto, $valor);

        echo 'Boleto gerado com sucesso no valor de R$ ' . $valor . '<br>';
        echo 'Valor Juros: R$' . $boleto->calcularJuros() . '<br>';
        echo 'Valor Desconto: R$' . $boleto->calcularDesconto() . '<br>';
        echo 'Valor Multa: R$' . $boleto->calcularMulta() . '<br>';
        echo '---------------' . '<br><br>';

        return $boleto;
    }

    abstract protected function criarBoleto(int $vencimentoBoleto, float $valor): Boleto;
}