<?php


namespace Jcheverria\Builder;


interface PizzaBuilder
{
    public function createPizza();
    public function addBase();
    public function addSauce();
    public function addTopping();
    public function getPizza();
}