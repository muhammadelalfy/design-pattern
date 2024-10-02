<?php
namespace App;

require_once __DIR__ . '/../vendor/autoload.php';
use App\OOP\PHP\Employee;
$employee = new Employee('John Doe', 30, 50000);
var_dump($employee);