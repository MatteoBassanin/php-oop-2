<?php

class Kennel extends Products{

    public $species;
    public $color;
    public $material;

    public function __construct($_name,$_price,$_brand, Species $_species,$_color,$_material)
    {

        parent::__construct($_name,$_price,$_brand);
        $this->species = $_species;
        $this->color = $_color;
        $this->material = $_material;

    }
}