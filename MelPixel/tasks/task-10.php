<?php
    class Student{
        private $name;
        private $course;

        public function __construct($name)
        {
            $this->name = $name;
            $this->course = 1;
        }
        public function getCourse(){
            return $this->course;
        }

        public function transferToNextCourse(){
            $this->course++;

        }
    }

    $student_1 = new Student('Lila');
    // echo $student_1->getCourse();
    $student_1->transferToNextCourse();
    // echo $student_1->getCourse();
    $student_1->transferToNextCourse();
    $student_1->transferToNextCourse();
    echo $student_1->getCourse();

?>