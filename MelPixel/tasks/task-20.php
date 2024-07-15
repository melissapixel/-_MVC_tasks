<?php
    require_once 'Square.php';
    
    class intSquare implements Square{
        private $squareValue;

        public function setValue($value){
            return $this->squareValue = $value;
        }
        private function calculateSquare($value){
            $this->squareValue = $value; 
            return $this->squareValue * $this->squareValue;
        }
        public function getCalculateSquare($value){
            return $this->calculateSquare($value);
        }
    }
    $value_1 = new intSquare;
    echo $value_1->getCalculateSquare($value_1->setValue(90));
?>