<!-- Интерфейсы в ООП на PHP -->
<?php
    // Представим себе ситуацию, когда ваш абстрактный класс представляет собой только набор абстрактных публичных методов, не добавляя методы с реализацией.

    // Фактически ваш родительский класс описывает интерфейс потомков, то есть набор их публичных методов, обязательных для реализации.

    // Зачем нам такое нужно: чтобы при программировании совершать меньше ошибок - описав все необходимые методы в классе-родителе, мы можем быть уверенны в том, что все потомки их действительно реализуют.

//     Есть, однако, проблема: фактически мы сделали наш класс-родитель для того, чтобы писать в нем абстрактные публичные методы, но мы сами или наш коллега имеем возможность случайно добавить в этот класс не публичный метод или не абстрактный.

// Пусть мы хотим физически запретить делать в родителе иные методы, кроме абстрактных публичных. В PHP для этого вместо абстрактных классов можно использовать интерфейсы.

    interface Figure
	{
		public function getSquare();
		public function getPerimeter();
	}


    class Quadrate implements Figure
	{
		private $a;
		
		public function __construct($a)
		{
			$this->a = $a;
		}
		
		public function getSquare()
		{
			return $this->a * $this->a;
		}
		
		public function getPerimeter()
		{
			return 4 * $this->a;
		}
	}


    // Как это работает: если забыть реализовать какой-нибудь метод, описанный в интерфейсе, PHP выдаст нам фатальную ошибку.
    // Общепринято в таком случае название интерфейса начать с маленькой буквы i, чтобы показать, что это интерфейс, а не класс. То есть в нашем случае мы сделаем интерфейс iUser, а реализовывать его будет класс User. 


    // Параметры в методах интерфейсов в ООП на PHP
    // Давайте укажем параметры методов в нашем интерфейсе:
    interface iMath
	{
		public function sum($a, $b);      
			// сложить 
		public function subtract($a, $b); // вычесть
		public function multiply($a, $b); // 
			умножить 
		public function divide($a, $b);   // 
			поделить 
	}
    class Math implements iMath
	{
		public function sum($a, $b)
		{
			return $a + $b;
		}
		
		public function subtract($a, $b)
		{
			return $a - $b;
		}
		
		public function multiply($a, $b)
		{
			return $a * $b;
		}
		
		public function divide($a, $b)
		{
			return $a / $b;
		}
	}

    // Если попытаться в нашем классе задать другое количество параметров - у нас это просто не получится: PHP выдаст ошибку. Таким образом мы не сможем ни случайно забыть какой-то параметр, ни случайно добавить лишний.

    // Объявление конструктора в интерфейсе
    interface iRectangle
	{
		public function 
			__construct($a, $b); // конструктор с двумя параметрами 
		public function getSquare();
		public function getPerimeter();
	}

    class Rectangle implements iRectangle
	{
		private $a;
		private $b;
		
		public function __construct($a, 
			$b) 
		{
			$this->a = $a;
			$this->b = $b;
		}
		
		public function getSquare()
		{
			return $this->a * $this->b;
		}
		
		public function getPerimeter()
		{
			return 2 * ($this->a + $this->b);
		}
	}


    // Наследование интерфейсов друг от друга
    // Интерфейсы, так же, как и классы, могут наследовать друг от друга с помощью оператора extends. 
    interface iRectangle extends iFigure
	{
		public function __construct($a, $b); 
	}



    // Интерфейсы и instanceof в ООП на PHP
    // С помощью instanceof можно проверять, реализует какой-то класс заданный интерфейс или нет.
    class Quadrate implements iFigure
	{
		
	}
    $quadrate = new Quadrate;
	var_dump($quadrate instanceof Quadrate); // выведет true 
	var_dump($quadrate instanceof Figure);   // выведет true 



    // Несколько интерфейсов в ООП на PHP
    // В PHP нет множественного наследования - каждый класс может иметь только одного родителя. С интерфейсами дело, однако, обстоит по другому: каждый класс может реализовывать любое количество интерфейсов. Для этого имена интерфейсов нужно перечислить через запятую после ключевого слова implements.
    class Quadrate implements iFigure, iTetragon 
	{
		// тут будет реализация
	}


    // Наследование от класса и реализация интерфейса
    interface iProgrammer
	{
		public function __construct($name, $salary); 
		public function getName();
		public function getSalary();
		public function getLangs();
		public function addLang($lang);
	}
    class Programmer extends Employee
	{
		
	}
    class Programmer implements iProgrammer
	{
		
	}
    class Programmer extends Employee implements 
    iProgrammer 
{
    
}
// Получится, что наш класс Pogrammer унаследует от класса Employee методы __construct, getName и getSalary, а методы addLang и getLangs нам придется реализовать:
class Programmer extends Employee implements iProgrammer 
	{
		public function addLang($lang)
		{
			// реализация
		}
		
		public function getLangs()
		{
			// реализация
		}
	}

    // Интерфейсу iProgrammer все равно, родные методы у класса или унаследованные - главное, чтобы все описанные методы были реализованы.


    // Константы в интерфейсе в ООП на PHP
//     Интерфейсы не могут содержать свойства классов, но могут содержать константы. Константы интерфейсов работают точно так же, как и константы классов, за исключением того, что они не могут быть переопределены наследующим классом или интерфейсом.

// Для примера сделаем интерфейс iSphere, который будет описывать класс для работы с шаром. В этом шаре нам надо будет найти объем и площадь поверхности. Для этого нам потребуется число Пи. Зададим его как константу нашего интерфейса:

interface iSphere
{
    const PI = 3.14; // число ПИ как константа
    // Конструктор шара:
    public function __construct($radius);
    // Метод для нахождения объема шара:
    public function getVolume();
    // Метод для нахождения площади поверхности шара: 
    public function getSquare();
}


// interface_exists — Проверяет, определён ли интерфейс
// Проверяем существование интерфейса перед его использованием
if (interface_exists('MyInterface')) {
    class MyClass implements MyInterface
    {
        // Методы
    }
}
// get_declared_interfaces — Возвращает массив объявленных интерфейсов
print_r(get_declared_interfaces());
// Array
// (
//     [0] => Traversable
//     [1] => IteratorAggregate
//     [2] => Iterator
//     [3] => ArrayAccess
//     [4] => reflector
//     [5] => RecursiveIterator
//     [6] => SeekableIterator
// )


?>