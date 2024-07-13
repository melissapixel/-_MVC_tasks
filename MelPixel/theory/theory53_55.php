<?php
    // Магический метод toString в ООП на PHP
    // Методы PHP, начинающиеся с двойного подчеркивания __, называются магическим. Магия таких методов состоит в том, что они могут вызываться при совершении какого-то действия автоматически.

    class User
	{
		private $name;
		private $age;
		
		public function __construct($name, $age) 
		{
			$this->name = $name;
			$this->age = $age;
		}
		// Реализуем указанный метод:
		public function __toString()
		{
			return $this->name . $this->age ;
		}
		public function getName()
		{
			return $this->name;
		}
		
		public function getAge()
		{
			return $this->age;
		}
	}
    $user = new User('john', 25);
	echo $user;


    public function __toString()
	{
		return (string) array_sum($this->numbers); 
	}



    // Магически метод get
    // __get. Этот метод срабатывает при попытке прочитать значение приватного или защищенного свойства.
    //  Как вы видите, наш магический метод реагирует на обращение к приватным и несуществующим свойствам, но игнорирует обращение к публичным - они работают так, как и работали раньше.
    class Test
	{
		private $prop1 = 1;
		private $prop2 = 2;
	}
    public function __get($property)
    {
        return $this->$property;
    }
    $test = new Test;
	echo $test->prop1; // выведет 1
	echo $test->prop2; // выведет 2


    // Несуществующее свойство
    // В примере выше мы применяли магию метода __get для отлавливания обращения к приватным свойствам. На самом деле этот метод также может быть полезен для отлавливания обращений к несуществующим свойствам.
    class User
	{
		public $surname;
		public $name;
		public $patronymic;
		
		// Используем метод-перехватчик:
		public function __get($property)
		{
			// Если идет обращение к свойству fullname: 
			if ($property == 'fullname') {
				return $this->surname 
					. ' ' . $this->name . ' ' . $this->patronymic; 
			}
		}
	}
    $user = new User;
	$user->surname = 'Иванов';
	$user->name = 'Иван';
	$user->patronymic = 'Иванович';
	echo $user->fullname; 
		// выведет 'Иванов Иван Иванович' 



     // Магический метод set
     class Test
	{
		private $prop1;
		private $prop2;
	}
    public function __set($property, $value) 
		{
			var_dump($property . ' ' .$value);
		}
		$test = new Test;
		$test->prop = 'value'; // var_dump метода __set выведет 'prop value' 



		class Test
	{
		private $prop1;
		private $prop2;
		
		public function __set($property, $value) 
		{
			$this->$property = $value; // устанавливаем значение 
		}
	}
	$test = new Test;
	$test->prop1 = 1; // запишем 1
	$test->prop2 = 2; // запишем 2


	class Test
	{
		private $prop1;
		private $prop2;
		
		public function __set($property, 
			$value) 
		{
			$this->$property = $value;
		}
		
		// Магический геттер свойств:
		public function __get($property)
		{
			return $this->$property;
		}
	}
	hp
	$test = new Test;
	
	$test->prop1 = 1; // запишем 1
	$test->prop2 = 2; // запишем 2
	
	echo $test->prop1; // выведет 1
	echo $test->prop2; // выведет 2
	// Пусть мы не хотим разрешать записывать в несуществующие свойства. И, вообще, хотим разрешить запись только в свойства prop1 и prop2.
	// Это легко сделать - достаточно в методе __set добавить соответствующее условие:
	public function __set($property, 
			$value) 
		{
			// Напишем условие:
			if ($property == 
				'prop1' or $property 
				== 'prop2') { 
				$this->$property = $value;
			}
		}
		
		public function __get($property)
		{
			return $this->$property;
		}

		public function __set($property, 
			$value) 
		{
			$properties = ['prop1', 'prop2']; // разрешенные свойства 
			
			if (in_array($property, $properties)) {
				$this->$property = $value;
			}
		}
		
		public function __get($property)
		{
			return $this->$property;
		}

		public function __set($property, 
			$value) 
		{
			switch($property) {
				case 'prop1':
					// Если prop1 от 0 до 10:
					if ($value > 0 and $value 
						< 10) { 
						$this->$property = $value;
					}
				break;
				case 'prop2':
					// Если prop2 от 10 до 20:
					if ($value > 10 and $value < 20) { 
						$this->$property = $value;
					}
				break;
				default:
					// Такого свойства нет
				break;
			}
		}
		
		public function __get($property)
		{
			return $this->$property;
		}

		
?>