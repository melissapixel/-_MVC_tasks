<?php
    // Класс Date в ООП на PHP
    class Date
	{
		public function __construct($date = null) 
		{
			// если дата не передана - пусть берется текущая 
            if ($date === null) {
                $this->date = new DateTime();
            } else {
                $this->date = new DateTime($date);
            }
		}
		
		public function getDay()
		{
			// возвращает день
            return $this->date->format('d');
		}
		
		public function getMonth($lang = null)
		{
			// возвращает месяц
			// переменная $lang 
				// может принимать значение ru 
				// или en 
			// если эта не пуста 
				// - пусть месяц будет словом 
		// 		на заданном языке 
        $month = $this->date->format('m');
        if ($lang === 'ru') {
            $months = [
                '01' => 'Январь', '02' => 'Февраль', '03' => 'Март',
                '04' => 'Апрель', '05' => 'Май', '06' => 'Июнь',
                '07' => 'Июль', '08' => 'Август', '09' => 'Сентябрь',
                '10' => 'Октябрь', '11' => 'Ноябрь', '12' => 'Декабрь'
            ];
            return $months[$month];
        } elseif ($lang === 'en') {
            return $this->date->format('F');
        }
        return $month;
    }
		
		public function getYear()
		{
			// возвращает год
            return $this->date->format('Y');
		}
		
		public function getWeekDay($lang = null) 
		{
			// возвращает день недели
			// переменная $lang 
			// 	может принимать значение ru 
			// 	или en 
			// // если эта не пуста 
			// 	- пусть день будет словом 
			// 	на заданном языке 
            $weekday = $this->date->format('N');
        if ($lang === 'ru') {
            $weekdays = [
                '1' => 'Понедельник', '2' => 'Вторник', '3' => 'Среда',
                '4' => 'Четверг', '5' => 'Пятница', '6' => 'Суббота',
                '7' => 'Воскресенье'
            ];
            return $weekdays[$weekday];
        } elseif ($lang === 'en') {
            return $this->date->format('l');
        }
        return $weekday;
    }

		
		
		public function addDay($value)
		{
			// добавляет значение $value к дню
            $this->date->modify("+$value days");

		}
		
		public function subDay($value)
		{
			// отнимает значение $value от дня
            $this->date->modify("-$value days");

		}
		
		public function addMonth($value)
		{
			// добавляет значение $value к месяцу
            $this->date->modify("+$value months");

		}
		
		public function subMonth($value)
		{
			// отнимает значение $value от 
				// месяца 
            $this->date->modify("-$value months");

		}
		
		public function addYear($value)
		{
			// добавляет значение $value к году
		}
		
		public function subYear($value)
		{
			// отнимает значение $value от года
		}
		
		public function format($format)
		{
			// выведет дату в указанном 
			// 	формате 
			// // формат пусть будет 
			// 	такой же, как в функции 
			// 	date 
		}
		
		public function __toString()
		{
			// выведет дату в формате 
				// 'год-месяц-день' 
		}
	}
    $date = new Date('2025-12-31');
	
	echo $date->getYear();
?>