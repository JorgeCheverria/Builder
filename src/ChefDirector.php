<?php


namespace Jcheverria\Builder;


class ChefDirector
{
    public function buildPizza(PizzaBuilder $PizzaBuilder)
    {
        $PizzaBuilder->createPizza();
        $PizzaBuilder->addBase();
        $PizzaBuilder->addSauce();
        $PizzaBuilder->addTopping();
        return $PizzaBuilder->getPizza();
    }
}