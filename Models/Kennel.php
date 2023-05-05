<?php

class Kennel extends Products{


    public $color;
    public $material;

    public function __construct($_price,$_brand,$_species,$_color,$_material)
    {

        parent::__construct($_price,$_brand,$_species);
        $this->species = $_species;
        $this->color = $_color;
        $this->material = $_material;

    }
}