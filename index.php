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
<<<<<<< HEAD
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

=======
    else{
        $layout = file_get_contents('php\layout.php');
        $content = file_get_contents('php\404.php');
        $layout = str_replace('{{ content }}', $content, $layout);
        echo $layout;
    }
        ?> 
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="css/style.css">
            <title>Document</title>
        </head>
        <body>
            
        </body>
        </html>
>>>>>>> b471334fbb4762d09ba730413f65f469303a0a99
