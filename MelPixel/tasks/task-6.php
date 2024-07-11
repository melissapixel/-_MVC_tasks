<?php
    class Employee{
        public $name;
        public $age;
        public $salary;

        public function __construct($name, $age) {
            $this->name = $name;
            $this->age = $age;
            $this->salary = $salary;
        }
    }

    $employee_1 = new Employee('eric', 25, 1000);
    $employee_1 = new Employee('kyle', 30, 2000);
    
?>