<?php

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
$database = new Database();

?>