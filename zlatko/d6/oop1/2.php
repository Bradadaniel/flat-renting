<?php
declare(strict_types=1); //be lehet allitani a bemeno parameter milyen tipusu lehet

class Person
{

    public $isAlive = true;
    public $firstname;
    public $lastname;
    public $age;
    private $email = "something@domen.com";
    protected $city;

    public function __construct(string $firstname, string $lastname, int $age, string $city = "Subotica") //string stringet, int intet ad vissza
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->age = $age;
        $this->city = $city;
        echo $this->email . "<br>";
    }

    public function getFirstname()
    {
        return $this->firstname;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setFirstname($new_firstname)
    {
        $this->firstname = $new_firstname;
    }

}

$teacher = new Person("Boring", "Teacher", 45, "Subotica2");
$student = new Person("Clever", "Mind", 20);
var_dump($student);
$student->setFirstname('vts');
var_dump($student);
echo "<br>" . $student->age;
echo "<br>" . $student->firstname;

//echo $student->email;
//echo $student->city;
var_dump($teacher);
var_dump($student);

echo $student->getFirstname();
echo $student->getEmail();
$student->setFirstname("Mack");
var_dump($student);

?>