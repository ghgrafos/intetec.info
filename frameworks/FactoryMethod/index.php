<?php
use VmxFramework\Criacionais\FactoryMethod\BancoDoBrasil\BancoDoBrasil;
use VmxFramework\Criacionais\FactoryMethod\Caixa\BancoCaixa;

require_once __DIR__ . '/../vendor/autoload.php';

echo '######## Banco Caixa ########<br>';
$banco = new BancoCaixa();

//Boleto com 10 dias para o vencimento.
$banco->gerarBoleto(10, 100);

//Boleto com 30 dias para o vencimento.
$banco->gerarBoleto(30, 100);

//Boleto com 60 dias para o vencimento.
$banco->gerarBoleto(60, 100);

echo '######## Banco do Brasil ########<br>';
$banco = new BancoDoBrasil();

//Boleto com 10 dias para o vencimento.
$banco->gerarBoleto(10, 100);

//Boleto com 30 dias para o vencimento.
$banco->gerarBoleto(30, 100);

//Boleto com 60 dias para o vencimento.
$banco->gerarBoleto(60, 100);