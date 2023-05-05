<?php
 
 class Products{

    public $price;
    public $brand;


    public function __construct(int $_price,string $_brand){

        $this->price = $_price;
        $this->brand = $_brand;

    }

    public function getInfo(){
        return $this->price . "<br/>" . $this->brand;
    }


    
 }



 ?>