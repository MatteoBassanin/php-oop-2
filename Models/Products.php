<?php
require_once __DIR__ . '/Traits/Picturable.php';

class Products
{
    use Picturable;
    public $price;
    public $brand;


    public function __construct($_price, $_brand)
    {


        $this->price = $_price;
        $this->brand = $_brand;
    }
}
