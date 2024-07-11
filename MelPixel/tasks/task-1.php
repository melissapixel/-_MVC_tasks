<?php
    class Employee{
        public $name;
        public $age;
        public $salary;
    }

    $user_1 = new Employee;
        $user_1->name = 'John';
        $user_1->age = 25;
        $user_1->salary = 1000;

    $user_2 = new Employee;
        $user_2->name = 'eric';
        $user_2->age = 26;
        $user_2->salary = 2000;
    
    echo $user_1->salary + $user_2->salary;
    echo '<br>';
    echo $user_1->age + $user_2->age;
?>