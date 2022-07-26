<?php

namespace VmxFramework\Comportamentais\TemplateMethod;

class Gateway
{
    //Simulação de uma cobrança - retorna 'true' ou 'false' de forma randômica.
    public function cobrar(float $valor): bool
    {
        echo $valor . '<br>'; //Apenas para visualizar o valor final.
        $respostas = [true, false];
        return $respostas[rand(0, 1)];
    }
}