<?php
    // Введение в классы и объекты в PHP

    // Сейчас мы с вами займемся изучением ООП в PHP. Давайте рассмотрим пример из жизни, а потом перенесем его на PHP.
    
    // В качестве примера возьмем автомобиль. У него есть колеса, цвет, вид кузова, объем двигателя и так далее. Кроме того, водитель может отдавать ему команды: ехать, остановится, повернуть направо, налево и тп.
    
    // Можно говорить о том, что существует некоторый класс автомобилей, обладающий общими свойствами (у всех есть колеса и всем им можно отдавать команды).
    
    // Конкретный автомобиль, стоящий на улице - это представитель этого класса, или, другими словами, объект этого класса. У всех объектов этого класса есть свойства: количество колес, цвет, вид кузова и методы: ехать, остановится, повернуть направо, налево.
    
    // Другими словами сам класс - это чертеж, по которым на заводе делаются автомобили. Объект же - это сама машина, сделанная по этим чертежам.
    
    // В PHP класс создается с помощью ключевого слова class, за которым следует название этого класса. Давайте сделаем класс Car:
	class Car
	{
		// тут код, то есть PHP-чертеж автомобиля 
	}


//     Укажем теперь в нашем чертеже, что любой автомобиль, созданный по этому чертежу, будет иметь свойство для цвета и свойство для количества топлива.

// Для этого внутри класса напишем свойство $color и свойство $fuel:
class Car
	{
		// Зададим свойства (по сути переменные класса): 
		public $color; // цвет автомобиля
		public $fuel; // количество топлива
	}


//     Давайте теперь сделаем методы нашего класса. В PHP методы, подобно обычным функциям, объявляются с помощью ключевого слова function, перед которым пишется ключевое слово public.

// Как уже упоминалось выше, наш автомобиль может ехать, может поворачивать, может останавливаться. Сделаем соответствующие методы в нашем классе:
class Car
{
    public $color; // цвет автомобиля
    public $fuel; // количество топлива
    
    // Команда ехать:
    public function go()
    {
        // какой-то PHP код
    }
    
    // Команда поворачивать:
    public function turn()
    {
        // какой-то PHP код
    }
    
    // Команда остановиться:
    public function stop()
    {
        // какой-то PHP код
    }
}

// Мы с вами сделали чертеж нашего автомобиля. Теперь нужно отправится на завод и сделать объект этого класса (то есть конкретный автомобиль).

// В PHP это делается с помощью ключевого слова new, после которого пишется имя класса:
new Car; // командуем заводу сделать автомобиль 


// Однако, если просто создать объект класса - это ни к чему не приведет (это все равно, что, к примеру, объявить массив и никуда его не записать). Нам нужна переменная для хранения этого объекта.

// Пусть эта переменная будет называться $myCar - запишем в нее созданный нами объект:
$myCar = new Car; // запишем  созданный объект в переменную  $myCar

// После создания автомобиля можно обращаться к его свойствам. Обращение к ним происходит через стрелочку ->. Давайте установим свойства нашего объекта:
$myCar = new Car; // командуем заводу сделать  автомобиль 

// Устанавливаем свойства объекта:
$myCar->color = 'red'; // красим в красный цвет 
$myCar->fuel = 50; // заливаем топливо 

// Все, наш автомобиль создан, покрашен и заправлен. Теперь мы можем отдавать ему команды через методы этого автомобиля.

// Обращение к методам также происходит через стрелочку, но, в отличие от свойства, после имени метода следует писать круглые скобки. Давайте покомандуем нашим объектом:
    $myCar->go();   // автомодиль->едь
	$myCar->turn(); // автомодиль->поверни 
	$myCar->stop(); // автомодиль->остановись 


//     Работа со свойствами объектов на PHP

// Сейчас мы с вами научимся работать с объектами и их свойствами на более практическом примере. Давайте сделаем класс User, который будет описывать юзера нашего сайта. Пусть у нашего пользователя будет два свойства: имя и возраст. Напишем код нашего класса:
class User
	{
		public $name; // свойство для имени
		public $age; // свойство для возраста
	}

//     Пока наш класс ничего не делает - он просто описывает, что будут иметь объекты этого класса (в нашем случае каждый объект будет иметь имя и возраст). По сути, пока мы не создадим хотя бы один объект нашего класса - ничего полезного не произойдет.

// Давайте создадим объект нашего класса. При этом нужно иметь ввиду, что классы принято называть большими буквами, а объекты этих классов - маленькими:
// Объявляем класс:
class User
{
    public $name;
    public $age;
}

// Создаем объект нашего класса:
$user = new User;

// Давайте теперь что-нибудь запишем в свойства нашего объекта, а потом выведем эти данные на экран:
class User
{
    public $name;
    public $age;
}
$user = new User; // создаем объект нашего класса 
$user->name = 'john'; // записываем имя в свойство name 
$user->age = 25; // записываем возраст в свойство age 

echo $user->name; // выводим записанное имя
echo $user->age; // выводим записанный возраст 

// Как вы уже поняли - в свойства объекта можно что-то записывать и из свойств можно выводить их содержимое. Давайте теперь сделаем 2 объекта-юзера: 'john' и 'eric', заполним их данными и выведем на экран сумму их возрастов:
class User
{
    public $name;
    public $age;
}

// Первый объект
$user1 = new User; // создаем первый объект 
$user1->name = 'john'; // записываем имя 
$user1->age = 25; // записываем возраст

// Второй объект
$user2 = new User; // создаем второй объект 
$user2->name = 'eric'; // записываем имя 
$user2->age = 30; // записываем возраст

// Найдем сумму возрастов:
echo $user1->age + $user2->age; 
// выведет 55 




// Работа с методами объектов

// Перейдем теперь к методам. Методы - это по сути функции которые может вызывать каждый объект. При написании кода разница между методами и свойствами в том, что для методов надо писать круглые скобки в конце, а для свойств - не надо.

// Давайте потренируемся - сделаем метод show(), который будет выводить некоторый текст:
class User
	{
		public $name;
		public $age;
		
		// Создаем метод:
		public function show()
		{
			return '!!!';
		}
	}
	
	$user = new User;
	$user->name = 'john';
	$user->age = 25;
	
	// Вызовем наш метод:
	echo $user->show(); // выведет 
		'!!!' 



    // Создаем метод:
		public function show($str)
		{
			return $str . '!!!';
		}
    // Вызовем наш метод:
	echo $user->show('hello'); // выведет 'hello!!!'



//     Обращение к свойствам класса через $this

// Пусть теперь наш метод show() выводит нечто полезное - имя пользователя, которое хранится в свойстве name. Для того, чтобы обратиться к свойству класса внутри метода этого класса, вместо имени объекта следует писать специальную переменную $this:
class User
{
    public $name;
    public $age;
    
    public function show()
    {
        return $this->name; // вернем имя из свойства 
    }
}


// С помощью $this свойства можно не только прочитывать, но и записывать. Давайте сделаем метод setName(), который параметром будем принимать имя пользователя и записывать его в свойство name:
class User
	{
		public $name;
		public $age;
		
		// Метод для изменения имени юзера:
		public function setName($name)
		{
			$this->name = $name; 
				// запишем новое значение свойства name 
		}
	}
	
	$user = new User; // создаем объект класса
	$user->name = 'john'; // записываем имя 
	$user->age = 25; // записываем возраст
	
	// Установим новое имя:
	$user->setName('eric');
	
	// Проверим, что имя изменилось:
	echo $user->name; // выведет 'eric'


	// Обращение к методам класса через $this
	// Метод для изменения возраста юзера:
	public function setAge($age)
	{
		$this->age = $age;
	}


	// Пусть также нам нужен метод addAge, который будет добавлять некоторое количество лет к текущему возрасту:
	// Метод для добавления к возрасту:
	public function addAge($years)
	{
		$this->age = $this->age + $years;
	}

	// Метод для добавления к возрасту:
	public function addAge($years)
	{
		$newAge = $this->age + $years; // вычислим новый возраст 
		
		// Если НОВЫЙ возраст от 18 до 60:
		if ($newAge >= 18 and $newAge <= 60) { 
			$this->age = $newAge; 
				// обновим, если новый возраст прошел проверку 
		}
	}



// 	Получится, что ограничения на возраст теперь задаются в двух местах (в методе setAge и в методе addAge), что не очень хорошо: если мы захотим поменять ограничение, нам придется сделать это в двух местах - это неудобно, и в каком-то из мест мы можем забыть внести изменения - это опасно, ведь наш код получится с трудноуловимой ошибкой.

// Давайте вынесем проверку возраста на корректность в отдельный вспомогательный метод isAgeCorrect, в который параметром будет передаваться возраст для проверки, и используем его внутри методов setAge и addAg
	// Метод для проверки возраста:
	public function isAgeCorrect($age)
	{
		if ($age >= 18 and $age <= 60) {
			return true;
		} else {
			return false;
		}
	}

		// Метод для изменения возраста юзера:
		public function setAge($age)
		{
			// Проверим возраст на корректность:
			if ($this->isAgeCorrect($age)) {
				$this->age = $age;
			}
		}
		
		// Метод для добавления к возрасту:
		public function addAge($years)
		{
			$newAge = $this->age + $years; // вычислим новый возраст 
			
			// Проверим возраст на корректность:
			if ($this->isAgeCorrect($newAge)) {
				$this->age = $newAge; 
					// обновим, если новый возраст прошел проверку 
			}
		}

		$user->setAge(30); // установим возраст в 30 
		echo $user->age; // выведет 30
		
		$user->setAge(10); // установим некорректный возраст 
		echo $user->age; // не выведет 10, а выведет 30 



	// Модификаторы доступа public и private в PHP
	// Методы и свойства, которые мы хотим сделать недоступными извне, называются приватными и объявляются с помощью ключевого слова private.
		// Выдаст ошибку, так как свойство 
		name - private: 
		$user->name = 'john';

	// Как мы знаем, метод isAgeCorrect является вспомогательным и мы не планируем использовать его снаружи класса. Логично сделать его приватным,
	// Обычно все приватные методы размещают в конце класса,
// 	Существует специальное правило: если вы делаете новый метод и не знаете, сделать его публичным или приватным, - делайте приватным. В дальнейшем, если он понадобится снаружи, - вы поменяете его на публичный.

// Еще раз резюмируем: слова public и private не нужны для реализации логики программы, а нужны для того, чтобы уберечь программистов от ошибок.



// Конструктор объекта в ООП на PHP
$user = new User('john', 25); // создадим объект, сразу заполнив его данными 
// Для решения проблемы нам поможет метод конструктор с названием __construct. Суть в следующем - если в коде класса существует метод с таким названием - он будет вызываться в момент создания объекта:
public function __construct()
		{
			echo '!!!';
		}
	}
	
	$user = new User; // выведет '!!!'


	// Конструктор объекта:
	public function __construct($name, $age) 
{
	$this->name = $name; 
		// запишем данные в свойство  name 
	$this->age = $age; 
		// запишем данные в свойство age 
}


// Работа с геттерами и сеттерами в ООП на PHP
// Метод для чтения возраста юзера:
	public function getAge()
	{
		return $this->age;
	}

	public function setAge($age)
	{
		if ($this->isAgeCorrect($age)) {
			$this->age = $age;
		}
	}

	// ользовать тогда, когда нам нужна какая-то проверка в сеттере. В терминах этого подхода метод getAge называется геттером (англ. getter), а метод setAge - сеттером (англ. setter).



	// Свойства только для чтения в ООП на PHP
	// Это делается следующим образом: для такого свойства нужно сделать геттер, но не делать сеттер. В этом случае свойство можно будет прочитать с помощью геттера, но нельзя будет записать, так как сеттер отсутствует. 
	// Геттер для имени:
	public function getName()
	{
		return $this->name;
	}

	// Конструктор объекта:
	public function __construct($name, 
	$age) 
{
	$this->name = $name;
	$this->age = $age;
}


// Хранение классов в отдельных файлах в PHP
// До этого урока мы писали наши классы в том же файле, где и вызывали их. В реальной жизни классы обычно хранятся в отдельных файлах, причем каждый класс в своем отдельном файле. При этом существует соглашение о том, что файл с классом следует называть так же, как и сам класс.
require_once 'User.php'; // подключаем наш класс 
	$user = new User;


	// Хранение объектов в массивах в ООП на PHР
	// ом мы создаем наш массив с объектами - важен сам принцип: объекты можно хранить в массивах. Затем эти объекты можно, к примеру, перебрать циклом. Давайте сделаем это:
	$users = [
		new User('john', 21),
		new User('eric', 22),
		new User('kyle', 23)
	];
	// Переберем созданный массив циклом:
	foreach ($users as $user) {
		echo $user->name . ' ' . $user->age . '<br>'; 
	}


	// Начальные значения свойств в конструкторе
	public function __construct()
	{
		$this->prop1 = 'value1'; 
			// начальное значение свойства 
		$this->prop2 = 'value2'; 
			// начальное значение свойства 
	}
	$test = new Test;
	echo $test->prop1; // выведет 'value1' 
	echo $test->prop2; // выведет 'value2' 



	// Начальные значения свойств при объявлении
	public $prop1 = 'value1'; 
	// начальное значение свойства prop1 
	public $prop2 = 'value2'; 
	// начальное значение свойства prop2 


	class Arr
	{
		// Массив для хранения чисел:
		private $numbers = [];
		
		// Добавляет число в набор:
		public function add($num)
		{
			$this->numbers[] = $num;
		}
		
		// Находит сумму чисел набора:
		public function getSum()
		{
			return array_sum($this->numbers);
		}
	}

	$arr = new Arr;
	$arr->add(1);
	$arr->add(2);
	$arr->add(3);
	echo $arr->getSum(); // выведет 6


	// Переменные названия свойств объектов в PHP
	$user = new User('john', 21);
	$prop = 'name';
	echo $user->$prop; // выведет 'john' 

	class User
	{
		public $surname; // фамилия
		public $name; // имя
		public $patronymic; // отчество
		
		public function __construct($surname, 
			$name, $patronymic) 
		{
			$this->surname = $surname;
			$this->name = $name;
			$this->patronymic = $patronymic;
		}
	}
	$props = ['surname', 'name', 'patronymic']; 
	$user = new User('Иванов', 'Иван', 'Иванович'); 
	echo $user->{$props[0]}; // выведет 'Иванов' 

	$user = new User('Иванов', 'Иван', 'Иванович'); 
	$props = ['prop1' => 'surname', 'prop2' => 'name', 'prop3' => 'patronymic']; 
	echo $user->{$props['prop1']}; // выведет 'Иванов' 



	class Prop
	{
		public $value;
		public function __construct($value)
		{
			$this->value = $value;
		}
	}
	$user = new User('Иванов', 'Иван', 'Иванович'); 
	$prop = new Prop('surname'); // будем выводить значение свойства surname 
	echo $user->{$prop->value}; // выведет 'Иванов' 


	// Переменные названия методов
	$user = new User('john', 21);
	$method = 'getName';
	echo $user->$method(); // выведет 'john' 


	$user = new User('john', 21);
	$methods = ['getName', 'getAge'];
	echo $user->{$methods[0]}(); // выведет 'john' 


	// Вызов метода сразу после создания объекта
	$arr = new Arr([1, 2, 3]);
	echo $arr->getSum(); // выведет 6
	
	echo (new Arr([1, 2, 3]))->getSum(); // выведет 6 

	echo (new Arr([1, 2, 3]))->getSum() + (new Arr([4, 5, 6])->getSum(); 


	// Цепочки методов
	echo $arr->add(1)->add(2)->push([3, 4])->getSum(); // это наша цель 

	echo (new Arr)->add(1)->add(2)->push([3, 4])->getSum(); // выведет 10 


	// Класс как набор методов в ООП на PHP
	$arraySumHelper = new ArraySumHelper;
	$arr = [1, 2, 3];
	echo $arraySumHelper->getSum1($arr);
	echo $arraySumHelper->getSum2($arr);
	echo $arraySumHelper->getSum3($arr);
	echo $arraySumHelper->getSum4($arr);

	$arraySumHelper = new ArraySumHelper;
	$arr = [1, 2, 3];
	echo $arraySumHelper->getSum2($arr) + $arraySumHelper->getSum3($arr); 

	class ArraySumHelper
	{
		public function getSum1($arr)
		{
			$sum = 0;
			
			foreach ($arr as $elem) {
				$sum += $elem; // первая 
					степень элемента - это сам 
					элемент 
			}
			
			return $sum;
		}
		
		public function getSum2($arr)
		{
			$sum = 0;
			
			foreach ($arr as $elem) {
				$sum += pow($elem, 
					2); // возведем во вторую 
					степень 
			}
			
			return $sum;
		}
		
		public function getSum3($arr)
		{
			$sum = 0;
			
			foreach ($arr as $elem) {
				$sum += pow($elem, 
					3); // возведем в третью 
					степень 
			}
			
			return $sum;
		}
		
		public function getSum4($arr)
		{
			$sum = 0;
			
			foreach ($arr as $elem) {
				$sum += pow($elem, 
					4); // возведем в четвертую 
					степень 
			}
			
			return $sum;
		}
	}



	private function getSum($arr, $power) {
		$sum = 0;
		foreach ($arr as $elem) {
			$sum += pow($elem, $power);
		}
		return $sum;
	}


	class ArraySumHelper
	{
		public function getSum1($arr)
		{
			return $this->getSum($arr, 1);
		}
		
		public function getSum2($arr)
		{
			return $this->getSum($arr, 2);
		}
		
		public function getSum3($arr)
		{
			return $this->getSum($arr, 3);
		}
		
		public function getSum4($arr)
		{
			return $this->getSum($arr, 4);
		}
		
		private function getSum($arr, $power) {
			$sum = 0;
			
			foreach ($arr as $elem) {
				$sum += pow($elem, $power);
			}
			return $sum;
		}
	}

	// Наследование классов

	// Класс, от которого наследуют называется родителем (англ. parent), а класс, который наследует - потомком. Класс-потомок наследует только публичные методы и свойства, но не приватные.

	// Наследование реализуется с помощью ключевого слова extends
	class Employee extends User
	{
		private $salary;
		
		public function getSalary()
		{
			return $this->salary;
		}
		
		public function setSalary($salary)
		{
			$this->salary = $salary;
		}
		
	}

	// Наследование от наследников
	// Пусть у нас есть класс-родитель и класс-потомок. От этого потомка также могут наследовать другие классы, от его потомков другие и так далее. Для примера пусть от класса User наследует Student, а от него в свою очередь наследует класс StudentBSU:
	class StudentBSU extends Student
	{
		// добавляем свои свойства и методы 
	}


	// Модификатор доступа protected в ООП на PHP
	// Другими словами, мы хотели бы, чтобы некоторые методы или свойства родителя наследовались потомками, но при этом для всего остального мира вели себя как приватные.
	// Для решения этой проблемы существует специальный модификатор protected


	// Перезапись методов родителя в классе потомке
	//  в PHP в классе-потомке разрешено сделать метод с таким же именем, как и у родителя, таким образом переопределив этот метод родителя на свой.
	// Перезаписываем метод родителя:
	public function setAge($age)
	{
		if ($age >= 18 and $age <= 25) {
			$this->age = $age;
		}
	}
	// Так как наш метод setAge использует свойство age от родителя, то в родителе это свойство надо объявить как защищенное

	// Давайте доработаем наш класс Student так, чтобы использовался метод setAge родителя:
	class Student extends User
	{
		private $course;
		
		public function setAge($age)
		{
			// Если возраст меньше или равен 25:
			if ($age <= 25) {
				// Вызываем метод родителя:
				parent::setAge($age); 
					// в родителе выполняется проверка age >= 18 
			}
		}
	}



	// Перезапись конструктора родителя в потомке
	// Конструктор объекта класса Student:
	public function __construct($name, $age, $course)
	{
		// Вызовем конструктор родителя, передав ему два параметра: 
		parent::__construct($name, $age);
			
		// Запишем свойство course:
		$this->course = $course;
	}


	// Передача объектов по ссылке
	$user = new User('john', 30);
	
	$test = $user; // и $test, и $user ссылаются на один и тот же объект 
	$test->name = 'eric'; // поменяли переменную $test - но $user также поменялась!
	
	// Проверим - выведем свойство name из переменной $user: 
	echo $user->name; // выведет 'eric'!



	$user = new User('john', 30);
	$name = $user->name; 
		// запишем в переменную $name текст 'john' 
	$name = 'eric'; // поменяли переменную $name, но $user->name не поменялось 
	// Проверим - выведем свойство name из переменной $user: 
	echo $user->name; // выведет 'john'

	$user = new User('john', 30);
	$test = $user; // и $test, и $user ссылаются на один и тот же объект 
	$user = 123;   // теперь $test ссылается, а $user - нет 

	

	// Использование классов внутри других классов

	// Передача объектов параметрами

	// Сравнение объектов в ООП на PHP
// 	При использовании оператора == для сравнения двух объектов выполняется сравнение свойств объектов: два объекта равны, если они имеют одинаковые свойства и их значения (значения свойств сравниваются через ==) и являются экземплярами одного и того же класса.

// При сравнении через ===, переменные, содержащие объекты, считаются равными только тогда, когда они ссылаются на один и тот же экземпляр одного и того же класса.
$user1 = new User('john', 30);
$user2 = new User('john', 30);

var_dump($user1 == $user2); // выведет true 


$user1 = new User('john', 30); // возраст - число 
	$user2 = new User('john', '30'); // возраст - строка 
	var_dump($user1 == $user2); // выведет true
	
	

// 	Определение принадлежности объекта к классу
// Сейчас мы с вами изучим оператор instanceof. Данный оператор используется для определения того, является ли текущий объект экземпляром указанного класса.
	// Выведет true, тк объект принадлежит классу Class1: 
	var_dump($obj instanceof Class1);
	// Выведет false, тк объект НЕ принадлежит классу Class2: 
	var_dump($obj instanceof Class2);

	class UsersCollection
	{
		private $employees = []; // массив работников 
		private $students = []; // массив студентов 
	}
	$usersCollection = new UsersCollection;
	$usersCollection->add(new Employee('john', 200)); // попадет к работникам 
	$usersCollection->add(new Student('eric', 100));  // попадет к студентам 

	

	// Контроль типов при работе с объектами
	// Явно укажем тип параметра:
	public function add(Employee $employee)
	{
		$this->employees[] = $employee;
	}


	// Статические методы в ООП на PHP
	// При работе с классами можно делать методы, которые для своего вызова не требуют создания объекта. Такие методы называются статическими. Чтобы объявить метод статическим, нужно после модификатора доступа написать ключевое слово static:
	// Статический метод:
	class Test
	{
		// Статический метод:
		public static function method()
		{
			return '!!!';
		}
	}
	echo Test::method(); // выведет '!!!' 

	// Наш класс Math представляет собой просто набор методов и, фактически, нам нужен только один объект этого класса. В таком случае удобно объявить методы класса статическими и вообще не создавать объект этого класса, а сразу использовать его методы.
	echo Math::getSum(1, 2) + Math::getProduct(3, 4); 

	// Если вы хотите использовать статические методы внутри класса, то к ним следует обращаться не через $this->, а с помощью self::
	// Найдем удвоенную сумму:
	public static function getDoubleSum($a, $b) 
{
	return 2 * self::getSum($a, $b); // используем другой метод 
}
echo Math::getDoubleSum(1, 2);

// Статические свойства в ООП на PHP
class Test
{
	public static $property; // статическое свойство 
}
	Test::$property = 'test';
	echo Test::$property; // выведет 'test' 


	public static function setProperty($value)
		{
			self::$property = $value; // записываем данные в наше static свойство 
		}
		
		// Статический метод для получения значения свойства: 
		public static function getProperty()
		{
			return self::$property; 
				// прочитываем записанные данные 
		}
	
		Test::setProperty('test'); 
		// запишем данные в свойство 
	echo Test::getProperty(); // выведем на экран 


	private static $pi = 3.14; // вынесем Пи в свойство 
		public static function getCircleSquare($radius)
		{
			return self::$pi * $radius * $radius; 
		}
		
		public static function getCircleСircuit($radius)
		{
			return 2 * self::$pi * $radius;
		}


		// Объект со статическими свойствами и методами
		class Test
	{
		public static $staticProperty; 
			// публичное статическое свойство 
		public $usualProperty; // обычное свойство 
	}
	// А теперь используем статическое свойство, не создавая объект этого класса:
	Test::$staticProperty = 'static'; // записываем значение 
	echo Test::$staticProperty; // выведет 'static' 

	// На самом деле, если у нас есть переменная с объектом класса, то у этой переменной также будет доступно статическое свойство:
	$test = new Test; // создаем объект класса
	$test::$staticProperty = 'static'; // записываем значение 
	echo $test::$staticProperty; // выведет 'static' 

	// На практике это означает то, что если у нас есть несколько объектов класса - статические свойства у них будут общие. 
	$test1 = new Test; // первый объект 
$test2 = new Test; // второй объект 
$test1::$staticProperty = 'static'; // запишем значение, используя первый объект
echo $test1::$staticProperty; // выведет 'static' 
echo $test2::$staticProperty; // также выведет 'static' 


class User
	{
		public static $count = 0; // счетчик объектов 
		public $name;
		
		public function __construct($name)
		{
			$this->name = $name;
			
			// Увеличиваем счетчик при создании объекта: 
			self::$count++;
		}
	}

	$user1 = new User('user1'); // создаем первый объект класса 
	echo User::$count; //выведет 1
	
	$user2 = new User('user2'); // создаем второй объект класса 
	echo User::$count; //выведет 2
	


	// Константы классов в ООП на PHP
	class Test
	{
		const CONSTANT = 'test';
		
		function getConstant() {
			return self::CONSTANT;
		}
	}
	$test = new Test;
	echo $test->getConstant(); // выведет 'test' 



	class foo
{
    function name()
    {
        echo "Меня зовут " , get_class($this) , "\n";
    }
}

	// Создаём объект
	$bar = new foo();

	// Внешний вызов
	echo "Его имя " , get_class($bar) , "\n";

	// Внутренний вызов
	$bar->name();

// 	Его имя foo
// Меня зовут foo




class myclass
{
    // Конструктор
    function __construct()
    {
        return(true);
    }

    // Метод 1
    function myfunc1()
    {
        return(true);
    }

    // Метод 2
    function myfunc2()
    {
        return(true);
    }
}


$class_methods = get_class_methods('myclass');
// или
$class_methods = get_class_methods(new myclass());

foreach ($class_methods as $method_name) {
    echo "$method_name\n";
}

// Результат выполнения приведённого примера:
// __construct
// myfunc1
// myfunc2



class myclass
{
    var $var1; // У переменной нет начального значения...
    var $var2 = "xyz";
    var $var3 = 100;
    private $var4;

    // Конструктор
    function __construct()
    {
        // Изменим значения отдельных свойств
        $this->var1 = "foo";
        $this->var2 = "bar";
        return true;
    }
}

$my_class = new myclass();

$class_vars = get_class_vars(get_class($my_class));

foreach ($class_vars as $name => $value) {
    echo "$name : $value\n";
}
// Результат выполнения приведённого примера:
// var1 :
// var2 : xyz
// var3 : 100


// get_object_vars()
// Возвращает ассоциативный массив нестатических свойств объекта object, доступных в данной области видимости.
	
class foo {
    private $a;
    public $b = 1;
    public $c;
    private $d;
    static $e;

    public function test() {
        var_dump(get_object_vars($this));
    }
}

$test = new foo;
var_dump(get_object_vars($test));

$test->test();
// Результат выполнения приведённого примера:

// array(2) {
//   ["b"]=>
//   int(1)
//   ["c"]=>
//   NULL
// }
// array(4) {
//   ["a"]=>
//   NULL
//   ["b"]=>
//   int(1)
//   ["c"]=>
//   NULL
//   ["d"]=>
//   NULL


// class_exists
// Проверяем существование класса прежде чем создать экземпляр объекта
if (class_exists('MyClass')) {
    $myclass = new MyClass();
}

// method_exists — Проверяет, существует ли метод в классе
// Возвращает true, если метод method определён для указанного объекта object_or_class, иначе false.

// property_exists — Проверяет, есть ли у объекта или класса свойство
// Функция проверяет, существует ли свойство property в указанном классе.

class myClass {
    public $mine;
    private $xpto;
    static protected $test;

    static function test() {
        var_dump(property_exists('myClass', 'xpto')); //true
    }
}
var_dump(property_exists('myClass', 'mine'));   // true
var_dump(property_exists(new myClass, 'mine')); // true
var_dump(property_exists('myClass', 'xpto'));   // true
var_dump(property_exists('myClass', 'bar'));    // false
var_dump(property_exists('myClass', 'test'));   // true
myClass::test();


// get_parent_class — Получает имя родительского класса для объекта или класса
// Функция получает имя родительского класса для объекта или класса.



class Dad
{
    function __construct()
    {
        // Реализация логики
    }
}

class Child extends Dad
{
    function __construct()
    {
        echo "I'm " , get_parent_class($this) , "'s son\n";
    }
}

class Child2 extends Dad
{
    function __construct()
    {
        echo "I'm " , get_parent_class('child2') , "'s son too\n";
    }
}

$foo = new child();
$bar = new child2();

// Результат выполнения приведённого примера:
// I'm Dad's son
// I'm Dad's son too


// is_subclass_of — Проверяет, принадлежит ли объект к потомкам класса, или реализует ли объект или родители объекта интерфейс


// is_a — Проверяет, принадлежит ли объект к типу или подтипу
// Функция определяет, принадлежит ли объект или класс object_or_class непосредственно к типу объекта class, или тип объекта class — супертип объекта или класса, который проверяют.

// get_declared_classes — Возвращает массив с именами объявленных классов

// Абстрактные классы в ООП на PHP
// Для этого существуют так называемые абстрактные классы. Абстрактные классы представляют собой классы, предназначенные для наследования от них. При этом объекты таких классов нельзя создать.

abstract class User
	{
		private $name;
		
		public function getName()
		{
			return $this->name;
		}
		
		public function setName($name)
		{
			$this->name = $name;
		}
	}

	// $user = new User; // выдаст ошибку

	// А вот унаследовать от нашего класса будет можно. Сделаем класс Employee, который будет наследовать от нашего абстрактного класса User:
	class Employee extends User
	{
		private $salary;
		
		public function getSalary()
		{
			return $this->salary;
		}
		
		public function setSalary($salary)
		{
			$this->salary = $salary;
		}
		
	}

	// Создадим объект класса Employee - все будет работать:
	$employee = new Employee;
	$employee->setName('john'); 
		 // метод родителя, 
		т.е. класса User 
	$employee->setSalary(1000); 
		 // свой метод, т.е. класса 
		Employee 
	
	echo $employee->getName();   // выведет 
		'john' 
	echo $employee->getSalary(); // выведет 1000



	class Student extends User
	{
		private $scholarship;
		
		public function getScholarship()
		{
			return $this->scholarship;
		}
		
		public function setScholarship($scholarship)
		{
			$this->scholarship = $scholarship;
		}
	}


	// Абстрактные методы
	// Абстрактные классы также могут содержать абстрактные методы. Такие методы не должны иметь реализации, а нужны для того, чтобы указать, что такие методы должны быть у потомков. А собственно реализация таких методов - уже задача потомков.
	


?>

