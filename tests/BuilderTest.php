<?php


namespace Jcheverria\Builder\Tests;


use Jcheverria\Builder\ChefDirector;
use Jcheverria\Builder\PizzaHawaiBuilder;
use Jcheverria\Builder\PizzaJamonBuilder;

class BuilderTest extends TestCase
{
    /**
     * @test
     * @covers
     */
    public function PizzaJamon()
    {
        //Builder
        $Director = new ChefDirector();
        $Pizza = $Director->buildPizza(new PizzaJamonBuilder());
        //$Pizza = $Pizza->getPizza();

        //Prueba
        $PizzaTest = new PizzaJamonBuilder();
        $PizzaTest->createPizza();
        $PizzaTest->addBase();
        $PizzaTest->addSauce();
        $PizzaTest->addTopping();
        $PizzaTest = $PizzaTest->getPizza();
        //print_r($PizzaTest);

        $this->assertSame($Pizza,$PizzaTest);
    }

    /**
     * @test
     * @covers
     */
    public function PizzaHawai()
    {
        //Builder
        $Director = new ChefDirector();
        $Pizza = $Director->buildPizza(new PizzaHawaiBuilder());
        //$Pizza = $Pizza->getPizza();

        //Prueba
        $PizzaTest = new PizzaHawaiBuilder();
        $PizzaTest->createPizza();
        $PizzaTest->addBase();
        $PizzaTest->addSauce();
        $PizzaTest->addTopping();
        $PizzaTest = $PizzaTest->getPizza();
        //print_r($PizzaTest);

        $this->assertSame($Pizza,$PizzaTest);
    }
}