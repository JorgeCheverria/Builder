<?php


namespace Jcheverria\Builder;


class Pizza
{
    public $ingredientes = [];

    public function agregarIngredientes($ingrediente)
    {
        array_push($this->ingredientes,$ingrediente);
    }


    public function getDescripcion()
    {
        return $this->ingredientes;
    }

}