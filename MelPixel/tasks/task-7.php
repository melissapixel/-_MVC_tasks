<?php
    class Employee{
        private $name;
        private $age;
        private $salary;
        
        public function setAge($age){
            if ($this->isAgeCorrect($age)) {
				$this->age = $age;
            }
        }
        public function setName($name){
            $this->name = $name;
        }
        public function setSalary(){
            $this->salary = $salary;
        }
        public function getName(){
            return $this->name;
        }
        public function getSalary(){
            return $this->salary;
        } 
        public function getAge(){
            return $this->age;
        }

        private function isAgeCorrect($age)
		{
			return $age >= 18 and $age <= 60;
		}
    }

    $employee_1 = new Employee;
    echo $employee_1->setAge(23);
    echo $employee_1->getAge();

    echo $employee_1->setName('alisa');
    echo $employee_1->getName();
?>