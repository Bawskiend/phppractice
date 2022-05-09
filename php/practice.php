<?php
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