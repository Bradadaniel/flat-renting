<?php

interface Animal
{
    public function breath();
    public function eat();
    public function setName($name);
}

class Dog implements Animal
{

    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

//new method
    public function bark()
    {
        return 'wof';
    }

//implemented methods
    public function breath()
    {
        return 'breathing';
    }

    public function eat()
    {
        return 'eating';
    }
}

class Cat implements Animal
{
    private $name;
    private $age;

    public function __construct($age, $name)
    {
        $this->age = $age;
        $this->name = $name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function breath() {
        return 'breaths';
    }

    public function eat() {
        return 'ham, ham';
    }
//new method
    public function purr(){
        return 'purring';
    }
}

$dog = new Dog('Lucky');
echo "<b>dog</b><br>";
echo $dog->breath() . "<br>";
echo $dog->bark() . "<br>";
echo $dog->eat() . "<br>";

echo "<b>cat</b><br>";
$cat = new Cat(4,'kitty');
$cat->setName('Kitty 2');
echo "Hello ".$cat->getName()."<br>";
echo $cat->breath()."<br>";
echo $cat->eat()."<br>";
echo $cat->purr()."<br>";