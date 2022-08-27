<?php
declare(strict_types=1);

class Shape
{
    public $hasSides = true;
    public $producer = "VTS";

    public function getDetails():string
    {
        return "<br>Name of our producer is " . $this->producer;
    }
}

class Square extends Shape
{
    public $name = "something";

    public function greet():string
    {
        return $this->name . " " . $this->producer;
    }

    public function getDetails():string
    {
        return "<br>Our name is " . $this->name;
    }

}

$shape = new Shape(); //meghivta az osztalyt ugy h belerakta egy valtozoba
$square = new Square();
echo $shape->getDetails();
echo $square->getDetails();
