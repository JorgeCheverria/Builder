<?php


namespace Jcheverria\Builder;


class PizzaJamonBuilder implements PizzaBuilder
{
    private $pizza;

    public function createPizza()
    {
        $this->pizza = new Pizza();
    }

    public function addBase()
    {
        // TODO: Implement addBase() method.
        $this->pizza->agregarIngredientes(['Masa Intermedia']);
    }

    public function addSauce()
    {
        // TODO: Implement addSauce() method.
        $this->pizza->agregarIngredientes(['Tomate']);
    }

    public function addTopping()
    {
        // TODO: Implement addSauce() method.
        $this->pizza->agregarIngredientes(['Jamon']);
    }

    public function getPizza()
    {
        // TODO: Implement getPizza() method.
        return 'Pizza Jamon';
        // return $this->pizza; se debe retornar el objeto
    }
}