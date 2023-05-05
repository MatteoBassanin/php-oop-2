<?php



class Food extends Products{

    public $calories;


    public function __construct($_price,$_brand,$_species,$_calories)
    {

        parent::__construct($_price,$_brand,$_species);
        $this->species = $_species;
        $this->calories = $_calories;

        

    }

}