<?php
    abstract class Shape{
        abstract public function getArea();
    }
?>
<?php
    class Circle extends Shape{
        private $radius;
        public function setRadius($redius){
            $this->radius = $redius;
        }
        public function getArea(){
            return "The area of ​​our Circle is " .
            (3.14*($this->radius * $this->radius));
        }

    }

    class Rectangle extends Shape{
        private $w;
        private $l;
        public function setW($w){
            $this->w = $w;
        }
        public function setL($l){
            $this->l = $l;
        }
        public function getArea(){
            return "The area of ​​our Rectangle is " . ($this->w*$this->l);
        }
    }

    $circle = new Circle;
    $circle->setRadius(3);
    echo $circle->getArea();

    echo "<br>";
    $rectangle = new Rectangle;
    $rectangle->setW(3);
    $rectangle->setL(3);
    echo $rectangle->getArea();
?>