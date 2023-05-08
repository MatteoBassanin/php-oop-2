<?php



class Food extends Products
{

    public $species;
    public $calories;


    public function __construct($_price, $_brand, $picture, Species $_species, $_calories)
    {

        parent::__construct($_price, $_brand, $picture);
        $this->species = $_species;
        $this->calories = $_calories;
    }
}
