<?php
	class User
	{
		private $name;
		private $age;
		
                public function __construct($name, 
                	$age) 
                {
                	$this->name = $name;
                	$this->age = $age;
                }
                
                // public function getName()
                // {
                // 	return $this->name;
                // }
                
                // public function getAge()
                // {
                // 	return $this->age;
                // }
        public function __get($property)
		{
			return $this->$property;
		}
	}

    $user = new User('Kay', 31);
    echo $user->age;
?>