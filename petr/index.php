<?php

// Функция калькулятора

class Colculate {
    private $num_one;
    private $num_two;

    public function __construct($one, $two){
        $this->num_one = $one;
        $this->num_two = $two;
    }

    public function setNum($one, $two){
        $this->num_one = $one;
        $this->num_two = $two;
    }

    public function getNum(){
        return "One: $this->num_one Two: $this->num_two";
    }

    public function setPlus(){
        return $this->num_one + $this->num_two;
    }
}

$colcul = new Colculate(2, 8);
echo $colcul->getNum();

// Код HTML можно записать в метод класса и потом использовать для сайта, вызывая как обычный метод и вставляя в нужное место на сайте.
// Таким образом, всё PHP приложение можно разсположить в классах, от верстки до бизнес-логики, и безопасно использовать.

class HTMLcode {
    private $html;

    public function setHTML(){
        $html = '
            <header class="header">
                <div class="container">
                    <div class="logo">
                        <img src="logo.png" alt="Логотип">
                    </div>
                    <nav class="nav">
                        <a href="#" class="nav-link">О нас</a>
                        <a href="#" class="nav-link">Форум</a>
                        <a href="#" class="nav-link">Новости</a>
                    </nav>
                    <div class="search">
                        <input type="text" placeholder="Поиск...">
                        <button type="button">Искать</button>
                    </div>
                    <div class="auth">
                        <a href="#" class="auth-link">Войти</a>
                        <a href="#" class="auth-link">Регистрация</a>
                    </div>
                </div>
            </header>
        ';

        return $html;
    }
}

$header = new HTMLcode();

// Класс для подключения к БД
class Database
{
    private $host = 'MySQL-8.2';
    private $username = 'root';
    private $password = '';
    private $database = 'oop_db';

    private $connection;

    public function __construct()
    {
        $this->connection = new mysqli($this->host, $this->username, $this->password);

        if ($this->connection->connect_error) {
            die("Connection failed: " . $this->connection->connect_error);
        }

        $this->createDatabase();

        $this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);

        if ($this->connection->connect_error) {
            die("Connection failed: " . $this->connection->connect_error);
        }
    }

    public function getData()
    {
        $query = "SELECT * FROM oop_main_table";
        $result = $this->connection->query($query);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "Field1: " . $row["login"];
            }
        } else {
            echo "0 results";
        }
    }

    public function getData_2()
    {
        $query = "SELECT * FROM oop_main_table";
        $result = $this->connection->query($query);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "Field1: " . $row["password"];
            }
        } else {
            echo "0 results";
        }
    }

    private function createDatabase()
    {
        $sql = "CREATE DATABASE IF NOT EXISTS " . $this->database;
        if ($this->connection->query($sql) === false) {
            die("Error creating database: " . $this->connection->error);
        }
    }

    public function createTable()
    {
        $sql = "CREATE TABLE IF NOT EXISTS oop_main_table (
            id INT AUTO_INCREMENT PRIMARY KEY,
            login VARCHAR(10),
            password VARCHAR(100),
            data VARCHAR(50)
        )";

        if ($this->connection->query($sql) === false) {
            die("Error creating table: " . $this->connection->error);
        }
    }

    public function insertData()
    {
        $login = $this->connection->real_escape_string('Имя');
        $password = $this->connection->real_escape_string('Фамилия');
        $data = $this->connection->real_escape_string('345');

        $sql = "INSERT INTO oop_main_table (login, password, data) VALUES ('$login', '$password', '$data')";

        if ($this->connection->query($sql) === false) {
            die("Error inserting data: " . $this->connection->error);
        } else {
            echo "Data inserted successfully!";
        }
    }

    public function __destruct()
    {
        $this->connection->close();
    }
}

// Использование класса для получения данных
//$database = new Database();

?>