<?php
namespace App\OOP\PHP;
class Employee
{
    private $name;
    private $age;
    private $salary;

    public function __construct($name, $age, $salary)
    {
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }

}