<?php
<<<<<<< HEAD
   	class User
      {
         private $name;
         private $age;
         
         public function __construct($name, $age)
         {
            $this->name = $name;
            $this->age = $age;
         }
         
         // Реализуем указанный метод:
         public function __toString()
         {
            return $this->name;
         }
         
         public function getName()
         {
            return $this->name;
         }
         
         public function getAge()
         {
            return $this->age;
         }
      }
      $user = new User('john', 25);
	echo $user; // выведет 'john' - все работает!
?>
=======
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

>>>>>>> e51b3a1fe4fa83b43af056a769be9c9d64f18979
