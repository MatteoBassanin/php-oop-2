<?php


class Games extends Products{

    public $model;


    public function __construct($_price,$_brand,$_species,$_model)
    {

        parent::__construct($_price,$_brand,$_species);
        $this->species = $_species;
        $this->model = $_model;

    }
}