<?php
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