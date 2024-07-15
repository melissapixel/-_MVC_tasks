<?php
    class Interval{
        private $date_1;
        private $date_2;

        public function __construct($date_1, $date_2)
        {
            $this->date_1 = $this->convertToDateTime($date_1);
            $this->date_2 = $this->convertToDateTime($date_2); 
        }

        private function convertToDateTime($date) {
            if (!$date instanceof DateTime) {
                return new DateTime($date);
            }
            return $date;
        }

        public function toDays(){
            $diff = $this->date_1->diff($this->date_2);
            return $diff->format('%a дней');
        }
        public function toMonths()
		{
			// вернет разницу в месяцах
            $diff = $this->date_1->diff($this->date_2);
            $months = $diff->y * 12 + $diff->m;
            return $months . ' месяцев';

		}
    }
    $date_1 = '2023-01-02';
    $date_2 = '2023-03-01';
    $interval = new Interval($date_1, $date_2);
    echo $interval->toMonths();
?>