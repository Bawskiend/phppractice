<?php
    class Employee{
        public $name;
        public $age;
        public $salary;
    }
    $employee1 = new Employee;
    $employee1->name = 'eric';
    $employee1->age = 25;
    $employee1->salary = 1000;
    $employee2 = new Employee;
    $employee2->name = 'edik';
    $employee2->age = 26;
    $employee2->salary = 2000;
    var_dump($employee1->salary);
   class Employee{
      public $name;
      public $surname;
      public $salary;
      public function __constructor($name,$surname,$salary){
         $this->name = $name;
         $this->surname = $surname;
         $this->salary = $salary;
      }
   }
   $employee1 = new Employee('john','mitch',2400);
   var_dump($employee1);
?>

