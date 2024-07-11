<?php
    class Arr{
        private $numbers = [];

        public function add($num){
            if (!is_numeric($num)) {
                throw new InvalidArgumentException("Аргумент должен быть числом, " . gettype($num) . " задано");
            }
            $this->numbers[] = $num; // Добавление числа к массиву
        
        }
        public function getAvg() {
            if (count($this->numbers) == 0) {
                throw new Exception("Массив пуст, невозможно вычислить среднее значение.");
            }
            return array_sum($this->numbers)
            / 
            count($this->numbers);
        }
    }

    $arr = new Arr;
    $arr->add(3);
    $arr->add(3);
    echo $arr->getAvg();

?>