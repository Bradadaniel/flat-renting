<?php
declare(strict_types=1);

class Shape
{
    public $hasSides = true;
    public $hasName = true;
    protected $producer = "VTS";
//public- az ingatlan vagy módszer mindenhonnan elérhető. Ez az alapértelmezett
//protected- a tulajdonság vagy metódus elérhető az osztályon belül és az abból származó osztályokon keresztül
//private- a tulajdonság vagy metódus CSAK az osztályon belül érhető el
}

class Square extends Shape
{
    public $name = "something";

    public function greet():string
    {
        return $this->hasName . " " . $this->producer;
    }
}

$shape = new Shape();
var_dump($shape);

$square = new Square();
var_dump($square);

if (property_exists($square, "hasSides")) {
    echo "I have sides!";
}

echo $square->name; //something
echo $square->greet(); //"I have sides! - something1 VTS
echo $square->producer;  //hiba mert protected

?>