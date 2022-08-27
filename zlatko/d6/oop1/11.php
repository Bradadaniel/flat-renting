<?php
declare(strict_types=1);
/*
 The use of the static keyword allows class members
 methods and properties)
 to be used
 without needing to instantiate a new instance of the class.
 The static declaration must come after the visibility declaration
 */

class Person
{

    public $isAlive = true;
    public $firstname;
    public $lastname;
    public static $city = "Subotica";
    public static $emails = ["first@f.com", "second@f.com"];

    public function __construct(string $firstname, string $lastname)
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
    }

    public static function sayHello()
    {
        echo "<p>Hello from US!</p>";
    }
}


Person::sayHello();

echo Person::$city;

foreach (Person::$emails as $email) {
    echo "<p>$email</p>";
}
