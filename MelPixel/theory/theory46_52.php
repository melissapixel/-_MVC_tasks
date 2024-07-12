<?php
    // Работа с трейтами в ООП на PHP
    // Трейт представляет собой набор свойств и методов, которые можно включить в другой класс. При этом свойства и методы трейта будут восприниматься классом будто свои.

    trait Helper
	{
		private $name;
		private $age;
		
		public function getName()
		{
			return $this->name;
		}
		
		public function getAge()
		{
			return $this->age;
		}
	}

    class User
	{
		public function __construct($name, 
			$age) 
		{
			$this->name = $name;
			$this->age = $age;
		}
	}

    // Давайте теперь добавим геттеры для свойств нашего класса User. Только не будем их записывать в самом классе, а просто подключим трейт Helper, в котором эти методы уже реализованы:
    class User
	{
		use Helper; // подключаем трейт
		
		public function __construct($name, 
			$age) 
		{
			$this->name = $name;
			$this->age = $age;
		}
	}

    // После подключения трейта в нашем классе появятся методы и свойства этого трейта. При этом обращаться мы к ним будем будто к методам и свойствам самого класса:
    $user = new User('john', 30);
	echo $user->getName(); // выведет 'john' 
	echo $user->getAge();  // выведет 30



    class City
	{
		use Helper;
		
		public function __construct($name, 
			$age) 
		{
			$this->name = $name;
			$this->age = $age;
		}
	}
    $city = new City('Minsk', 1000);
	echo $city->getName(); // выведет 'Minsk' 
	echo $city->getAge();  // выведет 1000 

    

	// Разрешение конфликтов в трейтах
	// Давайте разрешим (в данном контексте это слово значит разрулим) конфликт имен наших трейтов. Для этого существует специальный оператор insteadof (переводится вместо чего-то). С помощью этого оператора будем использовать метод method трейта Trait1 вместо такого же метода трейта Trait2:
	use Trait1, Trait2 {
		Trait1::method insteadof Trait2;
	}
	// Как вы видите, синтаксис тут следующий: вначале имя трейта, потом два двоеточия, потом имя метода, потом наш оператор insteadof и имя второго трейта.


	use Trait1, Trait2 {
		Trait1::method insteadof Trait2; // берем метод из первого трейта 
		Trait2::method as method2; // метод второго трейта будет доступен method2 
	}

	// Использовать ключевое слово as без определения главного метода через insteadof нельзя, это выдаст ошибку:


	// Модификаторы доступа и трейты
	// В трейтах же все наоборот: в использующем трейт классе будут доступны как публичные, так и приватные методы и свойства класса.

	trait TestTrait
	{
		// Приватный метод:
		private function method()
		{
			return '!!!';
		}
	}
	class Test
	{
		use TestTrait; // подключаем трейт
		
		public function __construct()
		{
			// Используем приватный метод трейта:
			echo $this->method(); // выведет '!!!' 
		}
	}

	// Изменения прав доступа к методам трейта
	// Внутри трейта можно использовать любой модификатор доступа для методов (то есть public, private или protected). При необходимости, однако, в самом классе можно этот модификатор поменять на другой. Для этого в теле use после ключевого слова as нужно указать новый модификато
	trait TestTrait
	{
		// Приватный метод:
		private function method()
		{
			return '!!!';
		}
	}
	use TestTrait {
		TestTrait::method as public; // меняем метод на публичный 
	}


	// Приоритет методов
	// Если в классе и в трейте есть одноименный метод, то метод класса переопределит метод трейта:
	trait TestTrait
	{
		// Метод с именем method:
		public function method()
		{
			return 'trait';
		}
	}
	class TestClass
	{
		use TestTrait;
		
		// Такой же метод с именем 
			method: 
		public function method()
		{
			return 'test';
		}
	}
	
	$test = new TestClass;
	echo $test->method(); 
		// выведет 'test' - сработал метод самого класса 

	// Если же сам класс не имеет такого метода, но имеется конфликт имен методов трейта и методов родительского класса, то методы трейта имеют приоритет:
	trait TestTrait
	{
		// Метод с именем method:
		public function method()
		{
			return 'trait';
		}
	}
	
	// Родительский класс:
	class ParentClass
	{
		// Метод с именем method:
		public function method()
		{
			return 'parent';
		}
	}
	
	// Класс наследует метод method от родительского: 
	class TestClass extends ParentClass
	{
		use TestTrait;
	}
	
	$test = new TestClass;
	echo $test->method(); 
		// выведет 'trait', тк трейт имеет приоритет 


	// Абстрактные методы трейтов
	// В трейтах можно некоторые методы объявлять абстрактными. В этом случае класс, использующий этот трейт, обязан будет реализовать такой метод. При этом абстрактные методы трейта не могут быть приватными.

	trait TestTrait
	{
		public function method1()
		{
			return 1;
		}
		
		abstract public function method2();
	}

	class Test
	{
		use TestTrait; // используем трейт
		
		// Реализуем абстрактный метод:
		public function method2()
		{
			return 2;
		}
	}
	// Пусть наш трейт используется классом Test. Наличие в трейте абстрактного метода обяжет программиста реализовать его в классе, иначе будет ошибка PHP.


	// Использование трейтов в трейтах
	trait Trait1
	{
		private function method1()
		{
			return 1;
		}
		
		private function method2()
		{
			return 2;
		}
	}

	trait Trait2
	{
		private function method3()
		{
			return 3;
		}
	 }
	// Давайте к трейту Trait2 подключим трейт Trait1:
	trait Trait2
	{
		use Trait1; // используем первый трейт
		
		private function method3()
		{
			return 3;
		}
	}

	// trait_exists — Проверяет, существует ли трейт
	trait World {

		private static $instance;
		protected $tmp;
	
		public static function World()
		{
			self::$instance = new static();
			self::$instance->tmp = get_called_class().' '.__TRAIT__;
			
			return self::$instance;
		}
	
	}
	if ( trait_exists( 'World' ) ) {
    
		class Hello {
			use World;
	
			public function text( $str )
			{
				return $this->tmp.$str;
			}
		}
	
	}

	// get_declared_traits — Возвращает массив объявленных трейтов
	
// Declare Trait
trait FooTrait
{
}

// Declare Abstract class
abstract class FooAbstract
{
}

// Declare class
class Bar extends FooAbstract
{
    use FooTrait;
}

// Get all traits declareds
$array = get_declared_traits();

var_dump($array);
/**
 * Result:

 * array(1) {
 *  [0] =>
 *  string(23) "Example\FooTrait"
 * }
 */

?>