<?php

/*
  https://www.php.net/manual/en/intro.classobj.php
  https://phptherightway.com/
  https://phpthewrongway.com/
*/

class Person
{
    public $isAlive = true;
    public $firstname;
    public $lastname;
    public $age;
}

$teacher = new Person(); //nem szukseges a zarojel de javasolt
$student = new Person();

echo $teacher->isAlive;
var_dump($teacher);
var_dump($student);
?>