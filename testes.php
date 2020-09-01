<?php

use Alura\DesignPattern\CalculadoraDeImpostos;
use Alura\DesignPattern\Impostos\Icms;
use Alura\DesignPattern\Impostos\Iss;
use Alura\DesignPattern\Orcamento;

require __DIR__ . '/vendor/autoload.php';

$calculadora = new CalculadoraDeImpostos();

$orcamento = new Orcamento();
$orcamento->valor = 100;

print_r($calculadora->calcula($orcamento, new Icms()) . PHP_EOL) ;
print_r($calculadora->calcula($orcamento, new Iss()) . PHP_EOL) ;
