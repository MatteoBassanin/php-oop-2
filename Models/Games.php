<?php


class Games extends Products
{

    public $species;
    public $model;


    public function __construct($_price, $_brand, Species $_species, $_model)
    {

        parent::__construct($_price, $_brand);
        $this->species = $_species;
        $this->model = $_model;
    }
}
