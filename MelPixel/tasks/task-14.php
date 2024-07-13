<?php
    class Arr{
        private $numbers = [];

        public function add($num){
            $this->numbers[] = $num;
            return $this;
        }

        public function __toString()
        {
            return (string) array_sum($this->numbers);
        }
    }
    $arr = new Arr;
    echo $arr->add(2)->add(2);
?>