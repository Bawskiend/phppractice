<?php
    	abstract class User{
            private $name;
            public function SetName($name){
                $this->name = $name;
            }
            public function GetName(){
                return $this->name;
            }
            abstract public function increaseRevenue(){

            }
        }
        class Employee extends User{
            private $salary;
            public function SetSalary($salary){
                $this->salary = $salary;
            }
            public function GetSalary(){
                return $this->salary;
            }
            public function increaseRevenue($salary){
                $this->$salary = $this->salary + $salary;
            }
        }
        $employee1 = new Employee;
        $employee1->SetName('john');
        echo $employee1->GetName();
?>

