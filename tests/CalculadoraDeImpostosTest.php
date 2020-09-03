<?php

namespace Tests;

use Alura\DesignPattern\CalculadoraDeImpostos;
use Alura\DesignPattern\Impostos\Icms;
use Alura\DesignPattern\Impostos\Iss;
use Alura\DesignPattern\Orcamento;
use PHPUnit\Framework\TestCase;

/**
 * @covers \Alura\DesignPatterns\CalculadoraDeImpostos
 */
class CalculadoraDeImpostosTest extends TestCase
{
    /**
     * @test
     */
    public function testaCalculoImpostoIcms()
    {
        $calculadora = new CalculadoraDeImpostos();
        $orcamento = new Orcamento();

        $orcamento->valor = 100;

        $this->assertEquals(10, $calculadora->calcula($orcamento, new Icms()));
    }

    /**
     * @test
     */
    public function testaCalculoImpostoIss()
    {
        $calculadora = new CalculadoraDeImpostos();
        $orcamento = new Orcamento();

        $orcamento->valor = 100;

        $this->assertEquals(6, $calculadora->calcula($orcamento, new Iss()));
    }
}
