<?php
    class Student{
        public $name;
        public $course;

        public function transferToNextCourse(){

            if($this->isCourseCorrect()){
                return $this->course += 1;
            }
        }
        private function isCourseCorrect(){
            if ($this->course <5 and $this->course >=1){
                return True;
            }
            else{
                return False;
            }
        }
    }

    $student_1 = new Student;
        $student_1->course = 5;
        
        echo $student_1->transferToNextCourse();

?>