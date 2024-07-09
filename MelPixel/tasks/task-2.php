<?php
    class User{
        public $name;
        public $age;

        public function show($str){
            return $str . " OK ";
        }
    }

    $user_1 = new User;
        $user_1->name = 'mila';
        $user_1->age = 23;

        echo $user_1->show('Good');
        // echo '<br>';
        // echo $user_1->show() . $user_1->age;

?>