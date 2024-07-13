<?php
	class Test
	{
		public $prop1 = 1; // публичное свойство 
		private $prop2 = 2; // приватное свойство 

        public function __get($property)
		{
			return $property; 
				// просто вернем имя свойства 
		}
	}
?>
<?php
	$test = new Test;
	
	// Обращаемся к публичному свойству:
	echo $test->prop1; 
		// выведет 1 - то есть значение свойства 
	
	// Обращаемся к приватному свойству:
	echo $test->prop2; 
		// выведет 'prop2' - имя свойства 
	
	// Обращаемся к несуществующему свойству:
	echo $test->prop3; 
		// выведет 'prop3' - имя свойства 

?>