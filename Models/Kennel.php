<?php

class Kennel extends Products
{

    public $species;
    public $color;
    public $material;

    public function __construct($_price, $_brand, $picture, Species $_species, $_color, $_material)
    {

        parent::__construct($_price, $_brand, $picture);
        $this->species = $_species;
        $this->color = $_color;
        $this->material = $_material;
    }
}
