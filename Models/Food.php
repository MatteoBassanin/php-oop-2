<?php



class Food extends Products{

    public $species;
    public $calories;


    public function __construct($_name,$_price,$_brand, Species $_species,$_calories)
    {

        parent::__construct($_name,$_price,$_brand);
        $this->species = $_species;
        $this->calories = $_calories;

    }

}