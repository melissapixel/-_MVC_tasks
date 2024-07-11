<?php
    class Employee{
        public $name;
        public $age;
        public $salary;


        public function getName(){
            return $this->name;
        }
        public function getAge(){
            return $this->age;
        }
        public function getSalary(){
            return $this->salary;
        }


        public function checkAge(){
            if ($this->age >= 18){
                return "True";
            } else {
                return "False";
            }
        }

        public function setAge($age){
            if ($age>= 18){
                return $this->age = $age;
            } else {
                return "False";
            }
        }
    }

    class Rectangle{
        public $h;
        public $b;

        public function getSquare($h, $b){
            return $h * $b;
        }
    }

    $figure_1 = new Rectangle;

    $user_1 = new Employee;
        $user_1->salary = 200;
        $user_1->age = 12;

    $user_2 = new Employee;
        $user_2->salary = 500;

    echo $user_1->getSalary() + $user_2->getSalary();
    echo '<br>';
    echo $user_1->setAge(54);
    echo '<br>';
    echo $figure_1->getSquare(2,3);
    echo '<br>';


    
?>