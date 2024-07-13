<?php
    class User
    {
        private $name;
        private $age;
    
        public function __get($property)
        {
            if (property_exists($this, $property)) {
                return $this->$property;
            }
            return null; // Или выбросить исключение, если свойство не существует
        }
    
        public function __set($property, $value)
        {
            if ($property == 'name') {
                if ($value != '') { // проверяем имя на непустоту
                    $this->$property = $value;
                }
            } elseif ($property == 'age') {
                if ($value >= 0 && $value <= 70) { // проверяем возраст
                    $this->$property = $value;
                }
            }
        }
?>