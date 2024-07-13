<?php
    class Date{
        public $year;
        public $month;
        public $day;

        public function __construct($year, $month, $day)
        {
            $this->year = $year;
            $this->month = $month;
            $this->day = $day;
        }

        public function __get($property){
            if ($property == 'weekDay'){
                return $this->year . ' ' . $this->month . ' ' . $this->day;
            }
        }
    }

    $date = new Date(2006, 11, 3);
    echo $date->weekDay;
?>