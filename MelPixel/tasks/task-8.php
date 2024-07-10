<?php
    class City{
        public $name;
        public $population;

        public function __construct($name, $population)
        {
            $this->name = $name;
            $this->population = $population;
        }
    }
    $array = [
        $city_1 = new City('Minsk', 500000),
        $city_2 = new City('Italia', 35000),
        $city_1 = new City('Pit', 1000),
    ];

        foreach ($array as $elem){
            echo $elem->name . ' ' . $elem->population;
            echo '<br>';
        }
?>