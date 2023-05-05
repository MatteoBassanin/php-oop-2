<?php
 
 class Products{

    public $price;
    public $brand;


    public function __construct(string $_name,int $_price,string $_brand){

        $this->name = $_name;
        $this->price = $_price;
        $this->brand = $_brand;

    }

    public function getInfo(){
        return $this->price . "<br/>" . $this->brand;
    }


    
 }



 ?>