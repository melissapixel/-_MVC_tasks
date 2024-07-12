<?php
    	trait Helper
        {
            private $name;
            private $age;
            
            public function getName()
            {
                return $this->name;
            }
            
            public function getAge()
            {
                return $this->age;
            }
        }
        
        class Country{
            use Helper;

            private $population;

            public function __construct($name, $age, $population)
            {
                $this->name = $name;
                $this->age = $age;
                $this->population = $population;
            }
            
            public function getPopulation(){
                return $this->population;
            }
        }

        $city = new Country('Belarus', 1000, 800000);
        echo $city->getName();
?>