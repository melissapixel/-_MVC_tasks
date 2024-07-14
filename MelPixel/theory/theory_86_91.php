<?php
    // Введение в пространства имен в ООП на PHP
    // Если при запуске PHP скрипта будут два класса с одинаковыми именами, то они вступят в конфликт, что приведет к фатальной ошибке. Это на самом деле не очень удобно, так как постоянно приходится следить за уникальностью имен.
    // Для примера рассмотрим следующую ситуацию: у вас есть сайт, на котором есть пользователи и админ. При этом в папке users хранятся классы для юзеров, а в папке admin - классы для админа.
    // Пусть и для юзеров, и для админа нужен некий класс Page, отвечающий за какие-то страницы сайта. При этом для юзеров будет свой класс, а для админа - свой. В таком случае нас и поджидает конфликт имен.

    // То есть, для решения нашей проблемы мы можем сделать следующее: отнести один класс Page к какому-нибудь пространству имен, например, Users, а второй класс Page отнести к другому пространству имен, например, Admin.
    // Пусть теперь этот класс принадлежит пространству имен Admin. В этом случае объект этого класса мы будем создавать уже вот таким образом:
    $page = new \Admin\Page;

    // Для класса Page из файла /admin/page.php укажем пространство имен Admin:
    namespace Admin;
	class Page
	{
	}

    namespace Users;
	class Page
	{
	}

    // Давайте теперь в файле /index.php создадим объект одного и второго класса Page:
    require_once '/admin/page.php';
	require_once '/users/page.php';
	$adminPage = new \Admin\Page;
	$usersPage = new \Users\Page;

    //  Пусть первый класс находится в файле /admin/data/page.php, а второй - в файле /admin/view/page.php.
    // Выше мы уже решили, что все классы из папки admin будут относится к пространству имен Admin. Однако, теперь в этом самом пространстве у нас конфликт двух классов. Для решения проблемы можно сделать дополнительные подпространства имен. Например, можно сделать пространство имен Admin, а в нем подпространства Data и View. 
    namespace Admin\Data;
	class Page
    }
	}
    namespace Admin\View;
	class Page
	{
	}

    require_once '/admin/data/page.php';
	require_once '/admin/view/page.php';
	$adminDataPage = new \Admin\Data\Page;
	$adminViewPage = new \Admin\View\Page;

    // В примерах выше имена пространств имен совпадают с именами папок, в которых хранятся файлы.


    // Упрощенное обращение к пространствам имен
    namespace Admin;
	class Page extends \Admin\Controller
	{
	}
    // В данном примере, однако, есть нюанс: оба класса принадлежат одному и тому же пространству имен. В таком случае при обращении к классу можно просто написать имя этого класса, вот так:
    namespace Admin;
	class Page extends Controller
	{
	}


    namespace Admin\Data;
	new Core\Controller; // эквивалентно \Admin\Data\Core\Controller


    // Команда use и пространства имен
    namespace Users;
	use \Core\Admin\Data; // подключаем класс 
	
	class Page extends Controller
	{
		public function __construct()
		{
			$data1 = new Data('1'); // вызываем просто по имени 
			$data2 = new Data('2'); // вызываем просто по имени 
		}
	}

//     Подключение нескольких классов
// Если нужно подключить несколько классов, то каждый из них подключается своей командой use
    namespace Users;
    use \Core\Admin\Data1; // подключаем класс 
    use \Core\Admin\Data2; // подключаем класс 
    class Page extends Controller
    {
        public function __construct()
        {
            $data1 = new Data1; // вызываем просто по имени 
            $data2 = new Data2; // вызываем просто по имени 
        }
    }

    namespace Core\Admin;
	use \Core\Admin\Path\Router; // подключаем класс 
	class Controller extends Router
	{
	}

    namespace Core\Admin;
	use Path\Router; // делаем относительный путь 
	class Controller extends Router
	{
	}

    // Псевдонимы классов для пространств имен
    namespace Project;
	
	// Будет конфликт имен:
	use \Core\Users\Data; // подключаем первый класс 
	use \Core\Admin\Data; // подключаем второй класс 
	class Test
	{
		public function __construct()
		{
			$data1 = new Data;
			$data2 = new Data;
		}
	}


    namespace Project;
	use \Core\Users\Data as UsersData;
	use \Core\Admin\Data as AdminData;
	class Test
	{
		public function __construct()
		{
			$data1 = new UsersData;
			$data2 = new AdminData;
		}
	}


    // Автозагрузка классов
    // Давайте теперь в файле index.php используем наш класс, не подключая его через require, а используя автозагрузку. Для этого в начале файла, в котором вызываются классы, следует вызвать функцию spl_autoload_register
	// Функция spl_autoload_register пишется только один раз в начале файла. Затем можно создавать столько объектов разных классов, сколько угодно, главное, чтобы их имена следовали соглашениям.
	// Функция spl_autoload_register пишется только в начале того файла, который вызывается через адресную строку браузера. То есть, если какой-то класс вызывает внутри себя другой класс или наследует от кого-то, а сам класс вызывается в другом файле, то spl_autoload_register нужно написать только в этом другом файле - в самом файле класса дублировать эту функцию не надо.



	// Своя функция для автозагрузки классов
	spl_autoload_register(function($class) {
		$root = $_SERVER['DOCUMENT_ROOT'];
		$ds = DIRECTORY_SEPARATOR;
		
		$filename = $root 
			. $ds . str_replace('\\', 
			$ds, $class) . '.php'; 
		require($filename);
	});
	
?>