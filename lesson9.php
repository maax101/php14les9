<?php
// Создаем новый класс :
class Car {
// данные (свойства):
    var $model;
    var $color;
    var $type;
    // методы:
    function Car($model, $color, $type) {
        echo $this->model = $model.' - ';
        echo $this->color = $color.', ';
        echo $this->type = $type.'.<br/>';
    }
}

// Создаем объект класса:
$toyota = new Car('Corolla', 'red', 'sedan');
$honda = new Car('Civic', 'green', 'hatchback');

class Tv {
// данные (свойства):
    var $brand;
    var $size;
    // методы:
    function Getbrand() {
		echo $this->brand.'<br>';
	}
    function Setbrand($brand) {
		$this->brand = $brand;
		$this->Getbrand();
}
}
// Создаем объект класса:
$lg = new Tv;
$lg->Setbrand ('LG');
$sony = new Tv;
$sony->Setbrand ('SONY');


class Pen {
// данные (свойства):
    var $ink_color;
    var $material;
    var $brand;
    // методы:
    function Pen($brand, $ink_color, $material) {
        echo $this->type = $brand.' - ';
        echo $this->color = $material.', ';
        echo $this->ink_color = $ink_color.'.<br/>';
    }
}

// Создаем объект класса:
$bic_pen = new Pen('BIC', 'red', 'plastic');
$parker_pen = new Pen('Parker', 'blue', 'metal');

class Duck {
// данные (свойства):
    var $name;
    var $sex;
    // методы:
    function Duck($name, $sex) {
                
        echo $this->name = $name.': ';
        echo $this->sex = $sex.'.<br/>';
    }
}

// Создаем объект класса:
$duck1 = new Duck('Donald', 'he is');
$duck2 = new Duck('Duffy', 'she is');

class Product {
// данные (свойства):
    var $category;
    var $price;
    var $availability;
    // методы:
    function Product($category, $price,$availability) {
                
        echo $this->category = $category.'. ';
        echo $this->price = $price.'$. ';
        echo $this->availability = $availability.'.<br/>';
    }
}

// Создаем объект класса:
$meizuM2 = new Product('phones', 100, 'n/a');
$oldspice = new Product('deodorant', '10', 'available');