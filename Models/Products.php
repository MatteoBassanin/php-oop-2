<?php
 
 class Products{

    public $price;
    public $brand;
    public $species;

    public function __construct($_price,$_brand,array $_species){

     
        $this->price = $_price;
        $this->brand = $_brand;
        $this->species = $_species;


    }

    public function getInfo(){
        return $this->name . "<br/>" . $this->price . "<br/>" . $this->brand;
    }


    
 }



 ?>