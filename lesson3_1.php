<?php
class  Car 
{
    public $model;
    public $color;
    public function __construct($model, $color)
    {
        $this->model = $model;
        $this->color = $color;
    }
    public function Drive();
    public function Wash();
    public function Fuel();    
}
$toyota = new Car('Corolla', 'red');
$honda = new Car('Civic', 'green');
class Tv 
{
    public $model;
    public $size;
    public function __construct($model, $size)
    {
        $this->model = $model;
        $this->size = $size;
    }
    public function Standby();
    public function changeChanel();
    public function setTimer();    
}
$LG = new Tv ('Flatrone', '43"');
$Sony = new Tv ('KDL-32', '32"');
class Pen 
{
    public $ink_color;
    public $material;
    public $brand;
    public function __construct($brand, $ink_color, $material)
    {
        $this->brand = $brand;
        $this->ink_color = $ink_color;
        $this->material = $material;     
    } 
    public function Write();
    public function changeColor();
}
$bic_pen = new Pen ('BIC', 'red', 'plastic');
$parker_pen = new Pen ('Parker', 'blue', 'metal');
class Duck 
{
    public $name;
    public $sex;
    public function __construct($name, $sex)
    {
        $this->name = $name;
        $this->sex = $sex;
    }
    public function Swiming();
    public function Fishing();    
}
$duck1 = new Duck('Donald', 'he is');
$duck2 = new Duck('Duffy', 'she is');
class Product 
{
    public $category;
    public $price;
    public $discount;
    public function totalPrice($price, $discount)
    {
        $total_price = $price - (($price/100)*$discount);
    }
    public function __construct($category, $price, $discount)
    {
        $this->category = $category;
        $this->price = $price;
        $this->discount = $discount;
    }  
}
$apple = new Product('wegetables', 20, 5);
$caviar = new Product('seafood', 50, 0);










