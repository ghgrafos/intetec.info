<?php

use VmxFramework\Comportamentais\TemplateMethod\Gateway;
use VmxFramework\Comportamentais\TemplateMethod\PagamentoCredito;
use VmxFramework\Comportamentais\TemplateMethod\PagamentoDebito;
use VmxFramework\Comportamentais\TemplateMethod\PagamentoDinheiro;

require_once __DIR__ . "/../vendor/autoload.php";

$valor = 1000;
$gateway = new Gateway();

echo 'Crédito: ';
$pagamentoCredito = new PagamentoCredito($valor, $gateway);
$pagamentoCredito->realizaCobranca();

echo 'Débito: ';
$pagamentoDebito = new PagamentoDebito($valor, $gateway);
$pagamentoDebito->realizaCobranca();

echo 'Dinheiro: ';
$pagamentoDinheiro = new PagamentoDinheiro($valor, $gateway);
$pagamentoDinheiro->realizaCobranca();