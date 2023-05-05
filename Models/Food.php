<?php



class Food extends Products{

    public $species;


    public function __construct($_price,$_brand, Species $_species)
    {

        parent::__construct($_price,$_brand);
        $this->species = $_species;

    }

}