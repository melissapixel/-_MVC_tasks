<?php
    class User{
        public $name;
        public $age;

        public function isAgeCorrect($age){
            if ($age >= 18 and $age <= 60) {
                return true;
            } else {
                return false;
            }

        public function setAge($age){
            if ($this->isAgeCorrect($age)) {
				$this->age = $age;
			}
        }
        public function subAge($new){
            $newAge = $this->age - $years; // вычислим новый возраст 
			
			// Проверим возраст на корректность:
			if ($this->isAgeCorrect($newAge)) {
				$this->age = $newAge; 
					// обновим, если новый возраст прошел проверку 
			}
        }

        
    }
}
?>