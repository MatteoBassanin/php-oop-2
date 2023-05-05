<?php
 
 class Products{

    public $price;
    public $brand;


    public function __construct($_price,$_brand){

     
        $this->price = $_price;
        $this->brand = $_brand;

    }

    public function getInfo(){
        return $this->name . "<br/>" . $this->price . "<br/>" . $this->brand;
    }


    
 }



 ?>