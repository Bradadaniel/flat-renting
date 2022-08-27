<?php
declare(strict_types=1);

class Person
{
    public $isAlive = true;

    function __construct(string $name)
    {
        $this->name = $name;
    }

    public function dance():string
    {
        return "I'm dancing!";
    }
}

$me = new Person("Shane");
if (is_a($me, "Person")) {
    echo "I'm a person, ";
}

if (property_exists($me, "name")) {
    echo "I have a name, ";
}
if (method_exists($me, "dance")) {
    echo "and I know how to dance!";
}
?>